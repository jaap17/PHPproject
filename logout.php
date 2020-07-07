<html>
    <head>
        <link href="test.css" rel="stylesheet">
    </head>
    <body>
        <center><font size="20" color="cyan"><marquee scrollamount="4">Course Allocation System</marquee></font> </center> <hr> 
    </body>
    <center>
<?php
  
    session_start();
    if(isset($_SESSION['hod']))
    {
        unset($_SESSION['hod']);
        echo "<h3>You have logged out successfully HOD Sir</h3>";
    }
    if(isset($_SESSION['faculty']))
    {
        $msg = $_SESSION['faculty'];
        try
        {
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "Select MemberName from SelectedFaculties where Username='$msg'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
           
            $facname = $r['MemberName'];
            unset($_SESSION['faculty']);
            echo "<h3>You have successfully logged out $facname</h3>";
        } catch (Exception $ex) {
               $ex->getMessage();
        }
       
    }


?>
        <br><br>
        <h2>Link to go to the <a href="login.php">Login Page</a></h2>
    </center>
    </body>
</html>