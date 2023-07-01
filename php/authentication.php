<?php

Class Authentication{
    private $email;
    private $senha;

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function verificacao($post){
        session_start();
        // Pesquisa se o Usuario esta cadastrado
        $sql = "SELECT id_users, tipo, email, senha FROM users WHERE email = '{$post['email']}' and senha = '{$post['senha']}' ";
        // Executa a Pesquisa e Salva na Variavel Temp
        $temp = $this->conn->query($sql);
        // numRows verifica quantas linhas foram retornadas
        if ($temp->num_rows > 0) {
            $row = $temp->fetch_assoc(); // Obtém a primeira linha de resultado
            $tipo = $row['tipo']; // Obtém o valor da coluna 'tipo' da linha
            $id = $row['id_users']; // Obtém o valor da coluna 'tipo' da linha
            // Fifi
            $_SESSION['id'] = $id;
            $_SESSION['tipo'] = $tipo;
            // echo "principal.php?id={$id}&tipo={$tipo}";
            echo "1";
        } else {
            echo "0";
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
