<?php
    session_start();
    if(isset($_SESSION['hod']))
    {
        
        include "base.php";
    }
    else
    {
          header('location:login.php?msg=1');
    }
    try
    {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "Select CourseName,Value from DepartmentalCourses where Semester=1 or Semester = 3 or Semester=5";
        $query = $dbhandler->query($sql);
        $count = $query->rowcount();
        $i = 1;
        $index ;
        echo "<html>";
        echo "<head>";
        echo "<link href='test.css' rel='stylesheet'>";
        echo "</head>";
        echo "<body>";
        echo "<center>";
        echo "<h2>Select the Courses to be Selected in the Upcoming Odd Semesters:</h2><br>";
        echo "<form action='oddstore.php' method='POST'>";
        if( $count > 0)
        {
            echo "<h3>";
            while( $r = $query->fetch(PDO::FETCH_ASSOC))
            {
               
                ?><input type='checkbox' value=<?php echo $r['Value'] ?> name=<?php echo $r['Value'] ?> ><?php echo $r['CourseName'] ?><br><br>
                    
            <?php }echo"</h3>";
        }
        echo "<input type=submit value='Submit' name='submit'>";
        echo "</form>";
        echo "</center>";
        echo "</body>";
        echo "</html>";
       
    }catch(PDOException $e)
    {
        echo $e->getMessage();
        die();
    }
?>
