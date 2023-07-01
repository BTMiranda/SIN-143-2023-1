<?php

Class ReturnClass{
    private $email;
    private $senha;

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function return($post){
        echo"?id={$post['id']}&tipo={$post['tipo']}";
    }
}

?>
