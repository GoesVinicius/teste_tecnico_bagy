<?php

function buscarUsuarios($host, $usuario, $senha, $banco)
{
    try {
        $conexao = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);

        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT id, nome, email FROM usuarios";
        
        $stmt = $conexao->prepare($sql);

        $stmt->execute();

        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $conexao = null;

        return $usuarios;
    } catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }
}

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "bagy";

$dadosUsuarios = buscarUsuarios($host, $usuario, $senha, $banco);

print_r($dadosUsuarios);

/* 
Optei por usar a conexão PDO.
a conexão PDO oferece uma melhor portabilidade se precisar optar por trocar de SGBD.
tem suporte para varios bancos de dados.
Tem um desempenho melhor para um grande volume de dados.
E tem um melhor tratamento de erros e exceções.
*/

/*
O codigo acima foi so para solucinar de forma sucinta a tarefa proposta.
Num contexto diferente, uma conexão com o banco de dados será mais robusta e segura, com o uso de arquivos de configuração.

referencias: https://www.php.net/manual/pt_BR/ref.pdo-mysql.connection
*/

?>