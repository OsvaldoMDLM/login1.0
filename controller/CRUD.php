<?php

/****Añadir un usuario nuevo****/
if(isset($_POST['crearUsuario'])){
    $nombre = $_POST['nombreC'];
    $correo = $_POST['correoC'];
    $login =  $_POST['loginC'];
    if(isset($nombre) && isset($correo) && isset($login)){
        crearUsuario($nombre,$correo,$login);
    }
}
/****Actualizar usuario****/
if(isset($_POST['editar'])){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $login=$_POST['login'];
    if(isset($nombre) && isset($correo) && isset($login) && isset($id)){
        include_once('../model/models.php');
        editarUsuario($id,$nombre,$correo,$login);
    }
}
/****eliminar usuario****/
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($id)){
        include_once('../model/models.php');
        eliminarUsuario($id);

    }
}



