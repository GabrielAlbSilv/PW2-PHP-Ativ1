<?php 

    $horat = 300; //horas trabalhadas
    $salh = 10; //salário por hora
    $dep = 0; //dependentes
    $des; //desconto do INSS
    $des2; //desconto do IR
    $salbc; //Variável de apoio
    $salb; //Salário

    echo "Esse programa calcula o salário líquido";

    $salb = ($horat*$salh)+(50*$dep); //pegando salário bruto
    $salbc = $salb; //definindo variável $salbc como apoio de $salb
    echo "</br> Horas trabalhas :".$horat;
    echo "</br> Salário por hora: ".$salh;
    echo "</br> Dependentes: ".$dep;
    echo "</br> Salário Bruto: ".$salb;
    

    if ($salbc <= 500){
        $des = 0.09*$salb;
        $salb = $salb-$des;

        echo "</br>Salário líquido: R$".$salb."</br>INSS: ".$des;


    } else if ($salb > 500 && $salb <=1000){
        $des = 0.0085*$salb; //% INSS

        $des2 = 0.05*$salbc; //% IR
        
        $salb = $salb-$des-($des2);

        echo "</br>Salário líquido: R$".$salb."</br>INSS: ".$des."</br>IR: ".$des2;

    } else if ($salb > 1000){
            $des = 0.09*$salb; //% INSS

            $des2 = 0.07*$salbc; //% IR

            $salb = $salb-$des-($des2);
            echo "</br>Salário líquido: R$".$salb."</br>INSS: ".$des."</br>IR: ".$des2;
    }
?>

