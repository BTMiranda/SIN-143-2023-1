<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <section class="forms_body">
        <h1>Cadastrar-se</h1>
        <form id="form2" class="forms">
            <!-- Input de Nome -->
            <div id="divnum" class="forms_div">
                <p class="text_form">Nome</p>
                <input id="f-nome" class="input_form" type="text" name="Nome" required>
            </div>
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
            <!-- Input de Tipo -->
            <div id="divnum" class="forms_div">
                <p class="text_form">Função</p>
                <select id="f-tipo" class="input_form" type="text" name="Tipo" required >
                    <option value="" disabled selected>Escolha uma Função</option>
                    <option value="Participante">Participante</option>
                    <option value="Organizador">Organizador</option>
                    <option value="Administrador">Administrador</option>
                </select>
            </div>
            
            <div id="divnum" class="forms_div">
                <button type="submit" class="btn primario" ><p class="text_btn">Cadastrar</p></button> <!-- Botão de Logar -->
            </div>
            <div id="divnum" class="forms_div">
                <button type="button" onclick="GoLogin()" class="btn secundario"><p class="text_btn">Voltar</p></button> <!-- Botão de Registrar -->
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
    <script src="scripts/scriptCadastro.js"></script>
    
</body>
</html>
