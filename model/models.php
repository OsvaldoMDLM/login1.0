<?php

    function conexion(){

    $host="localhost";
    $user="root";
    $password="";
    $db="actividad18";

    $conexion = mysqli_connect($host,$user,$password,$db);
    if(!$conexion)
    {
        die("no hay conexion".mysqli_connect_error());
    }
    return $conexion;
}

function login() {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

	$conexion=conexion();

    $consulta =  "SELECT * FROM usuarios WHERE nombre='$nombre' and correo='$correo' ";
    $resultado = mysqli_query($conexion,$consulta);

    $filas = mysqli_num_rows($resultado);
    if($filas){
        header("location:./view/home.php");
    }
    else {
        header("location:./view/userNoFound.php");
    }


    mysqli_free_result($resultado);
    mysqli_close($conexion);

}

function getElements(){
    $conexion=conexion();
    if($conexion)
    {
        $sql="SELECT * from usuarios";
        $resultado=mysqli_query($conexion,$sql);

        if($resultado){
            return $resultado;
        }
        return false;
    }
    return false;
}

function crearUsuario($nombre, $correo, $login){
    $conexion=conexion();
    if($conexion){
        $sql="INSERT INTO usuarios (id, nombre, correo, login) VALUES (NULL,'$nombre','$correo','$login')";
        $agregado=mysqli_query($conexion,$sql);
        if($agregado){
            echo "<script> alertify.success('Usuario Agregado');</script>";
            header("location:./home.php");
        }
        else{
            echo "<script> alertify.Error('Error'); </script>";
        }
    }
}

function editarUsuario($id, $nombre, $correo, $login){
    $conexion=conexion();
    $sql = "UPDATE usuarios set nombre='$nombre',correo='$correo',login='$login'  WHERE id='$id'";
    $editado=mysqli_query($conexion,$sql);
    if($editado){
        echo "<script> alertify.success('Usuario Agregado'); window.location='./home.php';</script>";
    }
    else{
        echo "<script> alertify.Error('Error'); </script>";
    }
    
}

function eliminarUsuario($id){
    $conexion=conexion();
    $sql = "DELETE FROM usuarios WHERE id = '$id'";
    $resultado=mysqli_query($conexion,$sql);
    if($resultado){
        header("Location: ../view/home.php");
    }
}

?>