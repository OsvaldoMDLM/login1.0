<!DOCTYPE html>
<html lang="en">
<head>
<?php include("components/head.php")  ?>
    <title>Home</title>
    <link rel="stylesheet" href="../libraries/css/alertify.css">
    <link rel="stylesheet" href="../libraries/css/themes/default.css">

    <script src="../libraries/alertify.js"></script>
    <script src="../libraries/alertify.min.js"></script>
</head>
<body>

    <?php include("components/header.php");
    include_once("../model/models.php");
    include("../controller/CRUD.php");


?>
    <h1 class="title is-1 has-text-centered pt-3">Control de Usuario</h1>
    <div class="container is-max-desktop buttons is-right">
        <button class="button is-primary PX-5 modal-button" type="button" name="AddModal" id="AddModal"  data-target= aria-haspopup="true">Agregar Usuario</button>
    </div>
    <?php include("components/addModal/addModal.php") ?>
    <?php include("components/editModal/editModal.php") ?>
    <?php

        $elements = getElements();
        include("components/usersTable.php");     
    ?>
    
    <?php include("components/footer.php")  ?>

    <script src="components/addModal/jsModal.js"></script>
</body>
</html>