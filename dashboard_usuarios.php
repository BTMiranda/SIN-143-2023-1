<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash_styleprincipal.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Dashboard Usuário</title>
</head>
<body>
    <section class="menu_sup">
        <div class="menu_title">
            <p class="main_menu">Dashboard Usuário</p>
        </div>
        <div class="menu_btn">

            <?php 
                if($_SESSION['tipo'] != "Participante"){
                    echo "
                    <a href=\"cadastroevent.php\" class=\"btn_menu\"><p>Criar Evento</p></a>
                    <a href=\"select_edit_event.php\" class=\"btn_menu\"><p>Editar Seus Eventos</p></a>
                    ";
                }
                if($_SESSION['tipo'] == "Administrador"){
                    echo "
                        <a href=\"dashboard_eventos.php\" class=\"btn_menu\"><p>Dashboard Eventos</p></a>
                        <a href=\"dashboard_usuarios.php\" class=\"btn_menu\"><p>Dashboard Usuarios</p></a>
                    
                    ";
                }
            ?>
        </div>
        <a href="usuario.php" class="user_a">
            <img class="userimg" src="imagens/user.jpg"/>
        </a>
    </section>

    <section class="forms_body">
        <h1>Usuário</h1>
        <div id="form" class="forms">
            <!-- Input de Pesquisa -->
            <div id="pesquisa" class="forms_div_pesquisa">
                <p class="text_form">Pesquisar Nome: </p>
                <input id="f-pesquisa" class="input_form" type="text">
                <div id="divnum" class="forms_div">
                    <button type="button" onclick="edit_users_show()" class="btn pesquisa" ><img class="icon_pesquisa" src="imagens/lupa.png"/></button> <!-- Botão de Pesquisa -->
                </div>
                
            </div>
            <div id="divnum" class="forms_div">
                <button type="button" onclick="Deletar_All_Users()" class="btn" ><p>Excluir Todos Usuários >:)</p></button> <!-- Botão de Pesquisa -->
            </div>
            </br>
            <div id="divnum" class="forms_div">
                <button type="button" onclick="GoPrincipal()" class="btn" ><p>Voltar</p></button> <!-- Botão de Pesquisa -->
            </div>
        </div>
    </section>

    <section class="forms_body destaque"> 
        <h1>Todos Usuários</h1>
        <div class="show_events" id="show_users_id"></div>
    </section>
    <!-- <div id="ModalI" class="modal">
        <div class="modal-content">
            <h1>Produto Registrado</h1>
            <button onclick="closepop()" class="btn modal-btn">Fechar</button>
        </div>
    </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/script_dashboard_users.js"></script>
    <script src="scripts/go.js"></script>
    
</body>
</html>
