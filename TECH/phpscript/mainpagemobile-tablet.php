<?php
$sqlmt = "SELECT * FROM stories where category ='{mobileTablet}' ORDER BY datepublished DESC LIMIT 8";
$resmt = pg_query($conn,$sqlmt);

while($m = pg_fetch_array($resmt)){
    
    echo "<li><section class='categorystorylink2'>";
        $image = str_replace("{","",$m['image']);
	$image2 = str_replace("}","",$image);
	$headline = str_replace('{"',"",$m['headline']);
	$headline2 = str_replace('"}',"",$headline);
        $headline3 = str_replace("\u2019",'&#8217', $headline2);
        $headline4 = str_replace("’",'&rsquo;', $headline3);
        $headline5 = str_replace("�",'&nbsp;', $headline4);
        $headline6 = str_replace('‘', "&#8216;", $headline5);
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$m['storyid']."'>
          <img class='cstoryimg' id='".$m['storyid']."' src='".$image2."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$m['storyid']."'>".$headline6."</a></h2>";
    echo "</section></li>";
}

?>