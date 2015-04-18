<?php
$conn = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
$sql = "SELECT * FROM stories ORDER BY datepublished DESC LIMIT 3";
$res = pg_query($conn,$sql);


while($a = pg_fetch_array($res)){
    
    echo "<section class='storyLink'>";
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."'>
          <img class='storyimg' id='".$a['storyid']."' src='".$a['image']."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."'>".$a['headline']."</a></h2>";
    echo "</section>";
}
?>