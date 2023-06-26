<?php

Class Authentication{
    private $email;
    private $senha;

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function verificacao($post){
        // Pesquisa se o Usuario esta cadastrado
        $sql = "SELECT email, senha FROM users WHERE email = '{$post['email']}' and senha = '{$post['senha']}' ";
        // Executa a Pesquisa e Salva na Variavel Temp
        $temp = $this->conn->query($sql);
        // numRows verifica quantas linhas foram retornadas
        if ($temp->num_rows > 0) {
            echo "0";
        } else {
            echo "1";
        }
    }
    public function cadastro($post){
        $sql = "INSERT INTO users (nome, email, senha, tipo) VALUES
        ('{$post['nome']}','{$post['email']}','{$post['senha']}','{$post['tipo']}')";
        if($this->conn->query($sql) === TRUE){
            return true;
        }else{
            echo "Erro: $sql<br>".$conn->error."<br>";
            return false;
        }
    }
}

?>
