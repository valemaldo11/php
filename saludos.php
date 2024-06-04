<?php

function saludarEnDistintaHora($hora){
    if(int($hora)){
        if($hora>=12 && $hora<=6){
            echo "Buen dia";
        }elseif ($hora>12 && $hora<=18) {
            # code...
            echo "Buenas tardes";
        }elseif ($hora>24){
            echo "Buenas noches";
        }
    }
}

saludarEnDistintaHora(11);

?>