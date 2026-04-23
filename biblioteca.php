<?php

namespace matematica;{

function soma($a, $b,){
    return $a + $b;
}
function subtrair($a, $b){
    return $a - $b;
}
function dividir($a, $b){
    return $a / $b;
}
function multiplicar($a, $b){
    return $a * $b;
}
}
namespace texto; {
    function Concatenar($nome, $sobrenome){
        return $nome. " ". $sobrenome;

    }
}
namespace logica{
    function verificaidade($idade){
        if ($idade >= 18){
            return "maior de idade";
            else{
            return "menor de idade";
            }
    function verificarexercito($sexo, $idade){
        if($idade >= 18 && sexo == "masculino"){
            return "você está apto a servir no exercito";
        }
        
    }
        }
    }
}
?>