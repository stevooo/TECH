<?php
$id = $_GET["checkid"] ;
if ($_POST) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $country = $_POST['country'];
    $popular = $_POST['popular'];
    $mobiletablet = $_POST['mobile/tablet'];
    $business = $_POST['business'];
    $hardware = $_POST['hardware'];
    $software = $_POST['software'];
    $wearables = $_POST['wearables'];
    $tvs = $_POST['tvs'];
    $gaming = $_POST['gaming'];
    $socialmedia = $_POST['socialmedia'];

    
    if ($popular === 'True') {
        
    } else {
        $popular = 'False';
    }
    if ($business === 'True') {
        
    } else {
        $business = 'False';
    }
    if ($mobiletablet === 'True'){
        
    } else {
        $mobiletablet = 'False';  
    }
    if ($hardware === 'True'){
        
    } else {
        $hardware = 'False';  
    }
    if ($software === 'True'){
        
    } else {
        $software = 'False';  
    }
    if ($wearables === 'True'){
        
    } else {
        $wearables = 'False';  
    }
    if ($tvs === 'True'){
        
    } else {
        $tvs = 'False';  
    }
    if ($gaming === 'True'){
        
    } else {
        $gaming = 'False';  
    }
    if ($socialmedia === 'True'){
        
    } else {
        $socialmedia = 'False';  
    }



   
        $db = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
        $query = "UPDATE users SET email='$email',password='$password',firstname='$firstname',lastname='$lastname',country='$country',popular='$popular',mobiletablet='$mobiletablet',business='$business',hardware='$hardware',software='$software',wearables='$wearables',tvs='$tvs',gaming='$gaming',socialmedia='$socialmedia' 
                WHERE userid='$id'";
        $result = pg_query($query);
        header("Location: http://users.aber.ac.uk/stm26/TECH/index.php");
   
}
?>