<?php
    session_start();
    session_destroy();

    header("Location: ../../pages/Login/login.php");
?>