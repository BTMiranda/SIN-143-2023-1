
$(document).ready(function(){
    $('#form').submit(function() {
        console.log("a")
        dash_users_show();
    });        
});

function dash_users_show() {
    var actionf = 'dash_users_show';
    var pesquisaf = $("#f-pesquisa").val();
    $.ajax({
        type: "POST",
        url: "php/central.php",
        data: {
            src: pesquisaf,
            action: actionf
        },
        success: function(retorno) {
            $("#show_users_id").html(retorno);            
        }
    });
}

$(document).ready(function() {
    dash_users_show();
});

function Deletar_User(iduser) {
    var actionf = 'deletar_user';
    $.ajax({
        url: 'php/central.php',
        type: 'POST',
        data: {
             id: iduser,
             action: actionf
        },
        success: function() {
            dash_users_show();

        }
    });
    
}
function Deletar_All_Users() {
    var actionf = 'deletar_all_users';
    $.ajax({
        url: 'php/central.php',
        type: 'POST',
        data: {
             action: actionf
        },
        success: function(retorno) {
            console.log(retorno);
            dash_users_show();
        }
    });
    
}