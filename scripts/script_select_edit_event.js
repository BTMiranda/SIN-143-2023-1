function edit_event_show() {
    var actionf = 'edit_event_show';
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

function GoPrincipal() {
    window.location.href = "principal.php";
}


$(document).ready(function() {
    edit_event_show();
});