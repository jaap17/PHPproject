<?php
    session_start();
    include 'base.php';
    if(isset($_SESSION['hod']))
    {
        //include "base.php";
        try
        {
            $dbhandler = new PDO('mysql:localhost=127.0.0.1;dbname=phpproject','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "Select MemberName,MemberId from DeptMembers";
            $query = $dbhandler->query($sql);
            $count = $query->rowcount();
        }catch (PDOException $e)
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
<html>
    <head>
        <link href="test.css" rel="stylesheet">
    </head>
    <body>
    <center>
        <form action='facultyadd.php' method='POST'>
            <h2>Select the Faculties who would participate in the Choice Filling of the Courses</h2><br>
            
            <h3> <?php 
                if($count > 0)
                {
                    while( $r = $query->fetch(PDO::FETCH_ASSOC))
                    {
                
                    ?> <input type='checkbox' name=<?php echo $r['MemberId'] ?> value=<?php echo $r['MemberId'] ?> ><?php echo $r['MemberName'] ?>
                    <br><br><?php 
                    
                    }
                    }?></h3>
                <input type='submit' value='Submit the Selected Faculties'>
        </form> 
    </center>
    </body>
</html>

