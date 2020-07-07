<html>
    <head>
        <link href="test.css" rel="stylesheet">
        <link href="test1.css" rel="stylesheet">
    </head>
    <body>
<?php
      session_start();
      
      if(isset($_SESSION['hod']))
      {
        include'base.php';
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "Select * from SelectedFaculties";
        $query = $dbhandler->query($sql);
        $count = $query->rowCount();
      //echo "<h3>$count</h3>";
      
        $fire = "Select * from facultychoice";
        $query = $dbhandler->query($fire);
        $choicecount = $query->rowCount();
        echo "<br>";
      //echo "<h3>$choicecount</h3>";
        echo "<br>";
        if($count == $choicecount)
        {
           $fire = "Select CourseName,Value from SelectedCourses";
           $query = $dbhandler->query($fire);
           echo "<table>";
           echo "<tr>";
           echo "<td><font size='7' ><b><i>Course Name</i></b></font></td>";
           echo "<td><font size='5' ><b><i>Faculties Selection with priority(Your Selection will be the allocation)</i></b></font></td>";
           echo "</tr>";
            while($r = $query->fetch(PDO::FETCH_ASSOC))
            {
           ?> 
               <tr>
                   <td> <font size="5"><b><i> <?php echo $r['CourseName'] ; ?></i></b> </font> </td>
                   
              
            <?php
            
            }
            echo "</table>";
        }
        else
        {
            $diff = $count - $choicecount;
            if($diff > 0)
            {
                echo "<h2>Still $diff faculties are yet to give the choices</h2>";
            }
          //echo "Insufficient faculty choices to proceed for the allocation";
        }
      }
      else
      {
          header('location:login.php?msg=1');
      }
?>
    </body>
</html>