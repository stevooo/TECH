<?
session_start();
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - Sign-up</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <link rel="stylesheet" href="StyleSheet.css">

        <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <script src="formvalidation.js"></script>
    </head>

    <body>
        <header>
            <?php
            $emailinvalid = False;
            if(isset($_GET["emailinvalid"])){
               $emailinvalid = True; 
            }
            include 'nav.php';
            ?>
        </header>
        <section class="content">
            <section class="about">
                <h1 class="title">Sign-Up</h1>
                <br>
                <br>

                <h2>Details</h2>
                <p class="note">*Please fill in all details marked</p>
                <section class="info">
                    <h3><u>Why create a Tech account</u></h3>
                    <p class="indent"><u>Personalised TECH Homepage</u></p>
                    <p class="indent">The preferences you set on this page will change the Tech homepage when you are logged in, so it only shows the stories that fall 
                        under your preferences.</p>
                    <p class="indent"><u>Share Your Opinion</u></p>
                    <p class="indent">By creating a TECH account you will be able to comment on stories so you can share your view with other TECH users.</p>
                </section>
                
                <form method="post" action="phpscript/validation.php" name="register">
                    <p class="form">First Name:* <input type="text" name="firstname" class="rounded" required></p>
                    
                    <p class="form">Last Name:* <input type="text" name="lastname" class="rounded" required></p>
                    
                    <p class="form">Email:* <input type="email" name="email" class="rounded" required placeholder="e.g. johndoe@email.co.uk"></p>
                    <?php if($emailinvalid == True){
                        echo "<p class='note'>Email address already linked to a TECH account.</p>";
                    }
                    ?>
                    
                    <p class="form">Password:* <input type="password" name="password" class="rounded" required> </p>
                   
                    <p class="note">(Please use more than 6 characters)</p>
                    <p class="form">Confirm Password:* <input type="password" name="confirmpassword" class="rounded" required></p>

                    <p class="form">Country: <input type="text" name="country" class="rounded"></p>


                    <br>
                    <hr>
                    <h2>Preferences</h2><p>(Can be set or changed later in the manage account page.)</p>
                    <p class="check"><input class="check2" type="checkbox" name="popular" value="True" checked="checked">Popular</p>
                    <p class="check"><input class="check2" type="checkbox" name="mobile/tablet" value="True">Mobile/Tablet</p> 
                    <p class="check"><input class="check2" type="checkbox" name="business" value="True">Business</p>
                    <br> 
                    <p class="check"><input class="check2" type="checkbox" name="hardware" value="True">Hardware</p> 
                    <p class="check"><input class="check2" type="checkbox" name="software" value="True">Software</p> 
                    <p class="check"><input class="check2" type="checkbox" name="wearables" value="True">Wearables</p>
                    <br>
                    <p class="check"><input class="check2" type="checkbox" name="tvs" value="True">TVs</p> 
                    <p class="check"><input class="check2" type="checkbox" name="gaming" value="True">Gaming</p> 
                    <p class="check"><input class="check2" type="checkbox" name="socialmedia" value="True">Social Media</p>
                    <br>
                    <br>
                    <hr>
                    <br>
                    
                    <input name="submit" type="submit" value="Sign up" class="submit">
                </form>
                <script type="text/javascript">
                    <!--
                                new validate(document.forms['register']);
                    -->
                </script>
                <br>
                <br>
                <br>
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