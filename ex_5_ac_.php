<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Atividade Prática 02-Seletor de texto</title>
</head>
<body>
 
<?php

   $msg= $_POST ['msg'];
   $texto= $_POST ['text'];
  
  
   if (is_string ($msg) )
   {
       if ($texto != null){
           switch ($texto)
           {
               case "tam":
               $str = $msg;
               $result=strlen($str);
               break;

               case "invert":
               $result=strrev("$msg");
               break;

               case "mud_maius":
               $str = $msg;
               $result = strtoupper($str);
               break;

               case "mud_minus":
               $str = $msg;
               $result = strtolower($str);
               break;

               case "alt_maius":
               $foo = $msg;
               $result = ucwords($foo);
               break;


           }
       }
   }

   echo " $result ";
?>
</body>
</html>

