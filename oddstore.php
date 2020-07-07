<html>
    <head>
        <link href="test.css" rel="stylesheet">
    </head>
    <body>
<?php

    session_start();
    //include 'base.php';
    if(isset($_SESSION['hod']))
    {
        include 'base.php';
    try
    {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
       
        if(!isset( $_POST['Maths-I']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='Maths-I'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='Maths-I'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Maths-I<br>";
    
        }
       
        if(!isset($_POST['BEEE']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='BEEE'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='BEEE'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected BEEE<br>";
        }
        
        if(!isset($_POST['HTML']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='HTML'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
           $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='HTML'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Engineering Graphics<br>";
       
       
        if(!isset($_POST['CSS']))
        {
             $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='CSS'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='CSS'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Engineering Mechanics<br>";
        }
       
      
        if(!isset($_POST['ELCP']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='ELCP'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='ELCP'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Elements of Linux and CProgramming-I<br>";
        }
        
        if(!isset($_POST['Maths-III']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='Maths-III'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='Maths-III'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Maths-III<br>";
        }
       
        if(!isset($_POST['DBMS']))
        {
             $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DBMS'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DBMS'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Database Management System<br>";
        }
       
        if(!isset($_POST['OOPJ']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='OOPJ'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
           $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
           $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='OOPJ'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Object Oriented Programming in Java<br>";
        }
       
        if(!isset($_POST['DDC']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DDC'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DDC'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Design of Digital Circuits<br>";
        }
       
        if(!isset($_POST['DSA']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DSA'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DSA'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Data Structures and Algorithms<br>";
        }
       
        if(!isset($_POST['MFP']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='MFP'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
             $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='MFP'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Processor MicroFunction and Programming<br>";
        }
      
        if(!isset($_POST['AA']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='AA'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='AA'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Advanced Algorithms<br>";
        }
       
        if(!isset($_POST['AT']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='AT'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='AT'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Advanced Technologies<br>";
        }   
        
        if(!isset($_POST['OS']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='OS'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='OS'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Operating Systems<br>";
        }
        
        if(!isset($_POST['NET']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='NET'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into nonselectedcourses values('$cid','$cname','$cvalue','$csem')";
            $query = $dbhandler->query($sql1);
        }
        else
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='NET'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into selectedcourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "You have Selected Web development in .NET<br>";
        }
    }
    
    $fetch = "Select CourseId,CourseName,Semester from selectedcourses";
     echo "<table border='1'>";
            echo "<tr>";
            echo "<td><h1>CourseId</h1></td>";
            echo "<td><h1>CourseName</h1></td>";
            echo "<td><h1>Semester</h1></td>";
            echo "</tr>";
            $query = $dbhandler->query($fetch);
            while($r = $query->fetch(PDO::FETCH_ASSOC))
            {
                echo "<tr>";
                
                $cid = $r['CourseId'];
                $cname = $r['CourseName'];
                $csem = $r['Semester'];
                echo "<td><h1>$cid</h1></td>";
                echo " <td><h1>$cname</h1></td>";
                echo " <td><h1>$csem</h1></td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<form action='choicefillingform.php' method='POST'>";
            echo"<input type='submit' value='Generate Odd Semester ChoiceFilling Forms' name='odd'>";
            echo "</form>";
    }catch (Exception $ex) {
        echo $ex->getMessage();
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