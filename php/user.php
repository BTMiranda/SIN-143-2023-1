<?php

Class User{
    private $email;
    private $senha;
    private $nome;
    private $tipo;

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }
    public function alterarSenha(){}

    public function alterarNome(){}

    public function alterarEmail(){}

}
?>