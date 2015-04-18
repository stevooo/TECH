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
		$sqlpop = "SELECT * FROM stories ORDER BY datepublished DESC LIMIT 4";
		$respop = pg_query($conn,$sqlpop);
                echo "<a href='categories/popular.php?category=popular'><h1 class='recent'>Popular</h1></a>";
		while($a = pg_fetch_array($respop)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."'>
				<img class='cstoryimg' id='".$a['storyid']."' src='".$a['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$a['storyid']."'>".$a['headline']."</a></h2>";
			echo "</section>";
		}
	}
	if($mobiletablet == 't'){
		$sqlmota = "SELECT * FROM stories where category ='mobileTablet' LIMIT 4";
		$resmota = pg_query($conn,$sqlmota);
                echo "<a href='categories/mobile-tablet.php?category=mobileTablet'><h1 class='recent'>Mobile/Tablet</h1></a>";
		while($b = pg_fetch_array($resmota)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$b['storyid']."'>
				<img class='cstoryimg' id='".$b['storyid']."' src='".$b['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$b['storyid']."'>".$b['headline']."</a></h2>";
			echo "</section>";
		}
	}
	if($business == 't'){
		$sqlbus = "SELECT * FROM stories where category ='business' LIMIT 4";
		$resbus = pg_query($conn,$sqlbus);
                echo "<a href='categories/business.php?category=business'><h1 class='recent'>Business</h1></a>";
		while($c = pg_fetch_array($resbus)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$c['storyid']."'>
				<img class='cstoryimg' id='".$c['storyid']."' src='".$c['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$c['storyid']."'>".$c['headline']."</a></h2>";
			echo "</section>";
		}
	}
	if($hardware == 't'){
		$sqlha = "SELECT * FROM stories where category ='hardware' LIMIT 4";
		$resha = pg_query($conn,$sqlha);
                echo "<a href='categories/hardware.php?category=hardware'><h1 class='recent'>Hardware</h1></a>";
		while($d = pg_fetch_array($resha)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>
				<img class='cstoryimg' id='".$d['storyid']."' src='".$d['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$d['storyid']."'>".$d['headline']."</a></h2>";
			echo "</section>";
		}
	}
	if($software == 't'){
		$sqlso = "SELECT * FROM stories where category ='software' LIMIT 4";
		$resso = pg_query($conn,$sqlso);
                echo "<a href='categories/software.php?category=software'><h1 class='recent'>Software</h1></a>";
		while($e = pg_fetch_array($resso)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$e['storyid']."'>
				<img class='cstoryimg' id='".$e['storyid']."' src='".$e['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$e['storyid']."'>".$e['headline']."</a></h2>";
			echo "</section>";
		}
	}
	if($wearables == 't'){
		$sqlwe = "SELECT * FROM stories where category ='wearables' LIMIT 4";
		$reswe = pg_query($conn,$sqlwe);
                echo "<a href='categories/wearables.php?category=wearables'><h1 class='recent'>Wearables</h1></a>";
		while($f = pg_fetch_array($reswe)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$f['storyid']."'>
				<img class='cstoryimg' id='".$f['storyid']."' src='".$f['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$f['storyid']."'>".$f['headline']."</a></h2>";
			echo "</section>";
		}
	}
	if($tvs == 't'){
		$sqltvs = "SELECT * FROM stories where category ='tvs' LIMIT 4";
		$restvs = pg_query($conn,$sqltvs);
                echo "<a href='categories/tvs.php?category=tvs'><h1 class='recent'>TV's</h1><a>";
		while($g = pg_fetch_array($restvs)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$g['storyid']."'>
				<img class='cstoryimg' id='".$g['storyid']."' src='".$g['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$g['storyid']."'>".$g['headline']."</a></h2>";
			echo "</section>";
		}
	}
	if($gaming == 't'){
		$sqlgam = "SELECT * FROM stories where category ='gaming' LIMIT 4";
		$resgam = pg_query($conn,$sqlgam);
                echo "<a href='categories/gaming.php?category=gaming'><h1 class='recent'>Gaming</h1></a>";
		while($h = pg_fetch_array($resgam)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$h['storyid']."'>
				<img class='cstoryimg' id='".$h['storyid']."' src='".$h['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$h['storyid']."'>".$h['headline']."</a></h2>";
			echo "</section>";
		}
	}
	if($socialmedia == 't'){
		$sqlsm = "SELECT * FROM stories where category ='socialMedia' LIMIT 4";
		$ressm = pg_query($conn,$sqlsm);
                echo "<a href='categories/socialmedia.php?category=socialMedia'><h1 class='recent'>Social Media</h1></a>";
		while($i = pg_fetch_array($ressm)){
			echo "<section class='categorystorylink'>";
			echo "<a href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$i['storyid']."'>
				<img class='cstoryimg' id='".$i['storyid']."' src='".$i['image']."'/></a>";
			echo "<h2><a class='headline' href='http://users.aber.ac.uk/stm26/TECH/story.php?storyID=".$i['storyid']."'>".$i['headline']."</a></h2>";
			echo "</section>";
		}
	}
?>
