<?php
$sqlmt = "SELECT * FROM stories where category ='mobileTablet' LIMIT 8";
$resmt = pg_query($conn,$sqlmt);

while($t = pg_fetch_array($resmt)){
    
    echo "<li><section class='categorystorylink2'>";
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$t['storyid']."'>
          <img class='cstoryimg' id='".$t['storyid']."' src='".$t['image']."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$t['storyid']."'>".$t['headline']."</a></h2>";
    echo "</section></li>";
}

?>