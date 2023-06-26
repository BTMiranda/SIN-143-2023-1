<?php
// Conexão com OO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projetofinal sin 143";
$port = "3306";

// Criação de conexão
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Não foi possivel conector ao Banco de Dados: " . $conn->connection_error);
}
?>