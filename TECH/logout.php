<?php
session_start();
include 'phpscript/dbconnection.php';
session_destroy();
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - Logout</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <link rel="stylesheet" href="StyleSheet.css">

        <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <header>
            <?php
            include 'nav.php';
            ?>
        </header>
        <section class="content">
            <section class="about">
                <h1 class="title">Logout</h1>
                <br>
                <br>
                <p>You have successfully logged out of your TECH account. If this was a mistake please log back in <a href="login.php" class="normal_link">here</a>.</p>
                <script type="text/javascript">
                    function Redirect()
                    {
                        window.location = "http://users.aber.ac.uk/stm26/TECH/index.php";
                    }

                    setTimeout('Redirect()', 30000);
                </script>  
            </section>
        </section>
        <footer>
            <h2>Website by Stephen McFarlane 2014.</h2>
            <p>The information provided on this and other pages by me, Stephen Mcfarlane (stm26@aber.ac.uk), is under my 
                own personal responsibility and not that of Aberystwyth University. Similarly, any opinions expressed are 
                my own and are in no way to be taken as those of A.U.</p>
        </footer>
    </body>

</html>