<?php

    session_start();

    if ($_SESSION["status"] === 'ok')
    {
        header("Location: /logs.php");
    }
    else
    {
        header("Location: /login.php");
    }

?>