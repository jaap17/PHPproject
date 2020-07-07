<html>
    <head>
        <link href="test1.css" rel="stylesheet">
        <link href="test.css" rel="stylesheet">
    </head>
<?php
    include 'base2.php';
    session_start();
    if(isset($_SESSION['faculty']))
    {
        $msg = $_SESSION['faculty'];
        $name = "Select MemberName from deptMembers where Username='$msg'";
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $xyz = $dbhandler->query($name);
        $k = $xyz->fetch(PDO::FETCH_ASSOC);
        $facname = $k['MemberName'];
        echo "<h1> You are Signed in as $facname </h1>";
        $facid = $_SESSION['faculty'];
        $facname=" ";
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       try
       {
           $fire = "Select MemberName from SelectedFaculties where Username='$facid'";
           $query = $dbhandler->query($fire);
           $r = $query->fetch(PDO::FETCH_ASSOC);
           $facname= $r['MemberName'];
           //echo $facname;
       } catch (Exception $ex) {
           $ex->getMessage();
           die();
       }
        $choice1 = $_POST['1'];
        $choice2 = $_POST['2'];
        $choice3 = $_POST['3'];
        $choice4 = $_POST['4'];
        $choice5 = $_POST['5'];
        if( ($choice1 == $choice2) || ($choice2 == $choice3) || ($choice3 == $choice4) || ($choice4 == $choice5) || ($choice2 == $choice4) || ($choice2 == $choice5) 
                || ($choice1 == $choice3) || ($choice1 == $choice4) || ($choice1 == $choice5)  || ($choice3 == $choice5) )
        {
            
        
            echo "<h2>OOPS!!! Atleast Two of your choices are Same<br>";
            echo "Click to go to the <a href='evenchoicefillingform.php'>Choice Filling </a>page";
            echo "</h2>";
        }
        else
        {
        try 
        {
            $sql = "Insert into facultychoice values('$facid','$choice1','$choice2','$choice3','$choice4','$choice5','$facname')";
            $query = $dbhandler->query($sql);
            
            $sql1 = "Select  choice1,choice2,choice3,choice4,choice5 from facultychoice where FacultyId='$facid'";
            $query = $dbhandler->query($sql1);
            $r = $query->fetch(PDO::FETCH_ASSOC);
            ?>

<font size="9" color="ochre"><b><i>Your Selected Choices</i></b></font>

    <table border="1">
        <tr>
            <td><font size="6"><b><i><h2>Priority</h2></i></b></font></td>
            <td><font size="6"><b><i><h2>Selected Subject Short Name</h2></i></b></font></td>
        </tr>
        <tr>
            <td><center><h3>1</h3></center></td>
    <td><h3><?php echo $r['choice1'] ?></h3></td>
        </tr>
        <tr>
            <td><center><h3>2</h3></center></td>
    <td><h3><?php echo $r['choice2'] ?></h3></td>
        </tr>
        <tr>
           <td><center><h3>3</h3></center></td>
    <td><h3><?php echo $r['choice3'] ?></h3></td>
        </tr>
        <tr>
           <td><center><h3>4</h3></center></td>
    <td><h3><?php echo $r['choice4'] ?></h3></td>
        </tr>
        <tr>
           <td><center><h3>5</h3></center></td>
    <td><h3><?php echo $r['choice5'] ?></h3></td>
        </tr>
    </table>

        <?php    
        } catch (Exception $ex) {
            echo $ex->getMessage();
            die();
        }
        }
        
    }
    else
    {
        header('location:login.php?msg=1');
    }


?>
</html>
