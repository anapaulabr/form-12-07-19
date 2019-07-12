<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Atividade Prática 02-Seletor de vinhos</title>
</head>
<body>
<img src="vinho4.jpg"  width="250" height="180">
<img src="vinho2.jpg"  width="250" height="180">
<img src="vinho3.jpg"  width="250" height="180">

<br/>
<br/>

<?php

   $nome= $_POST ['txtnome'];
   $vinho= $_POST ['vin'];
   $comida= $_POST ['txtcomi'];

   echo "\n";
   echo " Obrigado pela seleção,$nome \n ";
?>
   <hr>

<?php
   echo "\n Você realmente aprecia $comida \n ";
   echo " \n-Especialmente com um bom vinho $vinho \n ";
?>
</body>
</html>