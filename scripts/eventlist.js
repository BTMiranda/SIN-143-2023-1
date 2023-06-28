function resultados() {
    var textf = $("#f-text").val();
    var actionf = 'resultado';
    $.ajax({
        type: "POST",
        url: "php/central.php",
        data: {
            text: textf,
            action: actionf
        },
        success: function(retorno) {
            $("#show_events_id").html(retorno);            
        }
    });
}


$(document).ready(function(){
    $('#form1').submit(function(e) {
        e.preventDefault();
        var iduserF = $("#f-iduser").val();
        var tipouserF = $("#f-tipouser").val();
        var actionf = 'return';

        $.ajax({
            type: "POST",
            url: "php/central.php",
            data: {
                id: iduserF,
                tipo: tipouserF,
                action: actionf
            },
            success: function(retorno) {
                console.log("principal.php" + retorno);
                window.location.href = "principal.php" + retorno;
            }
        });
    });        
});


$(document).ready(function() {
    // Submissão automatica do Formulário
    // $('#form').submit();
    resultados();
});