<?
session_start();
$page = $_GET["name"]
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - Popular</title>
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
            <h1 class="title">Popular</h1>
            <?php
  
                $categoryconn = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
                $categorysql = "SELECT DISTINCT * FROM stories ORDER BY views DESC LIMIT 20";
                $categoryres = pg_query($categoryconn, $categorysql);

                while ($d = pg_fetch_array($categoryres)) {

                    echo "<section class='categorystorylink'>";
                    $image = str_replace("{", "", $d['image']);
                    $image2 = str_replace("}", "", $image);
                    $headline = str_replace('{"', "", $d['headline']);
                    $headline2 = str_replace('"}', "", $headline);
                    $headline3 = str_replace("\u2019", '&#8217', $headline2);
                    $headline4 = str_replace("’", '&rsquo;', $headline3);

                    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>
          <img class='cstoryimg' id='".$d['storyid']."' src='".$image2."'/></a>";
                    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>".$headline4."</a></h2>";
                    echo "</section>";
                }
            
            ?>
            <p></p>


        </section>
        <footer>
            <h2>Website by Stephen McFarlane 2014.</h2>
            <p>The information provided on this and other pages by me, Stephen Mcfarlane (stm26@aber.ac.uk), is under my 
                own personal responsibility and not that of Aberystwyth University. Similarly, any opinions expressed are 
                my own and are in no way to be taken as those of A.U.</p>
        </footer>
    </body>
</html>