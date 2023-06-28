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

<<<<<<< Updated upstream
    public function alterarInfos(){} //Aqui o usuário altera titulo desc categoria e ou as imagens (não é obrigatório alterar todos).
=======
    public function pesquisa($post) {
        $sql = "SELECT * FROM events WHERE titulo LIKE '{$post['text']}%'";
        $temp = $this->conn->query($sql);
        echo "eventlist.php?id={$post['id']}&tipo={$post['tipo']}&text={$post['text']}";        
    }

    public function resultado($post){
        // Pesquisa se o Usuario esta cadastrado
        $sql = "SELECT * FROM events WHERE titulo LIKE '{$post['text']}%'";
        $result = $this->conn->query($sql);

        // Contador para divisoes entre os eventos
        $counter = 0;
        $totalRows = $result->num_rows;

        if ($result->num_rows > 0){                
            while($row = $result->fetch_assoc()){    
                $v0 = $row['id_events'];
                $v1 = $row['titulo'];
                $v2 = $row['descricao'];
                $v3 = $row['data'];
                $v4 = $row['hora'];
                $v5 = $row['local'];
                $v6 = $row['categoria'];
                $v7 = $row['preco'];
                $v8 = $row['imagens'];
                echo "
                <div class=\"recents_events\" >
                    <div class=\"div_evento\">
                        <img class=\"img_evento\" src=\"$v8\"> <!-- Imagem evento -->
                        <div class=\"event_content\">
                            <div class=\"event_info_top\">
                                <h4>$v1</h4>
                                <p class=\"event_price\">Preço: R$$v7</p>    
                            </div>

                            <p class=\"event_descricao\"><b class=\"event_p_destaque\">Descrição: </b> $v2 </p>
                            <p><b class=\"event_p_destaque\">Local: </b>$v5</p>
                            <div class=\"event_info\">
                                <p><b class=\"event_p_destaque\">Data: </b>$v3</p>
                                <p><b class=\"event_p_destaque\">Hora: </b>$v4</p>
                                <p><b class=\"event_p_destaque\">Tipo do Evento: </b>$v6</p>
                            </div>
                            <div id=\"divnum\" class=\"forms_div\">
                                <button type=\"button\" class=\"btn buy\" ><p class=\"text_btn\">Comprar</p></button> <!-- Botão de Compra -->
                            </div>
                        </div>
                    </div>
                </div>
                ";
                $counter++;
                if ($counter < $totalRows) {
                    echo "<div class=\"linha_divisor\"></div>";
                } 
                
            }
        }else{
            echo "<h4>Nenhum Evento Encontrado</h4>";            
        }
    }

    public function read_news() {
        $sql = "SELECT * FROM events ORDER BY id_events DESC LIMIT 3";
        $result = $this->conn->query($sql);

        $counter = 0;
        $totalRows = $result->num_rows;

        if ($result->num_rows > 0){                
            while($row = $result->fetch_assoc()){    
                $v0 = $row['id_events'];
                $v1 = $row['titulo'];
                $v2 = $row['descricao'];
                $v3 = $row['data'];
                $v4 = $row['hora'];
                $v5 = $row['local'];
                $v6 = $row['categoria'];
                $v7 = $row['preco'];
                $v8 = $row['imagens'];
                echo "
                <div class=\"recents_events\" >
                    <div class=\"div_evento\">
                        <img class=\"img_evento\" src=\"$v8\"> <!-- Imagem evento -->
                        <div class=\"event_content\">
                            <div class=\"event_info_top\">
                                <h4>$v1</h4>
                                <p class=\"event_price\">Preço: R$$v7</p>    
                            </div>

                            <p class=\"event_descricao\"><b class=\"event_p_destaque\">Descrição: </b> $v2 </p>
                            <p><b class=\"event_p_destaque\">Local: </b>$v5</p>
                            <div class=\"event_info\">
                                <p><b class=\"event_p_destaque\">Data: </b>$v3</p>
                                <p><b class=\"event_p_destaque\">Hora: </b>$v4</p>
                                <p><b class=\"event_p_destaque\">Tipo do Evento: </b>$v6</p>
                            </div>
                            <div id=\"divnum\" class=\"forms_div\">
                                <button type=\"button\" class=\"btn buy\" ><p class=\"text_btn\">Comprar</p></button> <!-- Botão de Compra -->
                            </div>
                        </div>
                    </div>
                </div>
                ";
                $counter++;
                if ($counter < $totalRows) {
                    echo "<div class=\"linha_divisor\"></div>";
                }                
            }
        }else{
            echo "<h4>Nenhum Evento Cadastrado</h4>";            
        }
    }

    public function readId ($id) {
        $sql = "SELECT * FROM produto WHERE ID = $id";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function update ($post) {
        $sql = "UPDATE produto
                SET nome = '{$post['nome']}',
                    preco = '{$post['preco']}',
                    descricao = '{$post['descricao']}'
                WHERE ID = {$post['ID']}";
        $result = $this->conn->query($sql);
        // return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function delete ($post) {
        $sql = "DELETE FROM produto WHERE ID = {$post['ID']}";
        $result = $this->conn->query($sql);
    }

>>>>>>> Stashed changes

    public function alterarLocalidade(){} //Aqui o usuário altera data hora e ou local (não é obrigatório alterar todos).

    public function cancelaAlterar(){}
}
?>