<?php


?>
<html>
    <head>
        
         <link href="test.css" rel="stylesheet">
    </head>
    <body>
   
    <center>
        <br><br>
        <center><font size="20" color="cyan"><marquee scrollamount="8">Course Allocation System</marquee></font> </center> <hr> 
        <h1><font size="50" color="white"><b><i> Login Page</marquee></i></b> </font></h1>
        
            <?php
                    if($_GET)
                    {
                       $msg = $_REQUEST['msg'];
                       if($msg == 1)
                       {
                           echo "<h1>Please Login to access Your homepage</h1>";
                       }
                    }
                 ?>
           <form action="pstmt.php" method="POST">
                 <br><br>
                 
                 <h2>Username  <input type="text" name="uname"><br><br><br><br>
                     Password  <input type="password" name="pass"><br><br><br><br>
                     <input type="submit" value="submit" name="submit"></h2>
        </form>
    </center>
    
    </body>
</html>
