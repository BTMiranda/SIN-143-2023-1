<?php

Class Registration{
    private $id_event;
    private $id_user;

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function event_comprar($post) {
        $this->id_event = $post['idevent'];
        $this->id_user = $_SESSION['id'] ;

        $sql = "INSERT INTO registrations (fk_users_id, fk_events_id, status_pagamento) VALUES ('{$this->id_user}', {$this->id_event}, TRUE)";
        $temp = $this->conn->query($sql);

        echo "1";        
    }

}

?>
