<?php 
    $raio = 3; //variável raio
    $circun; //variável da circunferência
    $alt = 10; //variável da altura
    $pi = 3.14159; //variável pi

    echo "Esse programa calcula e apresenta o valor do volume de uma lata de óleo, utilizando a fórmula: volume: 3.14159(pi)*r2*altura.";
    echo "</br> </br> Valor do raio: ".$raio;
    echo "</br> Altura: ".$alt;

    $circun = $pi*($raio*$raio)*$alt;
    
    echo "</br> </br>Volume da lata de óleo: ".$circun;
      
    
?>