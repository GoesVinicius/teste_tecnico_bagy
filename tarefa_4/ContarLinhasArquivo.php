<?php

function contaLinhasArquivo(string $arquivo)
{
    if (!file_exists($arquivo)) {
        return 'O arquivo não existe.';
    }

    $linhas = 0;
    $linhas = count( file( $arquivo ) );
    return $linhas;
}

$resultado = contaLinhasArquivo('lorem_ipsum.txt');
print_r($resultado);

/*
A função acima não é adequada para ler arquivos grandes, pois a função file() carrega todas as linhas do arquivo em memória em forma de array. Uma solução melhor é usar o fopen, como desenvolvido abaixo.
Nesta segunda função, estou unsando um ponteiro para contar o numero de linha em um arquivo sem carregar todo arquivo na memória.
*/

function contaLinhasArquivo2(string $arquivo)
{
    if (!file_exists($arquivo)) {
        return 'O arquivo não existe.';
    }

    $linhas = 0;
    $handle = fopen($arquivo, 'r');

    if ($handle) {
        while (!feof($handle)) {
            fgets($handle);
            $linhas++;
        }
        fclose($handle);
    } else {
       return 'Não foi possível abrir o arquivo para leitura.';
    }

    return $linhas;
}

$resultado = contaLinhasArquivo2('lorem_ipsum.txt');
print_r($resultado);

/* 
Em um outro contexto pederia ser usado blocos try/catch para tratamento de erros e assim lidar melhor com diferentes cenarios
Referencias: https://www.phpit.com.br/artigos/contar-numero-de-linhas-de-um-arquivo-de-texto-com-php.phpit#:~:text=%24linhas%20%3D%20count(%20file(%20'%2Fcaminho%2Fpara%2F,txt'%20)%20)%3B
https://www.php.net/manual/pt_BR/function.fopen.php
*/

?>