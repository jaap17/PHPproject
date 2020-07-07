<?php
    
    try
    {
    $dbhandler = new PDO('mysql:localhost=127.0.0.1;dbname=phpproject','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "create table courselist(CourseId varchar(10) , CourseName varchar(40) , Semester INT(2) , Value varchar(10) , FOREIGN KEY(CourseId) REFERENCES DepartmentalCourses(CourseId)  )";
    $dbhandler->query($sql);
    }catch(PDOException $e)
    {
        echo $e->getMessage();
        die();
    }
?>