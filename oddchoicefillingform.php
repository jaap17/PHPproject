<html>
    <head>
        <meta charset="UTF-8">
        <link href="test.css" rel="stylesheet">
        <link href="test1.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <?php
               include 'base2.php';
               session_start();
               $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
               $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               if(isset($_SESSION['faculty']))
               {
                   $facid = $_SESSION['faculty'];
                   //echo $facid;
                    $name = "Select MemberName from deptMembers where Username='$facid'";
                    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
                    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $xyz = $dbhandler->query($name);
                    $k = $xyz->fetch(PDO::FETCH_ASSOC);
                    $facname = $k['MemberName'];
                    echo "<h1> You are Signed in as $facname </h1>";
                   $_SESSION['faculty'] = $facid;
                   $sql = "Select CourseId,CourseName,Value,Semester from SelectedCourses where Semester='1' or Semester='3' or Semester='5'";
                 
                    echo "<table border='2'>";
                    echo "<tr>";
                    echo "<td><b><i><font size='8' color='cyan'>Choice Number</font></i></b></td>";
                    echo "<td><b><i><font size='8' color='cyan'> Choice Subject </font></i></b></td>";
                    echo "</tr>";
                     echo "<font size='6'><b></b><i> Please follow following instructions in the choice filling of your priorities: <br>"
                    . "1) Please don't Select same choice in different priorities <br>"
                            . "2) Please select atleast one subject from each Semester as shown in the bracket immedieately after the courseName </i></font>";
                    echo "<form action='storechoices.php' method='POST'>";
                    
                    for($x=1;$x<=5;$x++)
                    {
                        $query = $dbhandler->query($sql);
                        echo "<tr>";
                        echo "<td><font size='6'><center>$x</center></font></td>";
                        echo "<td>";
                        echo "<select name='$x'>";
                        while( $r = $query->fetch(PDO::FETCH_ASSOC) )
                        {
                        ?>
       
                            <option value=<?php echo $r['Value'] ?>  name=<?php $r['Value']?> ><?php echo $r['CourseName'] ; ?><?php echo "(Semester";  echo $r['Semester'] ; echo ")"; ?> </option>
      
                        <?php
                        }
                        echo "</select>";
                        echo "</td>";
                        echo "</tr>";
                    }
               
               
                   
                   echo "</table>";
                    echo "<center><h2><input type='submit' value='Submit'></h2></center>";
                    echo "</form>";
                    
               }
        ?>
    </body>
</html>
