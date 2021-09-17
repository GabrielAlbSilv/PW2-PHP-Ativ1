<?php 

    $combus; //variável combustivel gasto
    $dis = 50; //variável distância percorrida
    $temp = 5; //tempo gasto na viagem
    $velo= 10; //variável velocidade média

    echo "Esse programa efetua o cálculo da quantidade de litros de combustível gastos em uma viagem";
    echo "</br> </br> Velocidade média: ".$velo."km por hora";
    echo "</br> Tempo médio da viagem: ".$temp."hora(s)";
    echo "</br> Distância percorrida: ".$dis."km";

    $dis = $temp*$velo;
    $combus = $dis/12;
    
    echo "</br> </br>:Combustível gasto: ".$combus." litros";
      
    
?>