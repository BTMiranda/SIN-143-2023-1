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

function GoPrincipal() {
    window.location.href = "principal.php";
}


$(document).ready(function() {
    resultados();
});