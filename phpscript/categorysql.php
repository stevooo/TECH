<?php
if(isset($_GET["category"])){
$category = $_GET["category"] ;


$categoryconn = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
$categorysql = "SELECT * FROM stories WHERE category ='$category' OR category2 ='$category' ORDER BY datepublished DESC";
$categoryres = pg_query($categoryconn,$categorysql);

while($d = pg_fetch_array($categoryres)){
    
    echo "<section class='categorystorylink'>";
	$image = str_replace("{","",$d['image']);
	$image2 = str_replace("}","",$image);
	$headline = str_replace('{"',"",$d['headline']);
	$headline2 = str_replace('"}',"",$headline);
        $headline3 = str_replace("\u2019",'&#8217', $headline2);
        $headline4 = str_replace("’",'&rsquo;', $headline3);
			
    echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>
          <img class='cstoryimg' id='".$d['storyid']."' src='".$image2."'/></a>";
    echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>".$headline4."</a></h2>";
    echo "</section>";
}
}
else{
    header("Location: http://users.aber.ac.uk/stm26/TECH/index"); }
?>