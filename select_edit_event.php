<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleeventlist.css">
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
        <h1>Lista de Eventos</h1>
        <form id="form1">
        <!-- Campos do formulário -->
            <div id="divnum" class="forms_div">
                <button type="button" onclick="GoPrincipal();" class="btn secundario"><p class="text_btn">Voltar</p></button> <!-- Botão de Registrar -->
            </div>
        </form>
    </section>

    <section class="forms_body destaque"> 
        <h1>Novos Eventos</h1>
        <div class="show_events" id="show_events_id"></div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/script_select_edit_event.js"></script>

    
</body>
</html>
