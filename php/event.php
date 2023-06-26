<?php

Class Event{

    private $titulo;
    private $desc;
    private $data;
    private $hora;
    private $local;
    private $categoria;
    private $img;

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function alterarInfos(){} //Aqui o usuário altera titulo desc categoria e ou as imagens (não é obrigatório alterar todos).

    public function alterarLocalidade(){} //Aqui o usuário altera data hora e ou local (não é obrigatório alterar todos).

    public function cancelaAlterar(){}
}
?>