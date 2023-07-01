<?php
include "authentication.php";
include "event.php";
include "conexao.php";
include "review.php";
include "user.php";
include "Registration.php";

$action = isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '');

$Auth = new Authentication($conn);
$event = new Event($conn);
$rev = new Review($conn);
$user = new User($conn);
$reg = new Registration($conn);

// Autentificação
if($action == 'login'){
    $Auth->verificacao($_POST);
}
if($action == 'cadastro'){
    $Auth->cadastro($_POST);
}

// Events
if($action == 'event_destaque'){
    $event->read_news();
}
if($action == 'pesquisa'){
    $event->pesquisa($_POST);
}
if($action == 'resultado'){
    $event->resultado($_POST);
}
if($action == 'addevent'){
    $event->addevent($_POST);
}
if($action == 'add_id_event'){
    $event->set_idevent($_POST);
}
if($action == 'event_d'){
    $event->event_d($_POST);
}
if($action == 'edit_event_show'){
    $event->edit_event_show($_POST);
}
if($action == 'edit_event'){
    $event->edit_event($_POST);
}
if($action == 'updateevent'){
    $event->updateevent($_POST);
}
if($action == 'dash_event_show'){
    $event->dash_event_show($_POST);
}
if($action == 'deletar_event'){
    $event->deletar_event($_POST);
}
if($action == 'deletar_all_events'){
    $event->deletar_all_events($_POST);
}


// Reviews
if($action == 'event_comment'){
    $rev->comentario($_POST);
}
if($action == 'addcomment'){
    $rev->add_comment($_POST);
}

//Registration
if($action == 'event_comprar'){
    $reg->event_comprar($_POST);
}

// User
if($action == 'edit_user'){
    $user->edit_user($_POST);
}
if($action == 'update_user'){
    $user->update_user($_POST);
}
if($action == 'dash_users_show'){
    $user->dash_users_show($_POST);
}
if($action == 'add_id_user'){
    $user->set_iduser($_POST);
}
if($action == 'edit_user_dash'){
    $user->edit_user_dash($_POST);
}
if($action == 'update_user_dash'){
    $user->update_user_dash($_POST);
}
if($action == 'deletar_all_users'){
    $user->deletar_all_users($_POST);
}
if($action == 'deletar_user'){
    $user->deletar_user($_POST);
}


?>