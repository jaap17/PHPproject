<?php

    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=phpproject','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    try
    {
        if(isset($_POST['uname']) && isset($_POST['pass']))
        {
            $username = $_POST['uname'];
            $password = $_POST['pass'];
            if($username == 'F001' && $password='F001' )
            {
                session_start();
                $_SESSION['hod']=$username; 
                header('location:hodhomepage.php');
            }
            else
            {
            $query = $dbhandler->prepare('select MemberName from DeptMembers where Username=? and Password=?');
     
            $query->execute(array($username,$password));
            $count = $query->rowcount();
			if($count > 0)
			{
                            session_start();
                            $_SESSION['faculty'] = $username;
                            header('location:facultyhomepage.php');
                        }
			else
			{
                            ?>
                                <html>
                                <head>
        
                                    <link href="test.css" rel="stylesheet">
                                 </head>
                                 <body>
   
                                <center>
                                <br><br>
                                <center><font size="20" color="cyan"><marquee scrollamount="8">Course Allocation System</marquee></font> </center> <hr> 
                                
				<?php echo "<h3>Invalid Username/Password</h3>";
                                       echo "<br>";
                                       
                                ?>
                                <h1> Click Here to <a href="login.php">Login</a> Again </h1>
                                </body>
                                </html>
			<?php
                        
                        }	
            }
        }
        else
			{
				echo "Something went wrong...";
			}
        
    }catch(PDOException $e)
    {
        echo $e->getMessage();
        die();
    }
   
?>

