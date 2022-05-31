<?php

$host = 'localhost';
$user = 'loudga11_iscosilvabh';
$pass = 'gersonmatos';
$dbname = 'loudga11_phpmail';	

try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexao com banco de dados realizado com sucesso!";
} catch (Exception $ex) {
    echo "Erro: Conexao com banco de dados nao realizado com sucesso!";
}