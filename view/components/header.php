<?php 
    
    $uri = '../controller/logout.php';
    if (file_exists("../controller/sessions.php")) {
        $uri = '../controller/logout.php';
        include("../controller/sessions.php");
    }
    $userSession = new UserSession();
?>
<section class="hero is-primary">
    <div class="hero-body">
        <div class="container">
            <a href="../controller/logout.php">
            <h1 class="title">Universidad de Colima</h1>
            <h2 class="subtitle">Facultad de Telemática</h2>
            </a>
        </div>
    </div>

<?php   
            $name = $userSession->getCurrentUser();
            ?>       
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-end">
        <div class="navbar-item">
            <p class="mr-1 px-3 has-text-white has-background-primary-dark "><strong class="has-text-white">Bienvenido: </strong>  <?php echo $name;?> </p>
            <strong class="has-text-white">|</strong>    
            <a class="pr-5 ml-1" href="<?php echo($uri) ?>">
                <u> Cerrar Sesion <i class="fas fa-sign-out-alt"></i> </u>
            </a>
        </div>
    </div>
</nav>

</section>