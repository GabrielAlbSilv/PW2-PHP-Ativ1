<?php 
    $cod = 8;
    echo "Esse programa insere uma porcentagems sobre certos valores";
    switch ($cod){

        case 1: 
            echo "</br> </br> Valor inicial: ".$cod."</br>"; 
            echo "Porcemtagem inserida: 10% </br>"; 
            $res = 0.1*$cod;
            $cod = $res+$cod;
            echo "Valor final: ".$cod;
        break;

        case 3: 
            echo "</br> </br> Valor inicial: ".$cod."</br>"; 
            echo "Porcemtagem inserida: 25% </br>"; 
            $res = 0.25*$cod;
            $cod = $res+$cod;
            echo "Valor final: ".$cod;
        break;

        case 4: 
            echo "</br> </br> Valor inicial: ".$cod."</br>"; 
            echo "Porcemtagem inserida: 30% </br>"; 
            $res = 0.3*$cod;
            $cod = $res+$cod;
            echo "Valor final: ".$cod;
        break;

        case 8: 
            echo "</br> </br> Valor inicial: ".$cod."</br>"; 
            echo "Porcemtagem inserida: 50% </br>"; 
            $res = 0.5*$cod;
            $cod = $res+$cod;
            echo "Valor final: ".$cod;
        break;

        default: 
            echo "<br/> <br/>Opção incorreta" ;
        break;

    }
?>