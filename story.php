<?
    session_start();
    $id = $_GET["storyID"] ;
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <link rel="stylesheet" href="StyleSheet.css">
        <script type="text/javascript">
        var __st_loadLate=true; //if __st_loadLate is defined then the widget will not load on domcontent ready
        </script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "e0a4f5b7-2a73-44d4-8bd2-9f2f86d25f43",popop: 'true', doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script src="formvalidation.js"></script>
    </head>

    <body>
        <header>
            <?php
                include 'nav.php';
            ?>
        </header>

        <section class="content">
            <section class="about">
            <?php
                include 'phpscript/storycontent.php';
            ?>
                <br><br><br>
                <h2>Comments</h2>
            </section>
            
            <section class="comments">
            <?php
                include 'phpscript/storycomments.php';
            ?>    
             <script type="text/javascript">
                    <!--
                                new commentvalidate(document.forms['comment']);
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