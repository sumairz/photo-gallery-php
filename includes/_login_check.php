<?php

if(!isset($_SESSION['user'])){
    header("Location: ". Index_Page_Link);
}

?>