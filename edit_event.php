<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_popup.css">
    <link rel="stylesheet" href="css/styleaddevent.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Editar Evento</title>
</head>
<body>
    <section class="menu_sup">
        <div class="menu_title">
            <p class="main_menu">Editar Evento</p>
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
                <input id="f-img" class="input_form" type="text" name="Imagem">
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
    <div id="Modal">
        <div class="bkgmodal">
            <div class="modal">
                <div class="modal-content">
                    <h1>Evento Editado</h1>
                    <button onclick="closepop()" class="btn modal-btn">Fechar</button>
                </div>
            </div>
        </div>
    <div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/script_edit_event.js"></script>
    <script src="scripts/script_popup.js"></script>
    <script src="scripts/go.js"></script>
    
</body>
</html>
