<?php
class Event{
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    // private $data_criacao;

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function pesquisa($post){
        // Pesquisa se o Usuario esta cadastrado
        $sql = "SELECT * FROM events WHERE titulo LIKE '{$post['text']}%'";
        $result = $this->conn->query($sql);

        // Contador para divisoes entre os eventos
        $counter = 0;
        $totalRows = $result->num_rows;

        // Paginação
        $sem_resultados = TRUE;
        $quantidade = 10;
        $inicio   = ($quantidade*$page)-$quantidade;
        $sql1 = "SELECT COUNT(*) AS Quantidade FROM events";
        $result = $conn->query($sql1);
        $row = $result->fetch_assoc();
        $num_pages = ceil($row['Quantidade']/$quantidade);

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
                echo "<h4>Paginas</h4>";
                echo "<div class=\"div_pag\"><ul class = 'paginação'>";
                for($i = 1; $i < $num_pages+1; $i++){ 
                    echo "<li><a href='index.php?page=$i' style='text-decoration: none;'>$i</a></li>";
                }
                echo "</ul></div>";  

            }
        }else{
            echo "<h4>Nenhum Evento Cadastrado</h4>";            
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



}


?>