<!DOCTYPE HTML>
<html>

<head>
    <title>Envio de informaci&oacute;n</title>
    <?php include("components/head.php")  ?>
    
</head>

<body>

    <?php 
        include("components/header.php");
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
                                <div class="column is-three-fifths"><input class="input" type="text" id="nombre" name="nombre" placeholder="e.g Alex Smith" value="<?php echo$nombre?>"></div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-two-fifths">
                                    <input class="input" type="email" id="correo" name="correo" placeholder="e.g. alexsmith@gmail.com" value="<?php echo$correo?>"></div>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Nombre de usuario</label>
                        <div class="control">
                            <div class="columns">
                                <div class="column is-two-fifths">
                                    <input class="input" type="text" id="login" name="login" placeholder="e.g. AlexS" value="<?php echo$login?>"></div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <div class="columns">
                                <div class="column is-two-fifths">
                                <input class="input" type="hidden" id="login" name="login" value="<?php echo$id?>"></div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="control">
                        <button id="editar" name="editar" class="button is-success">&nbsp;Actualizar datos&nbsp;</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- pié de página -->
    <?php include("components/footer.php")  ?>
</body>

</html>