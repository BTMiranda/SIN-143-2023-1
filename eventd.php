<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleaddevent.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Entrar</title>
</head>
<body>
    <!-- <form  id="a">
        <input type="text" id="id-comentario">
        <button type="submit"> a </button>
    </form> -->
    <section class="menu_sup">
        <div class="menu_title">
            <p class="main_menu">Sobre o Evento</p>
        </div>
        <div class="menu_btn">
            <a href="cadastroevent.php" class="btn_menu"><p>Criar Evento</p></a>
            <a class="btn_menu"><p>Editar Evento</p></a>
        </div>
        <a class="user_a">
            <img class="userimg" src="imagens/user.jpg"/>
        </a>
    </section>

    <section class="forms_body destaque"> 
        <h1>Novos Eventos</h1>
        <div class="show_events" id="show_events_id"></div>

        <div id="divnum" class="forms_div">
                <button type="button" onclick="GoPrincipal();" class="btn secundario"><p class="text_btn">Voltar</p></button> <!-- Botão de Registrar -->
            </div>

        <form id="a" class="forms">            
            <div id="divnum" class="forms_div">
                <p class="text_form">Escreva um comentário</p>
                <textarea id="f-comentario" class="input_form desc" type="text" name="Comentario" maxlength="255" required></textarea>
                <p id="char-count">0/255 caracteres</p>
            </div>
            
            <div id="divnum" class="forms_div">
                <button type="submit" class="btn primario" ><p class="text_btn">Adicionar</p></button> <!-- Botão de Logar -->
            </div>
        </form>
        <div class="show_events" id="show_comments_id"></div>
    </section>
    <!-- <div id="ModalI" class="modal">
        <div class="modal-content">
            <h1>Produto Registrado</h1>
            <button onclick="closepop()" class="btn modal-btn">Fechar</button>
        </div>
    </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/script_eventd.js"></script>
    
</body>
</html>
