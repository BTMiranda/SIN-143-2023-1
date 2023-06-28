
$(document).ready(function(){
    $('#form2').submit(function(e) {
        e.preventDefault();
        var textf = $("#f-pesquisa").val();
        var actionf = 'pesquisa';

        $.ajax({
            type: "POST",
            url: "php/central.php",
            data: {
                text: textf,
                action: actionf
            },
            success: function() {
                window.location.href = "UserLogin.html";
                console.log(retorno);

            }
        });
    });        
});


// Ajax Para Evento em Destaque (INICIO)

function readUsers() {
    var actionf = 'event_destaque';
    $.ajax({
        type: "POST",
        url: "php/central.php",
        data: {
            action: actionf
        },
        success: function(retorno) {
            $("#show_events_id").html(retorno);            
        }
    });
}
  
$(document).ready(function () {
    readUsers();
});

// Ajax Para Evento em Destaque (FIM)
