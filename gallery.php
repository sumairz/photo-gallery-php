<?php
include "includes/_header.php";
include "includes/_login_check.php";

$galleryOBJ = new Gallery();
$galleries = $galleryOBJ->getAllGallery();

foreach($galleries as $gallery) {
    echo "<a href='".Photos_Page_Link."?name=".$gallery."'>$gallery</a>";
    echo "<br />";
}

?>