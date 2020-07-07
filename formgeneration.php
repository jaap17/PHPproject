<?php

    include 'base.php';
    session_start();
    if(isset($_SESSION['hod']))
    {
        ?>
            <html>
                <head>
                    <link href="test.css" rel="stylesheet">
                </head>
                <body>
                <center>
                    <form action="choicefillingform.php" method="POST">
                        <input type="submit" value="ODD" name="odd">
                    </form>
                    <form action="choicefillingform.php" method="POST">
                        <input type="submit" value="EVEN" name="even">
                    </form>
                </body>
            </center>
            </html>
    <?php }
    else
    {
        
        header('location:login.php?msg=1');
    }
?>