<?php

$sql2 = "SELECT * FROM comments, users  WHERE comments.userid = users.userid AND comments.storyid='$id' ORDER BY commentdate DESC";
$res2 = pg_query($conn,$sql2);
//$usersql = "SELECT * FROM users WHERE userid ='".$a2['userid']."'";
//$userres = pg_query($conn,$usersql);

if(isset($_SESSION['email'])){
        echo "<form method='post' action='addcomment.php?storyID=".$id."' name='comment'>
    <p class='comment'>Write your comment here: </p>
    <textarea name='comment' id='comment' class='commentform' placeholder='max 1000 characters'></textarea>
    <input name='submit' type='submit' value='Post' class='submitcomment'> <hr>";
    }
    else{
    echo "<br><p class='comment'>To write a comment for this story you need to be logged in, please login 
        <a href='login.php' class='normal_link'>here</a>. If you dont have a TECH account please <a href='signup.php' class='normal_link'>Sign-up</a></p><hr>";
    }


while($a2 = pg_fetch_array($res2)){
    echo "<h3 class='comment'> ".$a2['firstname']." ".$a2['lastname']." - ".$a2['commentdate']."</h3>";
    echo "<p class='comment'> ".$a2['commentcontent']."</p>";
    echo "<hr>";
    
   
}

?>