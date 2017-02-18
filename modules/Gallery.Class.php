<?php

class Gallery {

    public function __construct() {}

    /**
    * Read folder names inside photo folder
    * @param
    *   NONE
    *
    * @return 
    *   $final (ARRAY)
    **/
    public function getAllGallery() {
        $final = []; // empty array
        $galleries = glob(Gallery_Folder."*"); // reading the gallery folder

        // filtering out the files
        foreach($galleries as $gallery) {
            if ($gallery === '.' or $gallery === '..') continue;

            if(is_dir($gallery))
                $final[] = explode("/",$gallery)[1];
        }

        return $final;
    }


    public function show($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit;
    }
} // End Gallery Class
?>