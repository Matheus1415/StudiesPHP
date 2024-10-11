<?php

$idade = 17;
$pessoas = 0;

if($idade > 18){
    echo"Você pode entra sozinho pois tem $idade anos";
}else{
    if( $idade >= 16 && $pessoas > 1){
        echo "Pode entra pois estar acompanhado";
    }else{
        echo "Necessario um acompanhante";
    }

}