<?php
include "authentication.php";
include "event.php";
include "conexao.php";

$action = isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '');

$Auth = new Authentication($conn);
$event = new Event($conn);

if($action == 'login'){
    $Auth->verificacao($_POST);
}
if($action == 'cadastro'){
    $Auth->cadastro($_POST);
}
if($action == 'event_destaque'){
    $event->read_news();
}
if($action == 'pesquisa'){
    $event->pesquisa();
}
// header('Location: index.php');

?>