var nome;
var email;
var senha;
var funcao;

$(document).ready(function(){
    $('#form').submit(function(e) {
        e.preventDefault();
        var nomef = $("#f-nome").val();
        var emailf = $("#f-email").val();
        var senhaf = $("#f-senha").val();
        var tipof = $("#f-tipo").val();
        var actionf = 'update_user';
        console.log(nomef);
        console.log(emailf);
        console.log(senhaf);
        console.log(tipof);
        
        $.ajax({
            type: "POST",
            url: "php/central.php",
            data: {
                nome: nomef,
                email: emailf,
                senha: senhaf,
                tipo: tipof,
                action: actionf
            },
            success: function(a) {
                console.log(a);

            }
        });
    });        
});

function insert_dados() {
    var actionf = 'edit_user';
    $.ajax({
        type: "POST",
        url: "php/central.php",
        data: {
            action: actionf
        },
        success: function(retorno) {
            var data = JSON.parse(retorno);
            nome = data.nome;
            email = data.email;
            senha = data.senha;
            funcao = data.funcao;            

            // Faça o que você deseja com os valores recebidos
            document.getElementById('f-nome').value = nome;
            document.getElementById('f-email').value = email;
            document.getElementById('f-senha').value = senha;
            document.getElementById('f-tipo').value = funcao;
        }
    });
}

function GoPrincipal() {
    window.location.href = "principal.php";
}

$(document).ready(function() {
    insert_dados();
});

