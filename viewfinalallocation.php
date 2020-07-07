<html>
    <head>
        <link href="test.css" rel="stylesheet">
        <link href="test1.css" rel="stylesheet">
    </head>
<?php
include 'base.php';
    session_start();
    if(isset($_SESSION['hod']))
    {
        try
        {
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql = "Select * from allocationlist";
            $query = $dbhandler->query($sql);
            ?>
    <table border="2">
        <tr>
            <td><font size="7"><b> Course Name </b></font></td>
            <td><font size="7"><b> Faculty Allocated </b></font></td>
        </tr>
            <?php
                while($r = $query->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<tr>";
                    $cname = $r['CourseName'];
                    $facname = $r['FacultyName'];
                    echo "<td><font size='6'> <b> $cname  </b> </font></td>";
                    echo "<td><font size='6'> <b> $facname  </b> </font></td>";
                    echo "</tr>";
                }
            ?></table>
    <?php
        } catch (Exception $ex) {
                echo $ex->getMessage();
                die();
        }
       
    }
    else 
    {
        header('location:login.php?msg=1');
    }

?>
</html>