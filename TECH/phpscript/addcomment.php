<?php
session_start();
include 'dbconnection.php';

if(isset($_SESSION['email'])){
        $email = $_SESSION['email'];
    }

$usersql = "SELECT userid from users where email='$email'";
$userres2 = pg_query($conn,$usersql);
while($g = pg_fetch_array($userres2)){
    $userid = $g['userid'];
}
if ($_POST){
    
    $comment = $_POST['comment'];
    $comment2 = pg_escape_string($comment);
    $id = $_GET["storyID"] ;
    $id2 = pg_escape_string($id);
    $comquery = "INSERT INTO comments (storyid,userid,commentcontent) 
              VALUES ('$id2','$userid','$comment2')";
    $commentresult = pg_query($conn,$comquery);
    header("Location: http://users.aber.ac.uk/stm26/TECH/");
}

?>