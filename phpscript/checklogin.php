<?php
$db = pg_connect("host=db.dcs.aber.ac.uk dbname=cs399_14_15_stm26 user=stm26 password=stephen19");
$email = $_POST['email'];
$password = $_POST['password'];



if(isset($_POST['email'])){ 

    
    $sql= "SELECT * FROM users WHERE email ='$email';";
    $res = pg_query($db,$sql);

    while($m = pg_fetch_array($res)){
            global $dbpassword;        
            $dbpassword = $m['password']; 
            global $firstname;
            $firstname = $m['firstname'];
    }
    
    if(crypt($password, $dbpassword) == $dbpassword){
        $_SESSION['email'] = $email;
        $_SESSION['firstname'] = $firstname;            
        header("Location: http://users.aber.ac.uk/stm26/TECH/index.php");
    }else{
        echo "<p class='note'>Inncorect combination of email and password please try again.</p>";
    }
     
}
?>