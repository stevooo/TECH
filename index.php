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

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.simplyscroll.js"></script>
        <link rel="stylesheet" href="jquery.simplyscroll.css" media="all" type="text/css">
        <script type="text/javascript">
            (function($) {
                $(function() { //on DOM ready
                    $("#scroller").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                    $("#scroller2").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                    $("#scroller3").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                    $("#scroller4").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                    $("#scroller5").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                    $("#scroller6").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                    $("#scroller7").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                    $("#scroller8").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                    $("#scroller9").simplyScroll({
                        auto: false,
                        speed: 10
                    });
                });
            })(jQuery);

            //var __st_loadLate = true; //if __st_loadLate is defined then the widget will not load on domeady
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
            <br>
            
            <!-- Facebook -->
            
            <a href="http://www.facebook.com/sharer.php?u=http://users.aber.ac.uk/stm26/TECH/index.php" target="_blank"><img class="share-buttons" id="share" src="img/facebook.png" alt="Facebook" /></a>
           
            <!-- Twitter -->
            <a href="http://twitter.com/share?url=http://users.aber.ac.uk/stm26/TECH/index.php&text=TECH - The website for technology news&hashtags=TECH" target="_blank"><img class="share-buttons" id="share" src="img/twitter.png" alt="Twitter" /></a>
            
            <!-- Google+ -->
            <a href="https://plus.google.com/share?url=http://users.aber.ac.uk/stm26/TECH/index.php" target="_blank"><img class="share-buttons" id="share" src="img/google.png" alt="Google" /></a>
            
            <?php
            if (!isset($_SESSION['email'])) {
                echo" <h1 class='title'>Welcome to Tech the No.1 website for all technology news.</h1>";
            }
            ?>
            <br>
            <?php
            if (isset($_SESSION['email'])) {
                echo"<h1 class='title'>" . $_SESSION['firstname'] . "'s Technology News Homepage</h1>";
                include 'phpscript/personalisedhomepage.php';
            } else {
                echo"<h1 class='recent'>Recent News</h1>";
                include 'phpscript/mainpagestories.php';

                echo"<br><br><a href='categorypage.php?category={mobileTablet}&name=Mobile/Tablet'><h1 class='recent'>Mobile\Tablet</h1></a>";
                echo "<ul id='scroller'>";
                include 'phpscript/mainpagemobile-tablet.php';
                echo "</ul>";

                echo"<br><a href='categorypage.php?category={business}&name=Business'><h1 class='recent'>Business</h1></a>";
                echo "<ul id='scroller2'>";
                include 'phpscript/mainpagebusiness.php';
                echo "</ul>";

                echo"<br><a href='categorypage.php?category={gaming}&name=Hardware'><h1 class='recent'>Gaming</h1></a>";
                echo "<ul id='scroller3'>";
                include 'phpscript/mainpagegaming.php';
                echo "</ul><br><br>";
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