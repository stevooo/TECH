<?
    session_start();
    $email = $_SESSION["email"];
    include 'phpscript/manageaccountconnection.php';
?>
<!doctype html>

<html lang="en">

    <head>
        <link rel="shortcut icon" href="img/favicon.ico">
        <title>TECH - Manage Account</title>
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
                <h1 class="title">Manage Account</h1>
               
                <br>
                <br>
                <p>To change any details of preferences please click the change details button at the bottom.</p>
                <h2>Account Details</h2>                     
                <h3 class="form">First Name:</h3><p class="form"> <?php echo $firstname; ?></p>
                <h3 class="form">Last Name:</h3> <p class="form"><?php echo $lastname; ?></p>
                <h3 class="form">Email:</h3> <p class="form"><?php echo $email; ?></p>
                <h3 class="form">Password:</h3> <p class="form"><?php echo '******'; ?></p>
                <h3 class="form">Country:</h3> <p class="form"><?php echo $country; ?></p>
                <h3 class="form">Date Joined:</h3> <p class="form"><?php echo $datejoined; ?></p>
                <br>
                <hr>
                
                <h2>Preferences</h2>
                <p class="check"><input type="checkbox" name="preferences" value="popular" <?php if($popular == 't'){ echo "checked='checked'";} ?>>Popular</p>
                <p class="check"><input type="checkbox" name="preferences" value="mobile/tablet" <?php if($mobiletablet == 't'){ echo "checked='checked'";} ?>>Mobile/Tablet</p> 
                <p class="check"><input type="checkbox" name="preferences" value="business" <?php if($business == 't'){ echo "checked='checked'";} ?>>Business</p>
                <br> 
                <p class="check"><input type="checkbox" name="preferences" value="hardware" <?php if($hardware == 't'){ echo "checked='checked'";} ?>>Hardware</p> 
                <p class="check"><input type="checkbox" name="preferences" value="software" <?php if($software == 't'){ echo "checked='checked'";} ?>>Software</p> 
                <p class="check"><input type="checkbox" name="preferences" value="wearables" <?php if($wearables == 't'){ echo "checked='checked'";}?>>Wearables</p>
                <br>
                <p class="check"><input type="checkbox" name="preferences" value="tvs" <?php if($tvs == 't'){ echo "checked='checked'";}?>>TVs</p> 
                <p class="check"><input type="checkbox" name="preferences" value="gaming" <?php if($gaming == 't'){ echo "checked='checked'";} ?>>Gaming</p> 
                <p class="check"><input type="checkbox" name="preferences" value="socialmedia" <?php if($socialmedia == 't'){ echo "checked='checked'";} ?>>Social Media</p>
                <br>
                <br>
                <hr>
                <br>
                <form action="./phpscript/changedetails.php">
                <input type="submit" value="Change Details" class="submit">
                </form>
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