<?php
include "includes/_header.php";

$logout = new Login();
$logoutResult = $logout->logout();

if($logoutResult == true) {
    header("Location: ".Index_Page_Link);
}

?>
