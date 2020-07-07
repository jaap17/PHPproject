<html>
    <head>
        <link href="test.css" rel="stylesheet">
        <link href="test1.css" rel="stylesheet">
    </head>
</body>
<?php
    include 'base.php';
    session_start();
     $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
     $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if(isset($_SESSION['hod']))
    {
       
        if(isset($_POST['odd']))
        {
            setcookie('oddSemester','OddSemesterSet',time()+3600*24);
            if(isset($_COOKIE['EvenSemester']))
            {
                setcookie("EvenSemester"," ",time()-(3600*24));
            }
                $sql = "Select CourseId,CourseName,Value from SelectedCourses where Semester='1' or Semester='3' or Semester='5'";
                   
                    echo "<table border='2'>";
                    echo "<tr>";
                    echo "<td><b><i><font size='8' color='cyan'>Choice Number</font></i></b></td>";
                    echo "<td><b><i><font size='8' color='cyan'> Choice Subject </font></i></b></td>";
                    echo "</tr>";
                   
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
       
                            <option value=<?php echo $r['Value'] ?>  name=<?php $r['Value']?> ><?php echo $r['CourseName'] ?> </option>
                            
                        <?php
                        }
                        echo "</select>";
                        echo "</td>";
                        echo "</tr>";
                    }
               
               
                   
                   echo "</table>";
                  
                    echo "<center><h2><input type='submit' value='Submit'></h2></center>";
                   
        }
            
    
        if(isset($_POST['even']))
        {
            setcookie('EvenSemester','EvenSemesterSet',time()+3600*24);
            if(isset($_COOKIE['oddSemester']))
            {
                setcookie("oddSemester"," ",time()-(3600*24));
            }
            $sql = "Select CourseId,CourseName,Value from SelectedCourses where Semester='2' or Semester='4' or Semester='6'";
                   
                    echo "<table border='2'>";
                    echo "<tr>";
                    echo "<td><b><i><font size='8' color='cyan'>Choice Number</font></i></b></td>";
                    echo "<td><b><i><font size='8' color='cyan'> Choice Subject </font></i></b></td>";
                    echo "</tr>";
                   
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
       
                            <option value=<?php echo $r['Value'] ?>  name=<?php $r['Value']?> ><?php echo $r['CourseName'] ?> </option>
      
                        <?php
                        }
                        echo "</select>";
                        echo "</td>";
                        echo "</tr>";
                    }
               
               
                   
                 echo "</table>";
                
                 echo "<center><h2><input type='submit' value='Submit'></h2></center>";
                   
        }
    }
   
    else
    {
        header('location:login.php?msg=1');
    }

?>
</body>                   
</html>