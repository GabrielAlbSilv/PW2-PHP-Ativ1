<?php 
    $horat = 100; //aula dadas no mÊs
    $salh = 60; //salário por hora aula
    $des; //desconto do INSS
    $sal; //Salário
    $salx; //Variável de apoio

    echo "Esse programa calcula o salário de um professor";
    echo "</br> </br> Aulas dadas no mês: ".$horat;
    echo "</br> </br> Salário por hora aula: ".$salh;

    $sal = $horat*$salh;
    
    $salx = $sal;

    if ($sal <=1000){

        $salx = 0.085*$salx;
        $des = $sal-$salx;
        echo "</br> </br>Desconto do INSS: 8,5%";
        echo "</br> </br>Salário Bruto R$:".$sal;
        echo "</br> </br>Salário Liquído (final): R$".$des; 
    } else{

        $salx = 0.09*$salx;
        $des = $sal-$salx;
        echo "</br> </br>Desconto do INSS: 9%";
        echo "</br> </br>Salário Bruto R$:".$sal;
        echo "</br> </br>Salário Liquído (final): R$".$des; 
    }
    
?>