<?php

if(isset($_POST['crearUsuario'])){
    $nombre = $_POST['nombreC'];
    $correo = $_POST['correoC'];
    $login =  $_POST['loginC'];
    if(isset($nombre) && isset($correo) && isset($login)){
        crearUsuario($nombre,$correo,$login);
    
    }
}

if(isset($_POST['editarUsuario'])){
    $id=$_POST['id'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $login =  $_POST['login'];
    if(isset($nombre) && isset($correo) && isset($login)){
        editarUsuario($id,$nombre,$correo,$login);
    
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($id)){
        include_once('../model/models.php');
        eliminarUsuario($id);

    }
}

?>