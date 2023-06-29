
<?php

class Event{
    private $id;
    private $descricao;
    private $preco;
    private $data;
    private $hora;
    private $img;
    private $titulo;
    private $local;
    private $categoria;
    // private $data_criacao;

    private $conn;
    public function __construct($db){
        $this->conn = $db;
    }
    public function set_idevent($post) {
        session_start();
        $_SESSION['idevent'] =  $post['idevent'];
    }
    public function pesquisa($post) {
        $sql = "SELECT * FROM events WHERE titulo LIKE '{$post['text']}%'";
        $temp = $this->conn->query($sql);
        echo "eventlist.php?text={$post['text']}";        
    }

    public function addevent($post) {
        $this->id = $post['id'];
        $this->descricao = $post['descricao'];
        $this->preco = $post['preco'];
        $this->data = $post['data'];
        $this->hora = $post['hora'];
        $this->img = $post['imagem'];
        $this->titulo = $post['titulo'];
        $this->local = $post['local'];
        $this->categoria = $post['categoria'];

        $sql = "INSERT INTO events (titulo, descricao, data, hora, id_criador, local, categoria, preco, imagens) VALUES ('{$this->titulo}', '{$this->descricao}', '{$this->data}', '{$this->hora}', {$this->id} ,'{$this->local}', '{$this->categoria}', {$this->preco}, '{$this->img}')";
        $temp = $this->conn->query($sql);

        echo "1";        
    }

    public function updateevent($post) {
        session_start();

        $x = ($_SESSION['idevent']);

        $this->id = $post['id'];
        $this->descricao = $post['descricao'];
        $this->preco = $post['preco'];
        $this->data = $post['data'];
        $this->hora = $post['hora'];
        $this->img = $post['imagem'];
        $this->titulo = $post['titulo'];
        $this->local = $post['local'];
        $this->categoria = $post['categoria'];

        $sql = "UPDATE events SET 
                titulo = '{$this->titulo}',
                descricao = '{$this->descricao}',
                data = '{$this->data}',
                hora = '{$this->hora}',
                id_criador = {$this->id},
                local = '{$this->local}',
                categoria = '{$this->categoria}',
                preco = {$this->preco},
                imagens = '{$this->img}'
                WHERE id_events = $x";

        $temp = $this->conn->query($sql);

        echo "1";        
    }
    
    public function event_d($post){
        session_start();

        $x = ($_SESSION['idevent']);
        // Pesquisa se o Usuario esta cadastrado
        $sql = "SELECT * FROM events WHERE id_events = $x";
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
                                <button type=\"button\" onclick=\"GoEventD($v0)\" class=\"btn buy\" ><p class=\"text_btn\">Comprar</p></button> <!-- Botão de Compra -->
                            </div>
                            
                        </div>
                    </div>
                </div>
                <script src=\"scripts/go.js\"></script>

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
                                <button type=\"button\" onclick=\"GoEventD($v0)\" class=\"btn buy\" ><p class=\"text_btn\">Comprar</p></button> <!-- Botão de Compra -->
                            </div>
                        </div>
                    </div>
                </div>
                <script src=\"scripts/go.js\"></script>

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

    public function edit_event_show($post){
        session_start();
        $x = $_SESSION['id'] ;

        $sql = "SELECT * FROM events WHERE id_criador = $x ";
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
                                <button type=\"button\" onclick=\"Go_Edit_Event($v0)\" class=\"btn buy\" ><p class=\"text_btn\">Editar</p></button> <!-- Botão de Compra -->
                            </div>
                        </div>
                    </div>
                </div>
                <script src=\"scripts/go.js\"></script>

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

    public function edit_event() {
        
        session_start();
        $x = $_SESSION['idevent'] ;
        
        $sql = "SELECT * FROM events WHERE id_events = $x ";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        $v0 = $row['id_events'];
        $v1 = $row['titulo'];
        $v2 = $row['descricao'];
        $v3 = $row['data'];
        $v4 = $row['hora'];
        $v5 = $row['local'];
        $v6 = $row['categoria'];
        $v7 = $row['preco'];
        $v8 = $row['imagens'];
        // echo "edit_event.php?titulo=$v1&descricao=$v2&data=$v3&hora=$v4&local=$v5&categoria=$v6&preco=$v7&imagens=$v8";
        $response = array(
            'titulo' => $v1,
            'descricao' => $v2,
            'data' => $v3,
            'hora' => $v4,
            'local' => $v5,
            'categoria' => $v6,
            'preco' => $v7,
            'imagens' => $v8
        );
        echo json_encode($response);

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
                                <button type=\"button\" onclick=\"GoEventD($v0)\" class=\"btn buy\" ><p class=\"text_btn\">Comprar</p></button> <!-- Botão de Compra -->
                            </div>
                        </div>
                    </div>
                </div>
                <script src=\"scripts/go.js\"></script>
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