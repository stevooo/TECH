<?
session_start();
include 'phpscript/dbconnection.php';
$page = $_GET["name"];
$cat = $_GET[category];
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - <?php echo $page; ?></title>
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
            <h1 class="title"><?php echo $page; ?></h1>
            <?php
            include 'phpscript/categorysql.php';

            echo"<form method='post' action='http://users.aber.ac.uk/stm26/TECH/categorypage.php?category=$cat&name=$page&limit=$limit' name='comment'>
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