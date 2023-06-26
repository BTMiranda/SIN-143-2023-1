<?php
include "authentication.php";
include "conexao.php";

$action = isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '');

$Auth = new Authentication($conn);

if($action == 'login'){
    $Auth->verificacao($_POST);
}
if($action == 'cadastro'){
    $Auth->cadastro($_POST);
}

// header('Location: index.php');

?>