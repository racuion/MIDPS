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
   <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="ism/css/my-slider.css"/>
	<script src="ism/js/ism-2.1.js"></script>
   <link rel="icon" type="image/png" href="images/logo.png"/>
   <title>TelekomMD</title>
</head>
<body id="background">

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
<div class="about">
<h2>Oferta lunii</h2>
<b>Devino client TelekomMD acum si primesti:</b>
<br>
<ul type="square">
<li>primele 3 luni de abonament gratuite;</li><br>
<li>reducere 50% la apeluri internationale in primele 6 luni;</li><br>
<li>convorbiri nationale gratuite seara si in weekend timp de 1 an;</li>
</ul>
<br>
<b>Pina la expirarea ofertei au ramas:
<?php
$startdate = '2015-12-31';
$enddate = date('Y-m-d');        // pt data curenta:  date('Y-m-d');
$days = (strtotime($startdate) - strtotime($enddate))/(60 * 60 * 24);
echo $days." zile";
?>
</b>
</div>
<br><br><br>
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