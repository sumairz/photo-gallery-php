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

$loginOBJ = new Login();

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $action = $_POST['action'];

    switch($action) {
        case 'login':
            $username = htmlspecialchars(trim($_POST['username']));
            $password = htmlspecialchars(trim($_POST['password']));

            $result = $loginOBJ->login($username,$password);

            if($result == true) {
                $_SESSION['user'] = $username;
                $_SESSION['type'] = $loginResult['type'];
                
                $response['success']  = true;
            }
                        
            echo json_encode($response);
            break; //END login

        case 'logout':
            $result = $loginOBJ->logout();

            if($result == true) {
                $response['success']  = true;
            }

            echo json_encode($response);
            break; //END login

        default:
            break; // END 'default'

    } // End Switch
}
?>