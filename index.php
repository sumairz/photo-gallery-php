<?php

$string = file_get_contents("/data/credentials.json");
$json_a = json_decode($string, true);
echo $json_a['John'][status];
echo $json_a['Jennifer'][status];

?>