<?php
$sqlmt = "SELECT * FROM stories where category ='gaming' LIMIT 4";
$resmt = pg_query($conn,$sqlmt);

while($t = pg_fetch_array($resmt)){
    
    echo "<section class='categorystorylink'>";
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$t['storyid']."'>
          <img class='cstoryimg' id='".$t['storyid']."' src='".$t['image']."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$t['storyid']."'>".$t['headline']."</a></h2>";
    echo "</section>";
}

?>