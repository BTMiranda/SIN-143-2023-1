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
