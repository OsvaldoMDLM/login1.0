<?php

include("./view/login.php");
if(isset($_POST['login']))
{
    if(isset($_POST['user']) && isset($_POST['correo'])){
        login();
    }
}
?>