<?php
class UserSession
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function setCurrentUser($nombre)
    {
        $_SESSION['nombre'] = $nombre;
    }

    public function existSession($nombre)
    {
        return isset($_SESSION["$nombre"]);
    }

    public function getCurrentUser()
    {
        return $_SESSION['nombre'];
    }

    public function closeSession()
    {
        session_unset();
        session_destroy();
    }
}
