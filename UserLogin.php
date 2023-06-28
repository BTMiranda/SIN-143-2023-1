<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Entrar</title>
</head>
<body>
    <section class="forms_body">
        <h1>Entrar</h1>
        <form id="form1" class="forms">
            <!-- Input de Email -->
            <div id="divnum" class="forms_div">
                <p class="text_form">E-Mail</p>
                <input id="f-email" class="input_form" type="email" name="E-Mail" required>
            </div>
            <!-- Input de Senha -->
            <div id="divnum" class="forms_div">
                <p class="text_form">Senha</p>
                <input id="f-senha" class="input_form" type="password" name="Senha" required>
            </div>
            <div id="divnum" class="forms_div">
                <button type="submit" class="btn primario" ><p class="text_btn">Entrar</p></button> <!-- Botão de Logar -->
            </div>
            <div id="divnum" class="forms_div">
                <button type="button" onclick="GoCadastro()" class="btn secundario"><p class="text_btn">Cadastrar-se</p></button> <!-- Botão de Registrar -->
            </div>
        </form>
    </section>
    <!-- <div id="ModalI" class="modal">
        <div class="modal-content">
            <h1>Produto Registrado</h1>
            <button onclick="closepop()" class="btn modal-btn">Fechar</button>
        </div>
    </div> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/scriptUserLogin.js"></script>
    
</body>
</html>
