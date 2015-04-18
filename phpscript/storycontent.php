<?php
$conn = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
$sql = "SELECT * FROM stories WHERE storyid ='$id'";
$res = pg_query($conn,$sql);

while($a = pg_fetch_array($res)){
echo "<h1 class='title'>".$a['headline']."</h1>";
echo "<h3>".$a['author']."</h3><hr><br>";
echo "<img class='storypageimg' id='".$a['storyid']."' src='".$a['image']."' align='left'/>";
$content = $a['content'];

str_replace('£', utf8_decode('£'), $content);
echo "<p class='storycontent'>".$content."</p>";
echo "<h3>Added: ".$a['datepublished']."</h3>";
echo "<br><br><h3>Share this story: </h3>";
echo "<br><span class='st_facebook_large' st_title='".$a['headline']."' st_url='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."' displayText='Facebook'></span>
              <span class='st_twitter_large' st_title='".$a['headline']."' st_url='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."' displayText='Tweet'></span>
              <span class='st_googleplus_large' st_title='".$a['headline']."' st_url='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."' displayText='Google +'></span>";
}

?>