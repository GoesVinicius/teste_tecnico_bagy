<?php

require 'Pessoa.php';

$pessoa = new Pessoa('Vinicius', 26);

$saudacao = $pessoa->apresentar();

echo $saudacao;
?>