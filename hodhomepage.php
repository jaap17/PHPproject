<?php
    include 'base1.php';
    session_start();
    if(isset($_SESSION['hod']))
    {
        $msg = $_SESSION['hod'];
        echo "<center><h2>Welcome HOD Sir Dr Pankaj Jalote  to Your Homepage</h2></center>";
    }
    else
    {
        //$msg = "Please login to Access this page";
        header('location:login.php?msg=1');
    }
?>

<html>
    <head>
        <title>Task Selection</title>
        <link href="test.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
    <center>
        
        <br>
        <h3>Enter the respective link for carrying out the further task <br><br>
        <a href ='SemesterTypeSelection.php'>Subject Registration</a>
        <br><br>
        <a href='FacultyRegistration.php'>Faculty Registration</a><br><br>
        <a href='allocation.php'>Subject Allocation</a><br><br>
        <form action="nonchoicefillingallocation.php" method="GET">
            <input type="submit" value="Non choice filling course Allocation">
        </form>
        <form action="viewfinalallocation.php" method="GET">
            <input type="submit" value="View Final Allocation"> 
        </form>
        </h3>
    </center>
    </body>
    
</html>
