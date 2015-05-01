<?php
session_start();
include 'phpscript/dbconnection.php';
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - About</title>
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
                <h1 class="title">About</h1>
                <br>
                <br>
                <img id="profilepicture" class="pro-pic" src="img/me1.jpg" alt="stephen mcfarlane" />
                <p>TECH is a technology news website created to be a one stop website for all technology news, the stories on TECH are from other news websites such as BBC News technology, Skynews, Techradar and others.
                    The purpose of this website is so you don't have to view multiple websites to find interesting technology news.t 
                    A benefit of TECH is you can create an account to build your own personal technology news home page by setting preferences on what type of technology you like to read.</p> 
                <p>    To create your own technology news homepage please <a href="signup.php" class="normal_link">Sign-up</a> for a TECH account.
                </p>
                <p>

                </p>

                <p>
                    TECH was created by Stephen McFarlane (picture on the right) as his final year web-based project for his Internet programming and service administration course at Aberystwyth University.
                    It was created because of his intrest of reading about technology and he liked the idea of having stories from multiple websites in one place so you didn't spend time digging through websites to find interesting technology news. 
                    To follow Stephen McFarlane on social media please click one of the social media icons below.
                </p>
                <!-- Facebook -->

                <a href="https://www.facebook.com/stephen.mcfarlane.3701" target="_blank"><img class="share-buttons" id="share" src="img/facebook.png" alt="Facebook" /></a>

                <!-- Twitter -->
                <a href="https://twitter.com/stevemcf19" target="_blank"><img class="share-buttons" id="share" src="img/twitter.png" alt="Twitter" /></a>

                <!-- Google+ -->
                <a href="https://plus.google.com/u/0/115791588967615154424/posts" target="_blank"><img class="share-buttons" id="share" src="img/google.png" alt="Google" /></a>
                <p>For any other information email me at: stm26@aber.ac.uk</p>

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