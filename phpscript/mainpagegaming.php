<?php
$sqlmt = "SELECT * FROM stories where category ='{hardware}' ORDER BY datepublished DESC LIMIT 8";
$resmt = pg_query($conn,$sqlmt);

while($g = pg_fetch_array($resmt)){
    
    echo "<li><section class='categorystorylink2'>";
        $image = str_replace("{","",$g['image']);
	$image2 = str_replace("}","",$image);
	$headline = str_replace('{"',"",$g['headline']);
	$headline2 = str_replace('"}',"",$headline);
        $headline3 = str_replace("\u2019",'&#8217', $headline2);
        $headline4 = str_replace("’",'&rsquo;', $headline3);
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$g['storyid']."'>
          <img class='cstoryimg' id='".$g['storyid']."' src='".$image2."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$g['storyid']."'>".$headline4."</a></h2>";
    echo "</section></li>";
   
}

?>