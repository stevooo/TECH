<?
session_start();
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        
        <title>TECH - The home of technology news</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
         
        <link rel="stylesheet" href="StyleSheet.css">
        
        <script type="text/javascript">
            var __st_loadLate = true; //if __st_loadLate is defined then the widget will not load on domcontent ready
        </script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "e0a4f5b7-2a73-44d4-8bd2-9f2f86d25f43", popop: 'true', doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <header>
            <?php include 'nav.php'; ?>

        </header>

        <section class="content">
            <?php include 'phpscript/homesharebuttons.php'; ?>
            <h1 class="title">Welcome to Tech the No.1 website for all technology news.</h1>
            <br>
            <?php
            if (isset($_SESSION['email'])) {
                echo"<h1 class='recent'>Personalised Technology News Homepage</h1>";
                include 'phpscript/personalisedhomepage.php';
                
            } else {
                echo"<h1 class='recent'>Recent News</h1>";
               // $password = 'stephenmcf19';
              //  $salt = uniqid('',true);
             //   $algo = '6';
               // $rounds = '5042';
              //  $cryptSalt = '$'.$algo.'$rounds='.$rounds.'$'.$salt;
    
               // $hashedPassword = crypt($password, $cryptSalt);
              //  echo "<hr>$password<hr>$algo<hr>$rounds<hr>$cryptSalt<hr>$hashedPassword";
                include 'phpscript/mainpagestories.php';
                echo"<a href='categories/mobile-tablet.php?category=mobileTablet'><h1 class='recent'>Mobile\Tablet</h1></a>";
                include 'phpscript/mainpagemobile-tablet.php';
                echo"<a href='categories/business.php?category=business'><h1 class='recent'>Business</h1></a>";
                include 'phpscript/mainpagebusiness.php';
                echo"<a href='categories/gaming.php?category=gaming'><h1 class='recent'>Gaming</h1></a>";
                include 'phpscript/mainpagegaming.php';
            }
            ?>
        </section>
        <footer>
            <h2>Website by Stephen McFarlane 2014.</h2>
            <p>The information provided on this and other pages by me, Stephen Mcfarlane (stm26@aber.ac.uk), is under my 
                own personal responsibility and not that of Aberystwyth University. Similarly, any opinions expressed are 
                my own and are in no way to be taken as those of A.U.</p>
        </footer>
    </body>
</html>