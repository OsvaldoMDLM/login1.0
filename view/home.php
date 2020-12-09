<!DOCTYPE html>
<html lang="en">
<head>
<?php include("components/head.php")  ?>
    <title>Home</title>
</head>
<body>

    <?php include("components/header.php");
    include_once("../model/models.php");

    if(isset($_POST['crearUsuario'])){
        $nombre = $_POST['nombreC'];
        $correo = $_POST['correoC'];
        $login =  $_POST['loginC'];
        if(isset($nombre) && isset($correo) && isset($login)){
            crearUsuario($nombre,$correo,$login);
        }
        
    }

?>
    <h1 class="title is-1 has-text-centered pt-3">Control de Usuario</h1>
    <div class="container is-max-desktop buttons is-right">
        <button class="button is-primary PX-5 modal-button" type="button" name="AddModal" id="AddModal" data-target="modal" data-toggle="modal" aria-haspopup="true">Agregar Usuario</button>
    </div>
    <?php include("components/addModal/addModal.php") ?>
    <?php

        $elements = getElements();
        include("components/usersTable.php");     
    ?>
    
    <?php include("components/footer.php")  ?>

    <script src="components/addModal/jsModal.js"></script>
</body>
</html>