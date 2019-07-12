<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Atividade Prática 02-Seletor de Cálculos</title>
</head>
<body>
 
<?php

   $valor1= $_POST ['v1'];
   $valor2= $_POST ['v2'];
   $calculo= $_POST ['calc'];
   
   if (is_numeric($valor1) && is_numeric($valor2))
   {
       if ($calculo != null){
           switch ($calculo)
           {
               case "ad":
               $result=$valor1 + $valor2;
               break;

               case "sub":
               $result= $valor1- $valor2;
               break;

               case "mult":
               $result= $valor1*$valor2;
               break;

               case "div":
               $result= $valor1/$valor2;
               break;

           }
       }
   }

   echo "  Resultado do cálculo = $result  ";
?>
</body>
</html>