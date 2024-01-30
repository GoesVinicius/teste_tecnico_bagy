<?php

function dobrarNumeros(array $numeros): array 
{
    return array_map(function($numero) {

        return $numero * 2;

    }, $numeros);
}

$data = [1, 2, 3, 4, 5];

$resultado = dobrarNumeros($data);

print_r($resultado);

/*
Optei por usar a função nativa do PHP chamada array_map().
essa função retorna um array e é projetada para aplicar um callback acada elemento do array passado como parametro.
Abaixo tambem escrevi a função utilizando foreach, foi outra solução que encontrei.
referencia: https://www.php.net/manual/pt_BR/function.array-map
*/

function dobrarNumeros2(array $numeros): array
{
    $dobro = [];

    foreach($numeros as $numero){
        $dobro[] = $numero * 2;
    }

    return $dobro;
}

$data = [1, 2, 3, 4, 5];

$resultado = dobrarNumeros2($data);

print_r($resultado);
?>