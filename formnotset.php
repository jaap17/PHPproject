<?php
    include 'base1.php';
    session_start();
    if(isset($_SESSION['faculty']))
    {
        echo "<h2> The forms are not Generated yet </h2>";
    }
    else
    {
        header('location:login.php?msg=1');
    }

?>