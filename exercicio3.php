<?php 
   $senha = "queroamigos2";
   $val1 = 4;
   $val2 = 2;

   echo "Esse programa verifica se a senha inseria está correta";
   echo "</br> Resultado de: ".$val1."/".$val2." para verificação";
   echo "</br>Senha inserida: ".$senha."</br> </br> Resultado da verificação:</br>";

   if ($senha == "queroamigos"){

    echo "Senha Correta!! Resultado de ".$val1."/".$val2."= ".($val1/$val2);
   } else if ($senha != "queroamigos"){

    echo "Senha incorreta!";
   }



?>