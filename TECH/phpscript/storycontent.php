<?php


$sql = "SELECT * FROM stories WHERE storyid ='$id'";
$res = pg_query($conn, $sql);

while ($a = pg_fetch_array($res)) {
    global $views;
    $views = $a['views'];
    $views++;

    $headline = str_replace('{"', '', $a['headline']);
    $headline2 = str_replace('"}', '', $headline);
    $headline3 = str_replace("\u2019", '&#8217', $headline2);
    $headline4 = str_replace("’", '&rsquo;', $headline3);
    $headline5 = str_replace("�", '&nbsp;', $headline4);
    $headline6 = str_replace('‘', "&#8216;", $headline5);

    echo "<h1 class='title'>" . $headline6 . "</h1>";

    $author = str_replace('{', '', $a['author']);
    $author2 = str_replace('}', '', $author);
    $author3 = str_replace('"', '', $author2);
    echo "<h3>" . $author3 . "</h3><hr><br>";

    $image = str_replace('{', '', $a['image']);
    $image2 = str_replace('}', '', $image);
    echo "<img class='storypageimg' id='" . $a['storyid'] . "' src='" . $image2 . "' align='left'/>";
    $content = $a['content'];

    $content1 = str_replace('{"', '', $content);
    $content2 = str_replace('"}', '', $content1);
    $content3 = str_replace('</p>","', "</p>", $content2);
    $content4 = str_replace('\"', '"', $content3);
    $content5 = str_replace("<a ", '<a class="normal_link" target="_blank"', $content4);
    $content6 = str_replace("£", '&pound', $content5);
    $content7 = str_replace("\u2013", '&#8211;', $content6);
    $content8 = str_replace("\u2019", '&#8217;', $content7);
    $content9 = str_replace("\u00a3", '&#160;', $content8);
    $content10 = str_replace("\u2026", '&#8230;', $content9);
    $content11 = str_replace("’", '&rsquo;', $content10);
    $content12 = str_replace("…", '&#8230', $content11);
    $content13 = str_replace('",', "", $content12);
    $content14 = str_replace(',"', "", $content13);
    $content15 = str_replace('�', "&#32;", $content14);
    $content16 = str_replace('á', "&#225;", $content15);
    $content17 = str_replace('<img src="http://cdn0.beta.static.techradar.futurecdn.net/media/img/missing-image.svg"','<img src=""',$content16);
    $content18 = str_replace('“', "&#8220;", $content17);
    $content19 = str_replace('×', "&#215;", $content18);   
    $content20 = str_replace('‘', "&#8216;", $content19);
    $content21 = str_replace('—', "&#8211;", $content20);
    $content22 = str_replace('–', "&#8212;", $content21);
    $content23 = str_replace('�', "&#8221;", $content22);


    echo "<p class='storycontent'>" . $content23 . "</p>";
    echo "<h3>Added: " . $a['datepublished'] . "</h3>";
    echo "<br><br><h3>Share this story: </h3>";
    echo "<br>
        <a href='http://www.facebook.com/sharer.php?u=http://users.aber.ac.uk/stm26/TECH/story.php?storyID=" . $a['storyid'] . "' target='_blank'><img class='share-buttons' id='share' src='img/facebook.png' alt='Facebook' /></a>
        <a href='http://twitter.com/share?url=http://users.aber.ac.uk/stm26/TECH/story.php?storyID=" . $a['storyid'] . "&text=TECH - " . $headline3 . "&hashtags=TECH' target='_blank'><img class='share-buttons' id='share' src='img/twitter.png' alt='Twitter' /></a>
        <a href='https://plus.google.com/share?url=http://users.aber.ac.uk/stm26/TECH/story.php?storyID=" . $a['storyid'] . "' target='_blank'><img class='share-buttons' id='share' src='img/google.png' alt='Google' /></a>
    ";
}

$query = "UPDATE stories SET views='$views' WHERE storyid ='$id'";
$result = pg_query($conn, $query);
?>