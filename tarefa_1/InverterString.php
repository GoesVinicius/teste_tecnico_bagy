<?php

function inverterString(string $str)
{

    $n = strlen($str);
    $strReverso = '';

    For($i=1; $i<=$n; $i++){

        $strReverso = $str[-$i];

        echo $strReverso;
    }
}

inverterString('Vinicius Goes');


/*
Nativamente, o PHP ja possui uma função que faz isso: strrev("Hello world!") (PHP 4, PHP 5, PHP 7, PHP 8);
referencia: https://www.php.net/manual/pt_BR/function.strrev
*/
?>
