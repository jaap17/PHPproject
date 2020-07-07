<html>
    <head>
        <link href="test.css" rel="stylesheet">
        <link href="test1.css" rel="stylesheet">
    </head>
<?php
        session_start();
       include 'base.php';
       if(isset($_SESSION['hod']))
       {
        try
        {
           
            $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $check = "Select * from facultychoice";
            $xyz = $dbhandler->query($check);
            $rcount = $xyz->rowCount();
            $abc = "Select * from selectedfaculties";
            $selfac = $dbhandler->query($abc);
            $count1 = $selfac->rowCount();
            if($rcount != $count1 && $count1 != 0)
            {
            ?>
             <html>
                <head>
                    <link href="test.css" rel="stylesheet">
                </head>
                <body>
                <center>
                    <h3>
                    <font size="7"><b><i> All the selected Faculties for the Choice Filling have not given the choices so the allocation cannot be done as Of Now. </i></b></font>
                    </h3> </body></center>
            </html>
        
            <?php
            }
            else
            {
                $sql = "Select CourseName,Value from SelectedCourses";
                $outer = $dbhandler->query($sql);
        //echo "<h2>";
                echo "<h2>Allocation Page</h2><br>";
            ?>
                <table border="1">
                    <tr>
                        <td><font size="7"><b><i> Course Name </i></b> </font></td>
                        <td><font size="7"><b><i> Your Allocation </i></b> </font></td>
                </tr>
                <?php 
                echo "<form action='finalallocation.php' method='POST'>";
                while($r = $outer->fetch(PDO::FETCH_ASSOC))
                {
                    echo "<tr>";
                    $cname = $r['CourseName'];
                    $value = $r['Value'];
                    echo "<td> <font size='7'><b><i> $cname </i></b></font> </td>";
                    echo "<td>";
                    $fire = "Select FacultyName,choice1,choice2,choice3,choice4,choice5 from facultychoice where choice1='$value' or choice2 = '$value' or choice3 = '$value' or choice4 = '$value' or choice5='$value' ";
                    $quote = $dbhandler->query($fire);
                    $count = $quote->rowCount();
                    if($count >= 1)
                    {
                        echo "<select name='$value'>";
                        while($name = $quote->fetch(PDO::FETCH_ASSOC))
                        {
               
                            $facname = $name['FacultyName'];
                            $choice1 = $name['choice1'];
                            $choice2 = $name['choice2'];
                            $choice3 = $name['choice3'];
                            $choice4 = $name['choice4'];
                            $choice5 = $name['choice5'];
                            if($choice1 == $value)
                            {
                                echo "<option value='$facname'>$facname(Priority1)</option>";
                            }
                            else if($choice2 == $value)
                            {
                                echo "<option value='$facname'>$facname(Priority2)</option>";
                            }
                            else if($choice3 == $value)
                            {
                                echo "<option value='$facname'>$facname(Priority3)</option>";
                            }
                            else if($choice4 == $value)
                            {
                                echo "<option value='$facname'>$facname(Priority4)</option>";
                            }
                            else if($choice5 == $value)
                            {
                                echo "<option value='$facname'>$facname(Priority5)</option>";
                            }
                
              
                        }   
                        echo "</select>";
                    }
                    else
                    {
                        $sql = "Select MemberName from SelectedFaculties";
                        $null = $dbhandler->query($sql);
                        echo "<select name='$value'>";
                        while($x = $null->fetch(PDO::FETCH_ASSOC))
                        {
                            $fname = $x['MemberName'];
                            echo "<option value='$fname'>$fname(Not Selected)</option>";
                        }
                        echo "</select>";
                    }
            
                    echo "</td>";
                    echo "</tr>";
                }
                echo "<tr>";
                echo "<td><input type='submit' value='SubmitAllocation'></td>";
                echo "</tr>";
                echo "</form>";
            }
            
            ?>
            </table>
            <?php
        } catch (Exception $ex)
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
</html>