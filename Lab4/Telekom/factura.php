<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/style-menu.css">
   <link rel="stylesheet" href="css/style.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="css/script.js"></script>
   <link rel="stylesheet" href="ism/css/my-slider.css"/>
   <script src="ism/js/ism-2.1.js"></script>
   <link rel="icon" type="image/png" href="images/logo.png"/>
   <title>TelekomMD</title>
</head>
<body id="background">
<?php
include 'adauga.php';
?>
<div class="logo">
	<a href="index.html"><img src="images/logo.png" ></a>
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
</div>

<div class="menu">
<div id='cssmenu'>
<ul>
   <li class='active'><a href="index.html">Home</a></li>
   <li><a href="abonamente.html">Abonamente</a></li>
   <li><a href="clienti.php">Clienti</a></li>
   <li><a href="help.html">Contacte</a></li>
</ul>
</div>
</div>

<div class="centru">
<div class="corp">
<form  action="" method="post">

<div style="width:12em; float:right;">
<img src="images/logo.png">
</div>

<div style=" width:25em; height:7em;  margin-left:1em;">
<b>
<?php
echo $nume_comp;
?>
</b>
<br>
<b>
IDNO
<?php
echo $cod_fisc;
?>
</b>
<br>
<b>
<?php
echo $adresa_comp;
?>
<br>
www.telekom.md
</b>
</div>
<br>

<div style="float:right; width:14em; height:5em; margin-right:2em;">
Numarul contului:
<b>
<?php
echo $id_contract;
?>
</b>
<br>

Numarul facturii:
<font style="padding-left:0.4em;">
<b>
<?php
echo $id_factura;
?>
</b>
</font>
<br>

Data eliberarii:
<font style="padding-left:1.4em;">
<b>
<?php
print date( 'd.m.Y' ); 
?>
</b>
</font>
<br>
</div>

<div style=" float: right; padding-left:1em; margin-right:1em; width:33em; height:15em; ">
<br><br>
<h3 style="padding-left:2em;">FACTURA TELEFONICA</h3>
Abonament:
<b>
<?php
echo $abonament;
?>
</b>
<br>
Telefon:
<b>
<?php
echo $telefon;
?>
</b>
<br>
Consum minute abonament:
<b>
<?php
echo $min_consum." min.";
?>
</b>
<br>
Consum minute extra-abonament:
<br>
- ziua:
<b>
<?php
echo $extra1." min.";
?>
</b>
<div style="float: right; padding-right:18em;">
- noaptea:
<b>
<?php
echo $extra2." min.";
?>
</b>
</div>
<br>
Abonament in perioada:
<b>
<?php
echo date("d.m.Y", strtotime($data1));
?>
   - 
<?php
echo date("d.m.Y", strtotime($data2));
?>
</b>
<b>
<font style="padding-left:7.9em;">
<?php
echo number_format($suma_abon, 2, ',', ' ')." lei";
?>
</font>
</b>
<br>

Extra-abonament in perioada:
<b>
<?php
echo date("d.m.Y", strtotime($data1));
?>
   - 
<?php
echo date("d.m.Y", strtotime($data2));
?>
</b>
<b>
<font style="padding-left:5.70em;">
<?php
echo number_format($suma_extra, 2, ',', ' ')." lei";
?>
</font>
</b>

<br><br>
<p style=" padding-right: 2em; float:right;">
Total spre achitare:
<b>
<?php
echo number_format($suma, 2, ',', ' ')." lei";
?>
</b>
</p>
</div>

<div style="width:12em; height:8em; margin-left:1em;">
Abonatul:
<b>
<?php
echo $nume_cl;
?>
</b>
<b>
<?php
echo $prenume_cl;
?>
</b>
<br>
Adresa:
<b>
<?php
echo $adresa_cl;
?>
</b>
</div>
</form>
	</div>
<div style="padding-left:6em; width:70em; position:relative;">
  <div class="service">
     DESPRE NOI
 <a href="about.html"><img src="images/s1.png" width="190px"  height="183px" ></a>
  </div>
  
   <div class="service">
     ADMINISTRA&#354;IA
 <a href="admin.html"><img src="images/s2.png" width="190px"  height="183px" ></a>
   </div>
  
  <div class="service">
     LOCALIZARE
 <a href="locatia.html"><img src="images/s3.png" width="190px"  height="183px" ></a>
  </div>
   <div class="service">
     OFERTA LUNII
 <a href="oferta.php"><img src="images/s4.png" width="190px"  height="183px" ></a>
  </div>
   </div>
</div>
<div class="jos">
Racu Ion
</div>
</body>
<html>
