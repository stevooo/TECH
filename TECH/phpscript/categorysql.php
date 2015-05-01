<?php

if (isset($_GET["category"])) {
    global $limit;
    $limit = 20;
    $category = $_GET["category"];
    if (isset($_GET["limit"])) {

        $limit = $_GET["limit"] * 2;
    }



    $categorysql = "SELECT * FROM stories WHERE category ='$category' OR category2 ='$category' ORDER BY datepublished DESC LIMIT $limit";
    $categoryres = pg_query($conn, $categorysql);

    while ($d = pg_fetch_array($categoryres)) {

        echo "<section class='categorystorylink'>";
        $image = str_replace("{", "", $d['image']);
        $image2 = str_replace("}", "", $image);
        $headline = str_replace('{"', "", $d['headline']);
        $headline2 = str_replace('"}', "", $headline);
        $headline3 = str_replace("\u2019", '&#8217', $headline2);
        $headline4 = str_replace("’", '&rsquo;', $headline3);
        $headline5 = str_replace("�", '&#32;', $headline4);
        $headline6 = str_replace("—", '&#8211;', $headline5);
        $headline7 = str_replace("‘", '&#8216;', $headline6);



        echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=" . $d['storyid'] . "'>
          <img class='cstoryimg' id='" . $d['storyid'] . "' src='" . $image2 . "'/></a>";
        echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=" . $d['storyid'] . "'>" . $headline7 . "</a></h2>";
        echo "</section>";
    }
} else {
    header("Location: http://users.aber.ac.uk/stm26/TECH/index");
}
?>