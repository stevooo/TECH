<?php


$sql = "SELECT * FROM users WHERE email ='$email'";
$res = pg_query($conn,$sql);

while($a = pg_fetch_array($res)){
    global $checkid;
    $checkid = $a['userid'];
$firstname = $a['firstname'];
$lastname = $a['lastname'];
$email = $a['email'];
$password = $a['password'];
$country = $a['country'];
$datejoined = $a['datejoined'];

$popular = $a['popular'];
$mobiletablet = $a['mobiletablet'];
$business = $a['business'];
        $hardware = $a['hardware'];
        $software = $a['software'];
        $wearables = $a['wearables'];
        $tvs = $a['tvs'];
        $gaming = $a['gaming'];
        $socialmedia = $a['socialmedia'];
        
}
?>