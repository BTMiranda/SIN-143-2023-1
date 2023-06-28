<?php
    $iduser = $_GET['id'];
    $tipouser = $_GET['tipo'];
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleprincipal.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Entrar</title>
</head>
<body>
    <section class="menu_sup">
        <div class="menu_title">
            <p class="main_menu">Menu Principal</p>
        </div>
        <a class="user_a">
            <img class="userimg" src="imagens/user.jpg"/>
        </a>
    </section>

    <section class="forms_body">
        <h1>Eventos</h1>
        <form id="form1" class="forms">
            <!-- Input de Pesquisa -->
            <div id="pesquisa" class="forms_div_pesquisa">
                <p class="text_form">Pesquisar Nome: </p>
                <input id="f-pesquisa" class="input_form" type="text" name="Pesquisa" required>
                <input id="f-iduser" type="hidden" name="iduser" value="<?php echo $iduser; ?>">
                <input id="f-tipouser" type="hidden" name="tipouser" value="<?php echo $tipouser; ?>">
                <div id="divnum" class="forms_div">
                    <button type="submit" class="btn pesquisa" ><img class="icon_pesquisa" src="imagens/lupa.png"/></button> <!-- Botão de Pesquisa -->
                </div>
            </div>
        </form>
    </section>

    <section class="forms_body destaque"> 
        <h1>Novos Eventos</h1>
        <div class="show_events" id="show_events_id"></div>
    </section>
    <!-- <div id="ModalI" class="modal">
        <div class="modal-content">
            <h1>Produto Registrado</h1>
            <button onclick="closepop()" class="btn modal-btn">Fechar</button>
        </div>
    </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/scripttelaprincipal.js"></script>
    
</body>
</html>
