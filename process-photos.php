<?php
include "includes/_process_include.php";

// structure JSON response
$response = array();
$response['success']  = false;
$response['messages'] = array();

if (!array_key_exists("action", $_POST)) {
    $response["messages"][] = 'Invalid action';
    echo json_encode($response);
    exit();
}

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $action = $_POST['action'];

    switch($action) {
        case 'saveCart':
            $result   = $orderMan->saveCartItems($orderGUID);

            if($result != false){
                $response['success'] = true;
            }

            echo json_encode($response);
            break; //END 'saveCart'

        default:
            break; // END 'default'

    } // End Switch
}
?>