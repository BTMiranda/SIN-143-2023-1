
$(document).ready(function(){
    $('#form1').submit(function(e) {
        e.preventDefault();
        console.log("t");
        var textf = $("#f-pesquisa").val();
        // var iduserF = $("#f-iduser").val();
        // var tipouserF = $("#f-tipouser").val();
        var actionf = 'pesquisa';

        $.ajax({
            type: "POST",
            url: "php/central.php",
            data: {
                text: textf,
                // id: iduserF,
                // tipo: tipouserF,
                action: actionf
            },
            success: function(retorno) {
                window.location.href = retorno;                
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
