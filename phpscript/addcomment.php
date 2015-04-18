<?php
session_start();
if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }
$conn = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
$usersql = "SELECT userid from users where email='$email'";
$userres2 = pg_query($conn,$usersql);
while($g = pg_fetch_array($userres2)){
    $userid = $g['userid'];
}
if ($_POST){
    
    $comment = $_POST['comment'];
    $id = $_GET["storyID"] ;
    $comquery = "INSERT INTO comments (storyid,userid,commentcontent) 
              VALUES ('$id','$userid','$comment')";
    $commentresult = pg_query($conn,$comquery);
    header("Location: http://users.aber.ac.uk/stm26/TECH/");
}

?>