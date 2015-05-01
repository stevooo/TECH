<?
session_start();
include 'phpscript/dbconnection.php';
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - Recent</title>
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
            <h1 class="title">Recent</h1>
             <?php
            global $limit;
            $limit = 20;
            $category = $_GET["category"];
            if (isset($_GET["limit"])) {

                $limit = $_GET["limit"] * 2;
            }
            $categoryconn = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
            $categorysql = "SELECT * FROM stories ORDER BY datepublished DESC LIMIT $limit";
            $categoryres = pg_query($categoryconn, $categorysql);

            while ($d = pg_fetch_array($categoryres)) {

                echo "<section class='categorystorylink'>";
                $image = str_replace("{", "", $d['image']);
                $image2 = str_replace("}", "", $image);
                $headline = str_replace('{"', "", $d['headline']);
                $headline2 = str_replace('"}', "", $headline);
                $headline3 = str_replace("\u2019", '&#8217', $headline2);
                $headline4 = str_replace("’", '&rsquo;', $headline3);
                $headline5 = str_replace("�", '&#32;', $headline4);
                $headline6 = str_replace('‘', "&#8216;", $headline5);

                echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=" . $d['storyid'] . "'>
          <img class='cstoryimg' id='" . $d['storyid'] . "' src='" . $image2 . "'/></a>";
                echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=" . $d['storyid'] . "'>" . $headline6 . "</a></h2>";
                echo "</section>";
            }
            ?>
            <p></p>
            <?php
          
                echo"<form method='post' action='http://users.aber.ac.uk/stm26/TECH/recent.php?limit=$limit' name='comment'>
                <p style='text-align: center'><input name='submit' type='submit' value='View more' class='submit'></p>
                </form>";
            
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