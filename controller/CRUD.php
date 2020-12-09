<?php

if(isset($_POST['crearUsuario'])){
    $nombre = $_POST['nombreC'];
    $correo = $_POST['correoC'];
    $login =  $_POST['loginC'];
    if(isset($nombre) && isset($correo) && isset($login)){
        crearUsuario($nombre,$correo,$login);
    
    }
}

?>