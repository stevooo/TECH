<?php
session_start();
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
                <p>
                    TECH is a website created to be the center of technology news online as all of the stories on TECH are
                    from reputable sources such as BBC News Technology, Tech Radar and others. The reason behind the creation
                    of TECH is to house the most recent and interesting technology news, so you don't have to go through multiple
                    websites to read up about technology.
                </p>

                <p>
                    TECH was created by Stephen McFarlane as his final year project for his Internet programming and service
                    administration course at Aberystwyth University. It was created because of his fascination with technology
                    and so it was easier to read about it.
                </p>

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