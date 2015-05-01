<?php
session_start();
include 'phpscript/dbconnection.php';
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - Login</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <link rel="stylesheet" href="StyleSheet.css">

        <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script src="formvalidation.js"></script>
    </head>

    <body>
        <header>
            <?php
                include 'nav.php';
                $emailinvalid = False;
                if(isset($_GET["emailinvalid"])){
                    $emailinvalid = True; 
                }
                $passwordchanged = False;
                if(isset($_GET["passwordchanged"])){
                    $passwordchanged = True; 
                }
            ?>
        </header>
        <section class="content">
            <section class="about">
                <h1 class="title">Forgot Password</h1>
                <br>
                <br>
                <p>To reset your password please enter the email you signed up with in the box below, your new password will be sent by email.</p>
                
                <form name="forgotpassword" method="post" action="phpscript/checkemail.php">
                    <p class="form">Email: <input name="email" type="text" class="rounded" id="email"></p>
                    <?php if($emailinvalid == True){
                        echo "<p class='note'>Email does not link to nay TECH account</p>";
                        echo "<p>Don't have a TECH account? then <a href='signup.php' class='normal_link'>Sign-up</a></p>";
                    }
                    if($passwordchanged == True){
                        echo "<p>Your password has been changed please check your emails for a temporary password.</p>";
                    }
                    ?>
                    
                    <input type="submit" name="Submit" value="Submit" class="submit">
                </form>
                <script type="text/javascript">
                    <!--
                                new checkemail(document.forms['forgotpassword']);
                    -->
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