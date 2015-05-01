<?
session_start();
include 'phpscript/dbconnection.php';
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">

        <title>TECH - The home of technology news</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

        <link rel="stylesheet" href="StyleSheet.css">
        <link rel="stylesheet" href="simplyscroll/jquery.simplyscroll.css" media="all" type="text/css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
        <script type="text/javascript" src="simplyscroll/jquery.simplyscroll.js"></script>
       
        <script type="text/javascript">
            (function($) {
                $(function() { //launches the scrollers for main page and personalised page
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
            <a href="http://twitter.com/share?url=http://users.aber.ac.uk/stm26/TECH/index.php&text=TECH - The home of technology news&hashtags=TECH" target="_blank"><img class="share-buttons" id="share" src="img/twitter.png" alt="Twitter" /></a>
            
            <!-- Google+ -->
            <a href="https://plus.google.com/share?url=http://users.aber.ac.uk/stm26/TECH/index.php" target="_blank"><img class="share-buttons" id="share" src="img/google.png" alt="Google" /></a>
            
            <?php
            if (!isset($_SESSION['email'])) {
                echo" <h1 class='title'>Welcome to Tech the home of technology news.</h1>";//changes title of page if you are logged in
            }
            ?>
            <br>
            <?php
            if (isset($_SESSION['email'])) {
                echo"<h1 class='title'>" . $_SESSION['firstname'] . "'s Technology News Homepage</h1>";
                include 'phpscript/personalisedhomepage.php';
            } else {
                echo"<a href='recent.php'><h1 class='recent'>Recent News</h1></a>";
                include 'phpscript/mainpagestories.php';

                echo"<br><br><a href='categorypage.php?category={mobileTablet}&name=Mobile/Tablet'><h1 class='recent'>Mobile\Tablet</h1></a>";
                echo "<ul id='scroller'>";
                include 'phpscript/mainpagemobile-tablet.php';
                echo "</ul>";

                echo"<br><br><a href='categorypage.php?category={business}&name=Business'><h1 class='recent'>Business</h1></a>";
                echo "<ul id='scroller2'>";
                include 'phpscript/mainpagebusiness.php';
                echo "</ul>";

                echo"<br><br><a href='categorypage.php?category={gaming}&name=Gaming'><h1 class='recent'>Gaming</h1></a>";
                echo "<ul id='scroller3'>";
                include 'phpscript/mainpagegaming.php';
                echo "</ul><br><br>";
                //lauches the maing page or persoanlised page if you are logged in
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