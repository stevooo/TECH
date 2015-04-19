<?php
session_start();
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - Login</title>
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
                <h1 class="title">Login</h1>
                <br>
                <br>
                <p>To login please enter your email and password into the fields below and click the login button.</p>
                <p>Don't have a TECH account? then <a href="signup.php" class="normal_link">Sign-up</a></p>
                <form name="login" method="post" action="./login.php">
                    <p class="form">Email: <input name="email" type="text" class="rounded" id="email"></p>
                    <p class="form">Password: <input name="password" type="password" class="rounded" id="password"></p>
                    <p>Forgotten your password? <a href="forgotpassword.php" class="normal_link">Reset password</a></p>
                    <?php 
                    include 'phpscript/checklogin.php';
                    ?>
                    <input type="submit" name="Submit" value="Login" class="submit">
                </form>
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