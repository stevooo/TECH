<?php
if(isset($_POST["email"])){
    $email = $_POST["email"];

    
    $sql= "SELECT * FROM users WHERE email ='$email';";
    $res = pg_query($conn,$sql);
    $rows = pg_num_rows($res);
    if ($rows == 1){
        $length = 7;
        $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
        $newpassword = $randomString;
        $message = "Hi\r\n\r\nHere is your new password for your TECH account:\r\n\r\nPassword: $newpassword\r\n\r\nWe recommend that you change your password when you login through the manage account page.\r\n\r\nIf you did not request this please login and change your password to keep your account secure.\r\n\r\nThanks TECH";
        $message = wordwrap($message, 70, "\r\n");
        mail($email, 'TECH - Forgotten password', $message);
        $password_hash = crypt($newpassword, '$2a$07$usesomesillystringforsalt$');
        
        $query = "UPDATE users SET password='$password_hash' WHERE email='$email'";
        $result = pg_query($conn,$query);
        header("Location: http://users.aber.ac.uk/stm26/TECH/forgotpassword.php?passwordchanged=True"); 
    }
    else{
        header("Location: http://users.aber.ac.uk/stm26/TECH/forgotpassword.php?emailinvalid=True"); 
    }

}
else{
    header("Location: http://users.aber.ac.uk/stm26/TECH/forgotpassword.php?emailinvalid=True"); 
}

?>