$(document).ready(function(){
    $('#form1').submit(function(e) {
        e.preventDefault();
        var emailf = $("#f-email").val();
        var senhaf = $("#f-senha").val();
        var actionf = 'login';

        $.ajax({
            type: "POST",
            url: "php/central.php",
            data: {
                email: emailf,
                senha: senhaf,
                action: actionf
            },
            success: function(retorno) {
                if(retorno === "0"){
<<<<<<< Updated upstream
                    window.location.href = "Teste.html";
                }else{
=======
>>>>>>> Stashed changes
                    console.log("Erro ao Encontrar");
                }else{
                    window.location.href = retorno;
                }
                console.log(retorno);

            }
        });
    });        
});

function GoCadastro() {
    window.location.href = "cadastro.php";
}