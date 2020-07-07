<html>
    <head>
        <link href="test.css" rel="stylesheet">
        <link href="test1.css" rel="stylesheet">
    </head>
    <body>
<?php
    include 'base2.php';
    session_start();
    if(isset($_SESSION['faculty']))
    {
        $msg = $_SESSION['faculty'];
        $name = "Select MemberName from deptMembers where Username='$msg'";
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $xyz = $dbhandler->query($name);
        $k = $xyz->fetch(PDO::FETCH_ASSOC);
        $facname = $k['MemberName'];
        echo "<h1> You are Signed in as $facname </h1>";
        $sql = "Select * from AllocationList";
        $query = $dbhandler->query($sql);
        $count = $query->rowCount();
         if($count > 0)
         {
             echo "<table border='1'>";
             echo "<tr>";
             echo "<td><font size='7'><b><i>Subject</i></b></font></td>";
             echo "<td> <font size='7'><b><i>Faculty Allocated</i></b><font></td>";
             echo "</tr>";
             while($r = $query->fetch(PDO::FETCH_ASSOC))
             {
                 $subject = $r['CourseName'];
                 $faculty = $r['FacultyName'];
                 echo "<tr>";
                 echo "<td><font size='6'><b>$subject</b></font></td>";
                 echo "<td><font size='6'><b><center>$faculty</center></b></font></td>";
                 echo "</tr>";
             }
         }
         else
         {
             echo "<h2>The allocation is yet to be Completed</h2>";
         }
    }
    else
    {
        header('location:login.php?msg=1');
    }

?>
    </body>
</html>