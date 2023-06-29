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
<?php echo ($_SESSION['idevent']); ?>
    <section class="menu_sup">
        <div class="menu_title">
            <p class="main_menu">Editar Evento</p>
        </div>
        <div class="menu_btn">
            <a href="cadastroevent.php" class="btn_menu"><p>Criar Evento</p></a>
            <a class="btn_menu"><p>Editar Evento</p></a>
        </div>
        <a class="user_a">
            <img class="userimg" src="imagens/user.jpg"/>
        </a>
    </section>

    <section class="forms_body">
        <h1>Criar Novo Evento</h1>
        <form id="form" class="forms">
            <input hidden id="f-iduser" class="input_form" type="text" name="IdUser" required value="<?php echo ($_SESSION['id'])?>" >
            
            <div id="divnum" class="forms_div">
                <p class="text_form">Título</p>
                <input id="f-titulo" class="input_form" type="text" name="Título" required>                
            </div>
            <div id="divnum" class="forms_div">
                <p class="text_form">E-Descrição</p>
                <textarea id="f-desc" class="input_form desc" type="text" name="Descrição" maxlength="255" required></textarea>
                <p id="char-count">0/255 caracteres</p>
            </div>
            <div class="father_forms_div">
                <div id="divnum" class="forms_div">
                    <p class="text_form">Data</p>
                    <input id="f-data" class="input_form" type="date" name="Data" required>                
                </div>
                <div id="divnum" class="forms_div">
                    <p class="text_form">Hora</p>                
                    <input id="f-hora" class="input_form" type="time" name="Hora" required>
                </div>
            </div>
            <div id="divnum" class="forms_div">
                <p class="text_form">Local</p>                
                <textarea id="f-local" class="input_form local" type="text" name="Local" required></textarea>
            </div>
            <div id="divnum" class="forms_div">
                <p class="text_form">Preço</p>                
                <input id="f-preco" class="input_form" type="number" step="0.01" name="Preço" required>
            </div>
            <div id="divnum" class="forms_div">
                <p class="text_form">Url Imagem</p>                
                <input id="f-img" class="input_form" type="text" name="Imagem" required>
            </div>
            <div id="divnum" class="forms_div">
                <p class="text_form">Categoria</p>
                <select id="f-categoria" class="input_form" name="Categoria" required >
                    <option value="" disabled selected>Escolha uma Função</option>
                    <option value="Festa">Festa</option>
                    <option value="Bar">Bar</option>
                    <option value="Show">Show</option>
                    <option value="Música ao Vivo">Música ao Vivo</option>
                    <option value="Teatro">Teatro</option>
                    <option value="Cursos">Cursos</option>
                    <option value="Feiras">Feiras</option>
                </select>                            
            </div>
            <div id="divnum" class="forms_div">
                <button type="submit" class="btn primario" ><p class="text_btn">Salvar</p></button> <!-- Botão de Logar -->
            </div>
            <div id="divnum" class="forms_div">
                <button type="button" onclick="GoSelectEditEvent()" class="btn secundario"><p class="text_btn">Voltar</p></button> 
            </div>
        </form>
    </section>

    <!-- 
    <div id="pesquisa" class="forms_div_pesquisa">
        <p class="text_form">Pesquisar Nome: </p>
        <input id="f-pesquisa" class="input_form" type="text" name="Pesquisa" required>
        <div id="divnum" class="forms_div">
            <button type="submit" class="btn pesquisa" ><img class="icon_pesquisa" src="imagens/lupa.png"/></button>
        </div>
    </div> 
    -->

    <!-- <section class="forms_body destaque"> 
        <h1>Novos Eventos</h1>
        <div class="show_events" id="show_events_id"></div>
    </section> -->
    <!-- <div id="ModalI" class="modal">
        <div class="modal-content">
            <h1>Produto Registrado</h1>
            <button onclick="closepop()" class="btn modal-btn">Fechar</button>
        </div>
    </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/script_edit_event.js"></script>
    <script src="scripts/go.js"></script>
    
</body>
</html>
