function GoPrincipal() {
    window.location.href = "principal.php";
}
function GoSelectEditEvent() {
    window.location.href = "select_edit_event.php";
}
function GoDashboardUser() {
    window.location.href = "dashboard_usuarios.php";
}

function GoEventD(ideventf) {
    var actionf = 'add_id_event';
    $.ajax({
        url: 'php/central.php',
        type: 'POST',
        data: {
             idevent: ideventf,
             action: actionf
        },
        success: function() {
        }
    });
    
    console.log(ideventf);
    window.location.href = "eventd.php";
}
function Go_Edit_Event(ideventf) {
    var actionf = 'add_id_event';
    $.ajax({
        url: 'php/central.php',
        type: 'POST',
        data: {
             idevent: ideventf,
             action: actionf
        },
        success: function() {
        }
    });
    
    console.log(ideventf);
    window.location.href = "edit_event.php";
}

function Go_Edit_User(iduser) {
    var actionf = 'add_id_user';
    $.ajax({
        url: 'php/central.php',
        type: 'POST',
        data: {
            iduser: iduser,
            action: actionf
        },
        success: function() {
        }
    });    
    window.location.href = "usuario_edit_dash.php";
}