<html>
<head>
<meta charset="UTF-8">
<style>
img {
    width: 20%;
    height: auto;
}
body {background-color: rgb(101, 200, 75);}
h3 {color: rgb(77, 88, 66); text-align: center; font-family: verdana; font-size: 50px;  font-weight: bold;}
div {text-align: center;}
p.nuoroda {color: blue; text-align: center; font-family: verdana; font-weight: normal; font-size: 16px;}

.laiskas {height: 110px; width: 50%; border-style: double; border-color: red; 
	margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 250px;
    margin-left: 325px;
background-color: lightblue; color: black; 
text-align: center; font-family: verdana; font-weight: normal; font-size: 14px;}

#Kaledos {height: 40px; width: 10%;  border: 2px solid pink;
    border-radius: 5px; border style: dashed; 
	margin-top: 10px;
    margin-bottom: 50px;
    margin-right: 30px;
    margin-left: 750px;
	padding-top: 15px;
    padding-right: 10px;
    padding-bottom: 15px;
    padding-left: 10px;
	background-color: 	rgb(191, 255, 0); color: blue;
	text-align: center; font-family: verdana; font-weight: normal; font-size: 12px;
}

#zodis {color: red;}
#sveikinimas {text-align:center;}
#velykos { align: center;
} 

</style>

</head>
<body>
<div>
<?php

$a=$_POST['vardas'];

 
  echo "
  <h3>Sveiki, lankytojau, vardu $a!</h3>
 ";
 echo "Jūsų prisijungimo laikas"." "; 
 echo date("Y-m-d H:i:s");
 
	  if ($a=="Kostas"){
	 echo "<div class='laiskas'><p>Labas, Kostai, <br><br>
	 Ačiū už testavimo paslaugas  :) <br></p>
 </div>";}
 elseif ($a=="Girius") {
	 echo "<div class='laiskas'><p>Labas, Giriau, <br> Tavo prisijungimas veikia.<br></p>
 </div>";
 }
	else {echo "<div class='laiskas'><p>Ačiū, kad apsilankėte. <br>Gero laiko!</p>
 </div>";

 }

?>

<div id="sveikinimas">
<b>Su pavasariu!</b>
</div>
<div id="velykos">
<img src="Velyku_kiausiniai.jpg"/>
 </div>
 
<div id="Kaledos"><a href="Kaledos.html"><b>Čia galite <div id=zodis>susipažinti<br></div>
su Kalėdų projektu</b></a>
</div>


 
<p class="nuoroda"><a href="index.php"><i>Grįžti</i></a></p>
</div>



</body>
</html>