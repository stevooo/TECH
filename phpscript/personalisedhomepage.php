<?php
$conn = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
$emailtest = $_SESSION['email'];
$persql = "SELECT * FROM users WHERE email='$emailtest'";
$perres = pg_query($conn,$persql);


while($z = pg_fetch_array($perres)){
        global $popular;
        global $mobiletablet;
        global $business;
        global $hardware;
        global $software;
        global $wearables;
        global $tvs;
        global $gaming;
        global $socialmedia;
        
        
	$popular = $z['popular'];
	$mobiletablet = $z['mobiletablet'];
	$business = $z['business'];
	$hardware = $z['hardware'];
	$software = $z['software'];
	$wearables = $z['wearables'];
	$tvs = $z['tvs'];
	$gaming = $z['gaming'];
	$socialmedia = $z['socialmedia'];
}
	if($popular == 't'){
		$sqlpop = "SELECT * FROM stories ORDER BY datepublished DESC LIMIT 8";
		$respop = pg_query($conn,$sqlpop);
                echo "<a href='categorypage.php?category=popular&name=Popular'><h1 class='recent'>Popular</h1></a>";
                echo "<ul id='scroller'>";
		while($a = pg_fetch_array($respop)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."'>
				<img class='cstoryimg' id='".$a['storyid']."' src='".$a['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."'>".$a['headline']."</a></h2>";
			echo "</section></li>";
		}echo "</ul>";
	}
	if($mobiletablet == 't'){
		$sqlmota = "SELECT * FROM stories where category ='mobileTablet' ORDER BY datepublished DESC LIMIT 8";
		$resmota = pg_query($conn,$sqlmota);
                echo "<a href='categorypage.php?category=mobileTablet&name=Mobile/Tablet'><h1 class='recent'>Mobile/Tablet</h1></a>";
		echo "<ul id='scroller2'>";
                while($b = pg_fetch_array($resmota)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$b['storyid']."'>
				<img class='cstoryimg' id='".$b['storyid']."' src='".$b['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$b['storyid']."'>".$b['headline']."</a></h2>";
			echo "</section></li>";
		}
                echo "</ul>";
	}
	if($business == 't'){
		$sqlbus = "SELECT * FROM stories where category ='business' ORDER BY datepublished DESC LIMIT 8";
		$resbus = pg_query($conn,$sqlbus);
                echo "<a href='categorypage.php?category=business&name=Business'><h1 class='recent'>Business</h1></a>";
		echo "<ul id='scroller3'>";
                while($c = pg_fetch_array($resbus)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$c['storyid']."'>
				<img class='cstoryimg' id='".$c['storyid']."' src='".$c['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$c['storyid']."'>".$c['headline']."</a></h2>";
			echo "</section></li>";
		}
                echo "</ul>";
	}
	if($hardware == 't'){
		$sqlha = "SELECT * FROM stories where category ='hardware' ORDER BY datepublished DESC LIMIT 8";
		$resha = pg_query($conn,$sqlha);
                echo "<a href='categorypage.php?category=hardware&name=Hardware'><h1 class='recent'>Hardware</h1></a>";
		echo "<ul id='scroller4'>";
                while($d = pg_fetch_array($resha)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>
				<img class='cstoryimg' id='".$d['storyid']."' src='".$d['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>".$d['headline']."</a></h2>";
			echo "</section></li>";
		}
                echo "</ul>";
	}
	if($software == 't'){
		$sqlso = "SELECT * FROM stories where category ='software' ORDER BY datepublished DESC LIMIT 8";
		$resso = pg_query($conn,$sqlso);
                echo "<a href='categorypage.php?category=software&name=Software'><h1 class='recent'>Software</h1></a>";
		echo "<ul id='scroller5'>";
                while($e = pg_fetch_array($resso)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$e['storyid']."'>
				<img class='cstoryimg' id='".$e['storyid']."' src='".$e['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$e['storyid']."'>".$e['headline']."</a></h2>";
			echo "</section></li>";
		}
                echo "</ul>";
	}
	if($wearables == 't'){
		$sqlwe = "SELECT * FROM stories where category ='wearables' ORDER BY datepublished DESC LIMIT 8";
		$reswe = pg_query($conn,$sqlwe);
                echo "<a href='categorypage.php?category=wearables&name=Wearables'><h1 class='recent'>Wearables</h1></a>";
		echo "<ul id='scroller6'>";
                while($f = pg_fetch_array($reswe)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$f['storyid']."'>
				<img class='cstoryimg' id='".$f['storyid']."' src='".$f['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$f['storyid']."'>".$f['headline']."</a></h2>";
			echo "</section></li>";
		}
                echo "</ul>";
	}
	if($tvs == 't'){
		$sqltvs = "SELECT * FROM stories where category ='tvs' ORDER BY datepublished DESC LIMIT 8";
		$restvs = pg_query($conn,$sqltvs);
                echo "<a href='categorypage.php?category=tvs&name=TV'><h1 class='recent'>TV</h1><a>";
		echo "<ul id='scroller7'>";
                while($g = pg_fetch_array($restvs)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$g['storyid']."'>
				<img class='cstoryimg' id='".$g['storyid']."' src='".$g['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$g['storyid']."'>".$g['headline']."</a></h2>";
			echo "</section></li>";
		}
                echo "</ul>";
	}
	if($gaming == 't'){
		$sqlgam = "SELECT * FROM stories where category ='gaming' ORDER BY datepublished DESC LIMIT 8";
		$resgam = pg_query($conn,$sqlgam);
                echo "<a href='categorypage.php?category=gaming&name=Gaming'><h1 class='recent'>Gaming</h1></a>";
		echo "<ul id='scroller8'>";
                while($h = pg_fetch_array($resgam)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$h['storyid']."'>
				<img class='cstoryimg' id='".$h['storyid']."' src='".$h['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$h['storyid']."'>".$h['headline']."</a></h2>";
			echo "</section></li>";
		}
                echo "</ul>";
	}
	if($socialmedia == 't'){
		$sqlsm = "SELECT * FROM stories where category ='socialMedia' ORDER BY datepublished DESC LIMIT 8";
		$ressm = pg_query($conn,$sqlsm);
                echo "<a href='categorypage.php?category=socialMedia&name=Social Media'><h1 class='recent'>Social Media</h1></a>";
		echo "<ul id='scroller9'>";
                while($i = pg_fetch_array($ressm)){
			echo "<li><section class='categorystorylink2'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$i['storyid']."'>
				<img class='cstoryimg' id='".$i['storyid']."' src='".$i['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$i['storyid']."'>".$i['headline']."</a></h2>";
			echo "</section></li>";
		}
                echo "</ul>";
	}
?>
