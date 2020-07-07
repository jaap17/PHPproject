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
        $sql = "Select CourseName,Value from SelectedCourses";
        $query = $dbhandler->query($sql);
        ?>
    <table border="1" collr="blue">
            <tr>
                <td><font size="6"> Course Name </font></td>
                <td><font size="6"> Selected Faculty </font></td>
            </tr>
        <?php
        
        while($r = $query->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
            echo "<td>";
            $cname = $r['CourseName'];
            echo "<font size='5'>$cname</font>";
            echo "</td>";
            echo "<td>";
            $value = $r['Value'];
            $facname = $_POST[$value];
            if($facname != null)
            {
                echo  "<font size='5'>$facname</font>";
                echo "<br>";
            }
            $fire = "Insert into AllocationList values('$facname','$cname')";
            $insert = $dbhandler->query($fire);
            echo "</td>";
            echo "<tr>";
        }
        }
        catch(exception $ex)
        {
            echo $ex->getMessage();
            die();
        }
    }
 else {
     header('location:login.php?msg=1');
 }
?>
         </table>
</html>