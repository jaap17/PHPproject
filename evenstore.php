<html>
    <head>
        <link href="test.css" rel="stylesheet">
    </head>
    <body>
<?php
    session_start();
    include 'base.php';
    if(isset($_SESSION['hod']))
    {
        echo "<h2>List Of Selected Courses</h2>";
    try
    {
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if(!isset($_POST['Maths-II']))
        {
           $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='Maths-II'";
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
        
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='Maths-II'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
             //echo "<h1>You have Selected $cname</h1><br>";
        }
    
        if(!isset($_POST['EP']))
        {
             $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='EP'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='EP'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
              //echo "<h1>You have Selected $cname</h1><br>";
        }
    
        if(!isset($_POST['CP-II']))
        {
             $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='CP-II'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='CP-II'";
            $query = $dbhandler->query($sql);
              $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
             //echo "<h1>You have Selected $cname</h1><br>";
        }
    
        if(!isset($_POST['BOS']))
        {
           $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='BOS'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='BOS'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
             //echo "<h1>You have Selected $cname</h1><br>";
        }
     
    
        if(!isset($_POST['C++']))
        {
             $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='C++'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='C++'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
              //echo "<h1>You have Selected $cname</h1><br>";
        }
    
    
        if(!isset($_POST['DAA']))
        {
           $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DAA'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DAA'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
             //echo "<h1>You have Selected $cname</h1><br>";
        }
    
        if(!isset($_POST['DM']))
        {
          $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DM'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='DM'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "<h1>You have Selected $cname</h1><br>";
        }
    
    
        if(!isset($_POST['JT']))
        {
          $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='JT'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='JT'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "<h1>You have Selected $cname</h1><br>";
        }   
    
        if(!isset($_POST['SE']))
        {
          $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='SE'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='SE'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
             //echo "<h1>You have Selected $cname</h1><br>";
        }
    
        if(!isset($_POST['CSA']))
        {
           $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='CSA'";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='CSA'";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "<h1>You have Selected $cname</h1><br>";
        }
   
        if(!isset($_POST['CN']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='CN' ";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='CN' ";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "<h1>You have Selected $cname</h1><br>";
        }
        
        if(!isset($_POST['OOSE']))
        {
             $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='OOSE' ";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='OOSE' ";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "<h1>You have Selected $cname</h1><br>";
        }
        
        if(!isset($_POST['TAFL']))
        {
           $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='TAFL' ";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='TAFL' ";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "<h1>You have Selected $cname</h1><br>";
        }
        
         if(!isset($_POST['SOA']))
        {
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='SOA' ";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='SOA' ";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
             //echo "<h1>You have Selected $cname</h1><br>";
        }
        
        if(!isset($_POST['SDP']))
        {
             $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='SDP' ";
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
            $sql = "Select CourseName,Value,CourseId,Semester from DepartmentalCourses where Value='SDP' ";
            $query = $dbhandler->query($sql);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            $cname = $r['CourseName'];
            $cid = $r['CourseId'];
            $csem = $r['Semester'];
            $cvalue = $r['Value'];
            $sql1 = "Insert into SelectedCourses values('$cid','$cname','$csem','$cvalue')";
            $query = $dbhandler->query($sql1);
            //echo "<h1>You have Selected $cname</h1><br>";
        }
        
          $fetch = "Select CourseId,CourseName,Semester from SelectedCourses";
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
            echo"<input type='submit' value='Generate Even Semester Choice Filling Forms' name='even'>";
            echo "</form>";
            
        
        }catch(PDOException $ex)
        {
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