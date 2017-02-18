<?php
include "includes/_header.php";

$username = "admin";
$password = "root";

$login = new Login();
$loginResult = $login->login($username, $password);

if($loginResult == true){
    session_start();
    $_SESSION['user'] = $username;
    header("location: ". Gallery_Page_Link);
}
else {
    echo "Wrong username/password";
}

include "includes/_footer.php";
?>