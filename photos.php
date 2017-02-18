<?php
include "includes/_header.php";
include "includes/_login_check.php";

$galleryName = htmlspecialchars(trim($_GET['gallery']));

$photosOBJ = new Photos();
$photos = $photosOBJ->getAllGalleryPhotos($galleryName);

$photosOBJ->show($photos);
//$photosOBJ->deleteGalleryPhotos($galleryName,"IMG_20160812_171108.jpg");

?>