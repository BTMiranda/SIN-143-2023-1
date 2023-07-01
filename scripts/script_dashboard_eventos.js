var closeButton = document.querySelector('.modal-btn');
var modal = document.querySelector('#Modal');
$(document).ready(function(){
    $('#form').submit(function() {
        console.log("a")
        edit_event_show();
    });        
});

function edit_event_show() {
    var actionf = 'dash_event_show';
    var pesquisaf = $("#f-pesquisa").val();
    $.ajax({
        type: "POST",
        url: "php/central.php",
        data: {
            src: pesquisaf,
            action: actionf
        },
        success: function(retorno) {
            $("#show_events_id").html(retorno);            
        }
    });
}

$(document).ready(function() {
    edit_event_show();
});

function Deletar_Event(ideventf) {
    var actionf = 'deletar_event';
    $.ajax({
        url: 'php/central.php',
        type: 'POST',
        data: {
             idevent: ideventf,
             action: actionf
        },
        success: function() {
            edit_event_show();
            modal.style.display = 'block';

        }
    });
    
}
function Deletar_All_Events() {
    var actionf = 'deletar_all_events';
    $.ajax({
        url: 'php/central.php',
        type: 'POST',
        data: {
             action: actionf
        },
        success: function(retorno) {
            edit_event_show();

        }
    });
    
}