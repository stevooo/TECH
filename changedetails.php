<?
    session_start();
    
    if(!isset($_SESSION["email"])){
        echo ('<script type="text/javascript">alert ("You are not logged in please login to manage your account.");
			window.location = "http://users.aber.ac.uk/stm26/TECH/";</script>');
    }
    $email = $_SESSION["email"];
    include 'phpscript/manageaccountconnection.php';
    $ID=$checkid;
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - Change Details</title>
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <link rel="stylesheet" href="StyleSheet.css">
        <script src="formvalidation.js"></script>
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
                <h1 class="title">Change Details</h1>
               
                <br>
                <br>
                <p>After changing any details please click the save changes button at the bottom.</p>
                <h2>Account Details</h2>   
                <form method="post" action="phpscript/updatedetails.php?checkid=<?php echo $ID; ?>" name="changedetails">
                 
                    <p class="form">First Name:* <input type="text" name="firstname" class="rounded" value="<?php echo $firstname; ?>" required></p>
                    <p class="form">Last Name:* <input type="text" name="lastname" class="rounded" value="<?php echo $lastname; ?>" required></p>
                    <p class="form">Email:* <input type="text" name="email" class="rounded" value="<?php echo $email; ?>" required></p>
                    <p class="form">Password:* <input type="password" name="password" class="rounded" value="" required></p>
                <p class="note">(Please use more than 6 characters)</p>
                <p class="form">Confirm Password:* <input type="password" name="confirmpassword" class="rounded" required></p>
                <p class="form">Country: <input type="text" name="country" class="rounded" value="<?php echo $country; ?>" ></p>
                <br>
                <hr>
                <h2>Preferences</h2>
                <p class="check"><input type="checkbox" name="popular" value="True" <?php if($popular == 't'){ echo "checked='checked'";} ?>>Popular</p>
                <p class="check"><input type="checkbox" name="mobile/tablet" value="True" <?php if($mobiletablet == 't'){ echo "checked='checked'";} ?>>Mobile/Tablet</p> 
                <p class="check"><input type="checkbox" name="business" value="True" <?php if($business == 't'){ echo "checked='checked'";} ?>>Business</p>
                <br> 
                <p class="check"><input type="checkbox" name="hardware" value="True" <?php if($hardware == 't'){ echo "checked='checked'";} ?>>Hardware</p> 
                <p class="check"><input type="checkbox" name="software" value="True" <?php if($software == 't'){ echo "checked='checked'";} ?>>Software</p> 
                <p class="check"><input type="checkbox" name="wearables" value="True" <?php if($wearables == 't'){ echo "checked='checked'";}?>>Wearables</p>
                <br>
                <p class="check"><input type="checkbox" name="tvs" value="True" <?php if($tvs == 't'){ echo "checked='checked'";}?>>TVs</p> 
                <p class="check"><input type="checkbox" name="gaming" value="True" <?php if($gaming == 't'){ echo "checked='checked'";} ?>>Gaming</p> 
                <p class="check"><input type="checkbox" name="socialmedia" value="True" <?php if($socialmedia == 't'){ echo "checked='checked'";} ?>>Social Media</p>
                <br>
                <br>
                <hr>
                <br>
                <input type="submit" value="Save Changes" class="submit">
                </form>
                <script type="text/javascript">
                    <!--
                                new validate(document.forms['register']);
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