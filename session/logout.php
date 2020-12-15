<?php 
session_start();
    include_once('../controller/sessions.php');
    $userSession = new UserSession();
    $userSession->closeSession();

    header('location: ../index.php');
?>