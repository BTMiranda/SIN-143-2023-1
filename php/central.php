<?php
include "authentication.php";
<<<<<<< Updated upstream
=======
include "event.php";
include "return.php";
>>>>>>> Stashed changes
include "conexao.php";

$action = isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '');

$Auth = new Authentication($conn);
<<<<<<< Updated upstream
=======
$event = new Event($conn);
$Ret = new ReturnClass($conn);
>>>>>>> Stashed changes

if($action == 'return'){
    $Ret->return($_POST);
}
if($action == 'login'){
    $Auth->verificacao($_POST);
}
if($action == 'cadastro'){
    $Auth->cadastro($_POST);
}
<<<<<<< Updated upstream

=======
if($action == 'event_destaque'){
    $event->read_news();
}
if($action == 'pesquisa'){
    $event->pesquisa($_POST);
}
if($action == 'resultado'){
    $event->resultado($_POST);
}
>>>>>>> Stashed changes
// header('Location: index.php');

?>