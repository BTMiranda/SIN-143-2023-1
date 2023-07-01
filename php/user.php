<?php
Class User{
    private $id;
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

    public function edit_user_dash() {        
        session_start();
        $x = $_SESSION['id_user_sec'] ;
        
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
        public function update_user_dash($post){
        session_start();
        $x = ($_SESSION['id_user_sec']);
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

    public function deletar_user ($post) {
        $this->$id = $post['id'];
        $sql = "DELETE FROM reviews WHERE fk_users_id = {$this->$id}";
        $result = $this->conn->query($sql);
        
        $sql = "DELETE FROM registrations WHERE fk_users_id = {$this->$id}";
        $result = $this->conn->query($sql);

        $sql = "DELETE FROM events WHERE id_criador = {$this->$id}";
        $result = $this->conn->query($sql);

        $sql = "DELETE FROM users WHERE id_users = {$this->$id}";
        $result = $this->conn->query($sql);
        
    }

    public function deletar_all_users($post) {
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);       
        if ($result->num_rows > 0){
            $sql = "DELETE FROM reviews; DELETE FROM registrations; DELETE FROM events; DELETE FROM users;";
            $result = $this->conn->multi_query($sql);
            if ($result === false) {
                echo "1";
            }
        } else {
            echo "0";
        }
    }

    public function set_iduser($post) {
        session_start();
        $_SESSION['id_user_sec'] =  $post['iduser'];
    }

    public function dash_users_show($post){
        // session_start();
        // $x = $_SESSION['id'] ;
        $src = $_POST['src'];

        $sql = "SELECT * FROM users WHERE nome LIKE '$src%'";
        $result = $this->conn->query($sql);

        // Contador para divisoes entre os eventos
        $counter = 0;
        $totalRows = $result->num_rows;

        if ($result->num_rows > 0){                
            while($row = $result->fetch_assoc()){    

                $this->id = $row['id_users'];        
                $this->nome = $row['nome'];
                $this->email = $row['email'];
                $this->senha = $row['senha'];
                $this->tipo = $row['tipo'];
                echo "
                <h4>Usuário ID#{$this->id}</h4>
                <div class=\"recents_events\" >
                    <p><b event_p_destaque>Nome: </b>{$this->nome}</p>
                    <p><b event_p_destaque>Nome: </b>{$this->email}</p>
                    <p><b event_p_destaque>Nome: </b>{$this->senha}</p>
                    <p><b event_p_destaque>Nome: </b>{$this->tipo}</p>
                    <div id=\"divnum\" class=\"forms_div\">
                        <button type=\"button\" onclick=\"Go_Edit_User({$this->id})\" class=\"btn buy\" ><p class=\"text_btn\">Editar</p></button> <!-- Botão de Compra -->
                    </div>
                    <div id=\"divnum\" class=\"forms_div\">
                            <button type=\"button\" onclick=\"Deletar_User({$this->id})\" class=\"btn buy\" ><p class=\"text_btn\">Excluir</p></button>
                    </div>                    
                </div>

                ";
                $counter++;
                if ($counter < $totalRows) {
                    echo "<div class=\"linha_divisor\"></div>";
                } 
                
            }
        }else{
            echo "<h4>Nenhum Usuário Encontrado</h4>";            
        }
    }




}

?>
