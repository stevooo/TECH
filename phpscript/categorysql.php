<?php

$category = $_GET["category"] ;
$categoryconn = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
$categorysql = "SELECT * FROM stories WHERE category ='$category' OR category2 ='$category' ORDER BY datepublished DESC";
$categoryres = pg_query($categoryconn,$categorysql);

while($d = pg_fetch_array($categoryres)){
    
    echo "<section class='categorystorylink'>";
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>
          <img class='cstoryimg' id='".$d['storyid']."' src='".$d['image']."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>".$d['headline']."</a></h2>";
    echo "</section>";
}
?>