$(document).ready(function(){
    $('#a').submit(function(e) {
        e.preventDefault();
        var comentF = $("#f-comentario").val();
        var actionf = 'addcomment';
        
        $.ajax({
            type: "POST",
            url: "php/central.php",
            data: {
                comentario: comentF,
                action: actionf
                
            },
            
            success: function(r) {
                readComment();
                console.log(r);
            }
        });
        console.log(actionf);
    });        
});

$(document).ready(function () {
    readEvent();
    readComment();
});

function readEvent() {
    var actionf = 'event_d';
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

function readComment() {
    var actionf = 'event_comment';
    $.ajax({
        type: "POST",
        url: "php/central.php",
        data: {
            action: actionf
        },
        success: function(retorno) {
            $("#show_comments_id").html(retorno);            
        }
    });
}

function Comprar(idevento) {
    var actionf = 'event_comprar';
    $.ajax({
        type: "POST",
        url: "php/central.php",
        data: {
            action: actionf,
            idevent: idevento
        },
        success: function(retorno) {
            $("#show_comments_id").html(retorno);            
        }
    });
}