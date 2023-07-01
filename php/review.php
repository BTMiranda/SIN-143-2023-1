
<?php

class Review{
    private $id;
    private $pontuação;
    private $comentario;
    private $id_user;
    private $id_event;

    private $conn;
    public function __construct($db){
        $this->conn = $db;
    }

    public function comentario($post) {
        session_start();

        $x = ($_SESSION['idevent']);
        // Pesquisa se o Usuario esta cadastrado
        $sql = "SELECT * FROM reviews WHERE fk_events_id = $x ";
        $result = $this->conn->query($sql);

        // Contador para divisoes entre os eventos
        $counter = 0;
        $totalRows = $result->num_rows;

        if ($result->num_rows > 0){    
            while($row = $result->fetch_assoc()){    
                $comentario = $row['comentario'];
                echo "

                    <p><b>Comentário 1: </b>$comentario</p>
                ";
            }
        }else{
            echo "Sem Comentarios" ;
        }       
    }

    

    public function add_comment($post) {
        session_start();

        $this->comentario = $post['comentario'];
        $this->id_user = ($_SESSION['id']);
        $this->id_event = ($_SESSION['idevent']);

        $sql = "INSERT INTO reviews (fk_users_id, fk_events_id, pontuacao, comentario) 
        VALUES ('{$this->id_user}', '{$this->id_event}', 0,'{$this->comentario}'); ";
        $temp = $this->conn->query($sql);
        echo "sup";
    }

}


?>