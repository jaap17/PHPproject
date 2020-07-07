
<!DOCTYPE HTML>
<html>
    <head>
        <link href="test.css" rel="stylesheet">
    </head>
    <center>
    <body>
        <?php
    
    include 'base1.php';
    session_start();
    if(isset($_SESSION['faculty']))
    {
        echo "<h1> Welcome to Your Homepage</h1>";
        $msg = $_SESSION['faculty'];
        
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "Select MemberName from deptmembers where Username='$msg'";
        $query = $dbhandler->query($sql);
        $r = $query->fetch(PDO::FETCH_ASSOC);
        $memname = $r['MemberName'];
        echo "<center><h2>Welcome $memname</h2></center>";
        $facid = $_SESSION['faculty'];
        $_SESSION['faculty'] = $facid;
        $sql = "Select MemberName from SelectedFaculties where Username='$facid'";
        $query = $dbhandler->query($sql);
        $count = $query->rowCount();
        if($count == 0)
        {
            echo "<h2>You can't participate in the course allocation</h2>";
            echo "<form action='allocationlist.php' method='GET'>";
            if(isset($_COOKIE['final']))
            {
                echo "<input type='submit' value='AllocationList'>";
                echo "</form>";
            }
        }
        else
        {
            if(isset($_COOKIE['oddSemester']))
            {
                echo "<form action='oddchoicefillingform.php' method='POST'>";
                echo "<h2><input type='submit' value='ChoiceFilling Form'></h2>";
                echo "</form>";
                echo "<br>";
            }
            if(isset($_COOKIE['EvenSemester']))
            {
                echo "<form action='evenchoicefillingform.php' method='POST'>";
                echo "<h2><input type='submit' value='ChoiceFilling Form'></h2>";
                echo "</form>";
                echo "<br>";
            }
            if((!isset($_COOKIE['oddSemester'])) && (!isset($_COOKIE['EvenSemester'])))
            {
                echo "<form action='formnotset.php' method='POST'>";
                echo "<h2><input type='submit' value='ChoiceFilling Form'></h2>";
                echo "</form>";
                echo "<br>";
            }
            /*echo "<form action='evenchoicefillingform.php' method='POST'>";
            echo "<h2><input type='submit' value='ChoiceFilling Form'></h2>";
            echo "</form>";
            echo "<br>";*/
            
            if(isset($_COOKIE['final']))
            {
                 echo "<h2>";
                echo "<form action='allocationlist.php' method='GET'>";
                echo "<input type='submit' value='AllocationList'>";
                echo "</form>";
                 echo "</h2>";
            }
           
        }
        
        
           
        
    }
    else
    {
        location('header:login.php?msg=1');
    }

?>
        
    </body>
    </center>
</html>