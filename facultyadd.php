<html>
    <head>
        <link href="test.css" rel="stylesheet">
    </head>
    <body>
<?php
    session_start();
    if(isset($_SESSION['hod']))
    {
        include 'base.php';
    try {
        
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $i = 1;
    
    for($x=1;$x<=10;$x++)
    {
        ?><center>
            
        <?php if(!isset($_POST[$x]))
        {
            $sql = "Select MemberName,Username from DeptMembers where MemberId=$x";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $memname = $r['MemberName'];
            $memuname = $r['Username'];
            $sql = "insert into nonselectedfaculties values('$x','$memname','$memuname')";
            $query = $dbhandler->query($sql);
        }
        else
        {
            $sql = "Select MemberName,Username,MemberId from DeptMembers where MemberId=$x";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $memname = $r['MemberName'];
            $memid = $r['MemberId'];
            $memuname = $r['Username'];
            $sql1 = "insert into SelectedFaculties values('$memid','$memname','$memuname')";
            $query = $dbhandler->query($sql1);
            //echo "$memname has Been Selected for the choice filling in the allocation<br>";
        }
        ?></center><?php
    }
    
   
    } 
    catch (Exception $ex) {
        echo $ex->getMessage();
        die();
    }
     try
        {
            $dbhandler = new PDO('mysql:localhost=127.0.0.1;dbname=phpproject','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<center><h2>List Of the Faculties Selected</h2></center>";
            $sql = "Select MemberId,MemberName from SelectedFaculties";
            echo "<center>";
            echo "<table border='1' bgcolor='almond'>";
            echo "<tr>";
            echo "<td><h1><center>MemberId</center></h1></td>";
            echo "<td><h1><center>MemberName</center></h1></td>";
            echo "</tr>";
            $query = $dbhandler->query($sql);
            while($r = $query->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                
                $mid = $r['MemberId'];
                $memname = $r['MemberName'];
                echo "<td><h1><center>$mid</center></h1></td>";
                echo " <td><h1><center>$memname</center></h1></td>";
                echo "</tr>";
            }
            echo "</center>";
            echo "</table>";
        }catch(exception $e)
        {
            echo $e->getMessage();
            die();
        }
    }
    else
    {
        header('location:login.php?msg=1');
    }
?>
    </body>     
</html>