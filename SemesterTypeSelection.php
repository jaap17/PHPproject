<?php
    //include 'base.php';
    session_start();
    if(isset($_SESSION['hod']))
    {
        $msg = $_SESSION['hod'];
        include "base.php";
       
    }
    else
    {
          header('location:login.php?msg=1');
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Semester Type Selection</title>
        <meta charset="UTF-8">
          <link href="test.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <center><h2>Select the type of Semester (ODD or EVEN )</h2></center> <br><br>
    <center>
        <h3><form action="Odd.php" method="POST">
            <input type="submit" value="ODD">
        </form>
        <br><br>
        <form action="Even.php" method="POST">
            <input type="submit" value="EVEN">
        </form></h3>
    </center>  
    </body>
</html>
