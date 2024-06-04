<?php

function clasificarLaEdad($edadPersona){
    if(is_int($edadPersona)){
        iff($edadPersona<18){
            echo 'Sos menor de edad';
        }
        elseif($edadPersona>18&& $edadPersona<=64){
            echo 'Sos adulto';
        }
        else{
            echo 'Sos una Persona mayor';
        }
    }
}

clasificarLaEdad(22);

?>