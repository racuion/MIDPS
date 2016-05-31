<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ro">
<head>
<style>
a{
text-decoration:none;
color:black;
}
</style>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Cautare</title>
</head>
<body bgcolor="lightgray">
<div id="search">
		<form method="post" action="search.php"> 
			<table cellpadding="0px" cellspacing="0px"> 
			<tr> 
			<td style="border-style:solid none solid solid;border-color:#e67e22;border-width:2px;">
				<input type="text" name="searchquery" value="" style="width:200px; height:17px; border:0px solid; position:relative;"> 
			</td>
			<td style="border-style:solid;border-color:#e67e22;border-width:2px;"> 
				<input type="submit" name="myBtn" value="" style="border-style: none; background: url('images/search.png') no-repeat;  width: 24px; height: 20px;">
			</td>
			</tr>
			</table>
		</form>
</div>

<?php
// Se verifica daca e primita valoare de la formular si are mai mult de 1 caracter
if (isset($_POST['searchquery']) && strlen($_POST['searchquery'])>1) {
  // Preia valoarea, eliminand posibile spatii exterioare
  $searchquery = trim($_POST['searchquery']);

  // conecteaza la baza de date
  $conn = new mysqli('localhost', 'root', '', 'cautare');

  $search_output = "";
  // verifica conexiunea
  if (mysqli_connect_errno()) {
    exit('Connect failed: '. mysqli_connect_error());
  }

  // Filtreaza caracterele speciale ca sa poata fi utilizate in comanda SQL 
  $searchquery = $conn->real_escape_string($searchquery);

  // Se face selectarea si afisarea datelor returnate
  $sql = "SELECT * FROM `pages` WHERE `page_body` LIKE '%$searchquery%' OR `page_title` LIKE '%$searchquery%' "; 

  // executa interogarea si retine datele returnate
  $result = $conn->query($sql);

  // daca $result contine cel putin un rand
  if ($result->num_rows > 0) {
    // Parcurge si afiseaza randurile gasite
    while($row = $result->fetch_assoc()) {
    echo '<br /><strong><a href="'. $row['page_url'].'"</a><br/>'. $row['page_title']. '</strong> <br/> '. $row['page_body'];
	echo '<hr>';
    
}
  }
  else {
  echo "<hr />0 rezultate pentru <strong>$searchquery</strong><hr />";
  }

  $conn->close();
}
?>

</body>
</html>
