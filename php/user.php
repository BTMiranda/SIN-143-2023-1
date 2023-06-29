<?php

Class User{
    private $nome;
    private $email;
    private $senha;
    private $funcao;

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function edit_user() {        
        session_start();
        $x = $_SESSION['id'] ;
        
        $sql = "SELECT * FROM users WHERE id_users = $x ";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        $v1 = $row['nome'];
        $v2 = $row['email'];
        $v3 = $row['senha'];
        $v4 = $row['tipo'];
        $response = array(
            'nome' => $v1,
            'email' => $v2,
            'senha' => $v3,
            'funcao' => $v4,
        );
        echo json_encode($response);

    }

    public function update_user($post){
        session_start();

        $x = ($_SESSION['id']);

        $this->nome = $post['nome'];
        $this->email = $post['email'];
        $this->senha = $post['senha'];
        $this->tipo = $post['tipo'];
        echo $this->nome;  

        $sql = "UPDATE users SET 
                nome = '{$this->nome}',
                email = '{$this->email}',
                senha = '{$this->senha}',
                tipo = '{$this->tipo}'
                WHERE id_users = $x";

        $temp = $this->conn->query($sql);

    }
}

?>
