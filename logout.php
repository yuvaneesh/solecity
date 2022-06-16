<?php
    session_start();

    session_unset();

    session_destroy();

    header("Location: user/Home page.php");

?>