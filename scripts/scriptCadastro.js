$(document).ready(function(){
    $('#form2').submit(function(e) {
        e.preventDefault();
        var nomef = $("#f-nome").val();
        var emailf = $("#f-email").val();
        var senhaf = $("#f-senha").val();
        var tipof = $("#f-tipo").val();
        var actionf = 'cadastro';

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
            success: function() {
                window.location.href = "index.php";
                console.log(retorno);

            }
        });
    });        
});

function GoLogin() {
    window.location.href = "index.php";
}