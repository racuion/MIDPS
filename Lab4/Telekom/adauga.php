<?php
// Se defineste un Header pt. a utiliza setul de caractere cu format UTF-8
header('Content-type: text/html; charset=utf-8');

$db_host = "localhost";
// Place the username for the MySQL database here
$db_username = "root"; 
// Place the password for the MySQL database here
$db_pass = "";
// Place the name for the MySQL database here
$db_name = "telekom";

$link = mysql_connect("$db_host", "$db_username", "") or die("Nu se poate conecta");
mysql_select_db("$db_name", $link) or die("nu se poate alege baza de date");

$mess = '';          // Variabila folosita pt. mesajul ce va fi afisat pt. utilizator

// Se verifica daca sunt primite datele de la formular
if (isset($_POST['cod_pers']) && isset($_POST['telefon'])&& isset($_POST['luna'])){
  // Se filtreaza datele pt. eliminare posibile spatii exterioare si tag-uri
  $_POST = array_map("trim", $_POST);
  $_POST = array_map("strip_tags", $_POST);

  // Se verifica daca "magic_quotes_gpc()" este setat ON
  // Daca e ON, se aplica stripslashes() pentru a nu se adauga de 2 ori '\' cand va fi aplicat "mysql_real_escape_string()"
  if(get_magic_quotes_gpc()) { $_POST = array_map("stripslashes", $_POST); }

  // Se verifica daca au fost completate corect toate campurile
  // Daca au fost completate le preia in variabile, in caz contrar seteaza o variabila tip Array cu mesaj de eroare


  if (strlen($_POST['cod_pers'])<14 && strlen($_POST['cod_pers'])>12) $cod_pers = $_POST['cod_pers'];
  else{
	header("Refresh:0; url=clienti.php");
	$eroare[] = '<script type="text/javascript">
    alert("Codul personal trebuie sa contina 13 cifre!");
    </script>';
  }
  
  if(strlen($_POST['telefon'])<7 && strlen($_POST['telefon'])>4)$telefon = $_POST['telefon'];
  else{ 
	header("Refresh:0; url=clienti.php");
	$eroare[] = '<script type="text/javascript">
    alert("Numarul de telefon trebuie sa contina 5-6 cifre!");
    </script>';
  }
  
  $luna=$_POST['luna'];
  
  
  if (!isset($eroare)) {

    // Se aplica functia de filtrare mysql_real_escape_string()
    $cod_pers = mysql_real_escape_string($cod_pers);
	$telefon = mysql_real_escape_string($telefon);
	
	$comanda = "SELECT cod_pers FROM clienti WHERE cod_pers=$cod_pers;";
    $rezultat = mysql_query($comanda);
	$row = mysql_fetch_array($rezultat);
    
	if($row == NULL){
	header("Refresh:0; url=clienti.php");
	echo '<script type="text/javascript">
    alert("Cod personal inexistent!");
    </script>';
	}
	
	$comanda = "SELECT telefon, cod_pers FROM contracte WHERE telefon=$telefon AND cod_pers=$cod_pers;";
    $rezultat = mysql_query($comanda);
	$row = mysql_fetch_array($rezultat);
    
	if($row == NULL){
	header("Refresh:0; url=clienti.php");
	echo '<script type="text/javascript">
    alert("Numarul de telefon gresit!");
    </script>';
	}
	
	$comanda = "SELECT contracte.*, facturi.* FROM contracte, facturi WHERE cod_pers=$cod_pers AND contracte.id_contr=facturi.id_contr AND MONTH(data_in)=$luna;";
    $rezultat = mysql_query($comanda);
	$row = mysql_fetch_array($rezultat);
    
	if($row == NULL){
	header("Refresh:0; url=clienti.php");
	echo '<script type="text/javascript">
    alert("Factura din luna selectata nu a fost găsită!");
    </script>';
	}
	
   $comanda = "SELECT nume, prenume, adresa_cl FROM clienti WHERE cod_pers=$cod_pers;";
   $rezultat = mysql_query($comanda);
   
	while($row = mysql_fetch_array($rezultat)) 
    {
    $nume_cl=$row['nume'];
	$prenume_cl=$row['prenume'];
	$adresa_cl=$row['adresa_cl'];
    }	
	
   $comanda = "SELECT * FROM beneficiar;";
   $rezultat = mysql_query($comanda);
    while($row = mysql_fetch_array($rezultat)) 
    {
    $nume_comp=$row['denumire'];
	$cod_fisc=$row['cod_fisc'];
	$adresa_comp=$row['adresa'];
    }
	
   $comanda = "SELECT contracte.*, facturi.*, abonamente.* FROM contracte, facturi, abonamente WHERE cod_pers=$cod_pers AND contracte.id_contr=facturi.id_contr AND MONTH(data_in)=$luna;";
   $rezultat = mysql_query($comanda);
    while($row = mysql_fetch_array($rezultat)) 
    {
    $id_factura=$row['id_fact'];
	$id_contract=$row['id_contr'];
	$data1=$row['data_in'];
	$data2=$row['data_fin'];
	$min_consum=$row['consum_abon'];
	$abonament=$row['denum_abon'];
	$telefon=$row['telefon'];
	$extra1=$row['extra_zi'];
	$extra2=$row['extra_np'];
	$suma=$row['pret'] + $row['tarif_zi']*$row['extra_zi'] + $row['tarif_noapte']*$row['extra_np'];
	$suma_abon=$row['pret'];
	$suma_extra=$row['tarif_zi']*$row['extra_zi'] + $row['tarif_noapte']*$row['extra_np'];
    }	
	mysql_close($link);
  }
  else $mess= '<font color="red">'. implode('<br/>', $eroare).'</font>';
}
else{
echo '<script type="text/javascript">
    alert("Completati campurile!");
    </script>';
	header("Refresh:0; url=clienti.php");
}
?>


