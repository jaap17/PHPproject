<html>
    <head>
        <link href="test.css" rel="stylesheet">
        <link href="test.css" rel="stylesheet">
    </head>
    <body>
<?php


    session_start();
    include 'base.php';
    $dbhandler = new PDO('mysql:localhost=127.0.0.1;dbname=phpproject','root','');
    $dbhandler  ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if(isset($_SESSION['hod']))
    {
        $name = $_SESSION['hod'];
        $hod = "Select MemberName from DeptMembers where Username='$name'";
        $hodname = $dbhandler->query($hod);
        $s = $hodname->fetch(PDO::FETCH_ASSOC);
        $facname = $s['MemberName'];
        echo "<h1> You are signed in as $facname </h1>";
    }
    else
    {
        header('location:login.php?msg=1');
    }
   
    $sql = "Select * from nonselectedcourses";
    $query = $dbhandler->query($sql);
    
    echo "<table>";
    echo "<tr>";
    echo "<td> <font size='7'><b><i> Course Name  </i></b></font> </td>";
    echo "<td><font size='7'><b><i> Your Allocation </i></b></font></td>";
    echo "</tr>";
    echo "<form action='nonchoiceallocation.php' method='POST'>";
    while($r = $query->fetch(PDO::FETCH_ASSOC))
    {
        $name = $r['CourseName'];
        $value = $r['Value'];
        echo "<tr>";
        echo "<td> <font size='6'><b><i> $name </i></b></font></td>";
        echo "<td>";
        echo "<select name='$value'>";
        $sql1 = "Select * from nonselectedfaculties";
        $fet = $dbhandler->query($sql1);
        
        while($q = $fet->fetch(PDO::FETCH_ASSOC))
        {
            $facname = $q['MemberName'];
            echo "<option value='$facname' > $facname</option>";
        }
        
        echo "</select>";
        echo "</td>";
        echo "</tr>";
    }
    echo "<tr>";
    echo "<td></td>";
    echo "<td> <input type='submit' value='Submit Allocation'></td>";
    echo "</tr>";
    echo "</form>";
    echo "</table>";
    
    
?>
</body>
</html>