<?php 
    $uri = '../session/logout.php';
    if (file_exists("../controller/sessions.php")) {
        $uri = '../session/logout.php';
        include("../controller/sessions.php");
    }
?>
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <a href="../../actividad20/index.php">
            <h1 class="title">Universidad de Colima</h1>
            <h2 class="subtitle">Facultad de Telemática</h2>
            </a>
        </div>
    </div>

<?php    $userSession = new UserSession();
            ?>       
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-end">
        <div class="navbar-item">
            <p class="mr-3 px-3 has-text-white has-background-primary-dark "><strong class="has-text-white">Bienvenido: </strong>  <?php echo $_SESSION['user'];?> </p>
            <div class="buttons">
                <a class="button is-warning pr-5 mr-4" href="<?php echo($uri) ?>">
                    Cerrar Sesion
                </a>
            </div>
        </div>
    </div>
</nav>
</section>