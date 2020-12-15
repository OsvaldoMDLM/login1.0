<?php

include("./view/login.php");
if(isset($_POST['login']))
{
    if(isset($_POST['nombre']) && isset($_POST['correo'])){
        login();
    }
}

/****Session****/
if ($userSession->existSession('user')) {
    include_once('./views/home.php');
 } else {
    include_once('./views/login.php');
 }
?>