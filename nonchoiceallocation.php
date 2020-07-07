<html>
    <head>
        <link href="test.css" rel="stylesheet">
        <link href="test1.css" rel="stylesheet">
    </head>
    <body>
<?php

    session_start();
    include 'base.php';
    try
    {
        $dbhandler = new PDO('mysql:locahost=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(isset($_SESSION['hod']))
        {
            $id = $_SESSION['hod'];
            $sql = "Select * from DeptMembers where Username='$id'";
            $hodname = $dbhandler->query($sql);
            $r = $hodname->fetch(PDO::FETCH_ASSOC);
            $facname = $r['MemberName'];
            echo "<h1> You are signed in as $facname</h1>";
            $sub = "Select * from nonselectedcourses";
            $subjects = $dbhandler->query($sub);
            echo "<table border='1'>";
            echo "<tr>";
            echo "<td><font size='7'> FacultyName </font></td>";
            echo "<td><font size='7'> AllotedSubject </font></td>";
            echo "</tr>";
            while($r = $subjects->fetch(PDO::FETCH_ASSOC))
            {
                $subname = $r['CourseName'];
                $value = $r['Value'];
              
                $facname = $_POST[$value];
                echo "<tr>";
                $store = "Insert into AllocationList values('$facname','$subname')";
                echo "<td> <b><i><font size='7'>$facname</font> </i></b></td>";
                echo "<td><b><i><font size='7'> $subname </font></i></b></td>";
                $execute = $dbhandler->query($store);
                setcookie('final','complete');
                echo "</tr>";
                
            }
        }
        else
        {
            header('location:login.php?msg=1');
        }
    }catch(PDOException $ex)
    {
        echo $ex->getMessage();
        die();
    }
?>
    </body>
</html>