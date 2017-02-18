<?php
include "includes/_header.php";

$login = new Login("admin", "root");

if($login == true){
    session_start();
    $_SESSION['user'] = $loginCreds['user'];
    header("location: ". $galleryPageLink);
}
else {
    echo "Wrong username/password";
}

include "includes/_footer.php";
?>