<?php session_start(); ?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Envio de informaci&oacute;n</title>
    <?php include("components/head.php")  ?>
    
</head>

<body>

    <?php 
        include("components/header.php");
        include("../model/models.php");
        $conexion=conexion();
        $idU= $_GET['id'];
        if(isset($idU)){

            $sql="SELECT * FROM usuarios WHERE id=$idU";
            $resultado = mysqli_query($conexion,$sql);
            $row = (mysqli_fetch_array($resultado));
        
    ?>

    <!-- Cuerpo del documento -->
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-three-fifths is-offset-one-fifth">
                <h1 class="title is-2">Editar usuario</h1>
                <form name="frmdatos" action="../controller/CRUD.php" method="POST">
                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-three-fifths"><input class="input" type="text" id="nombre" name="nombre" placeholder="e.g Alex Smith" value="<?php echo $row["nombre"]?>"></div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-two-fifths">
                                    <input class="input" type="email" id="correo" name="correo" placeholder="e.g. alexsmith@gmail.com" value="<?php echo $row["correo"]?>"></div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Nombre de usuario</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-two-fifths">
                                    <input class="input" type="text" id="login" name="login" placeholder="e.g. AlexS" value="<?php echo $row["login"]?>"></div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <div class="columns">
                                <div class="column is-two-fifths">
                                    <input class="input" type="hidden" id="id" name="id" value="<?php echo $row["id"]?>"></div>
                            </div>
                        </div>
                    </div>

                    <div class="control">
                        <button id="editar" name="editar" class="button is-success">&nbsp;Actualizar datos&nbsp;</button>
                        <a id="cancel" name="cancel" class="button is-danger" href="../view/home.php">&nbsp;cancelar&nbsp;</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- pié de página -->
    <?php } include("components/footer.php")  ?>
</body>

</html>