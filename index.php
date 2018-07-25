<html>
<head>
<meta charset="UTF-8">

<style>
title {sveiki}
body {background-color: rgb(201, 245, 209);}
h3 {color: rgb(15, 88, 45); text-align: center; font-family: verdana; font-size: 50px; font-weight: bold;}
div {text-align: center;}


</style>

</head>
<body>


<div>
<?php
echo "
<form action='gauti.php' method='post'>
  <h3>Jūsų vardas:</h3> <input type='text' name='vardas'/> <br> <br>
  <input type='submit' value='Pateikti'/> 
</form>";

 /*

$a="Vardaitė";
$b="Vardas";
$c="Vardelis";
$d="Vardutis";

 
function mergaites ($vardas, $gimimom){
	echo "$vardas Pavardienė, $gimimom.<br><br>";}
	
mergaites ($a, 1974);

function berniukai ($vardas, $gimimom){
echo "$vardas Pavardė, $gimimom. <br><br>";}
		
berniukai ($b, 1973);
berniukai ($c, 2000);
berniukai ($d, 2001);

function sudetis ($a, $b, $c){
	$y=$a+$b+$c;
	return $y;
}

echo "suma yra " . sudetis (2, 5, 9);
*/

?>
</div>
</body>
</html>