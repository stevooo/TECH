<?php
$sqlmt = "SELECT * FROM stories where category ='{business}' ORDER BY datepublished DESC LIMIT 8";
$resmt = pg_query($conn,$sqlmt);

while($t = pg_fetch_array($resmt)){
    
    echo "<li><section class='categorystorylink2'>";
        $image = str_replace("{","",$t['image']);
	$image2 = str_replace("}","",$image);
	$headline = str_replace('{"',"",$t['headline']);
	$headline2 = str_replace('"}',"",$headline);
        $headline3 = str_replace("\u2019",'&#8217', $headline2);
        $headline4 = str_replace("â€™",'&rsquo;', $headline3);
        $headline5 = str_replace("Â",'&nbsp;', $headline4);
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$t['storyid']."'>
          <img class='cstoryimg' id='".$t['storyid']."' src='".$image2."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$t['storyid']."'>".$headline5."</a></h2>";
    echo "</section></li>";
}

?>