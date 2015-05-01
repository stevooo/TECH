<?php

$sql = "SELECT * FROM stories ORDER BY datepublished DESC LIMIT 3";
$res = pg_query($conn,$sql);


while($a = pg_fetch_array($res)){
    
    echo "<section class='storyLink'>";
	$image = str_replace("{","",$a['image']);
	$image2 = str_replace("}","",$image);
	$headline = str_replace('{"',"",$a['headline']);
	$headline2 = str_replace('"}',"",$headline);
        $headline3 = str_replace("\u2019",'&#8217', $headline2);
        $headline4 = str_replace("’",'&rsquo;', $headline3);
        $headline5 = str_replace("�",'&nbsp;', $headline4);
        $headline6 = str_replace('‘', "&#8216;", $headline5);
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."'>
          <img class='storyimg' id='".$a['storyid']."' src='".$image2."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."'>".$headline6."</a></h2>";
    echo "</section>";
}
?>