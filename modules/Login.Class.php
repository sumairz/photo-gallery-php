<?php

class Login {

    public function __construct(){}


    /**
    * Handle the login feature
    * @param
    *   $username (string), $password (string)
    *
    * @return 
    *   Boolean
    **/
    public function login($username, $password){
        $loginCreds = $this->getCredentials();

        if($loginCreds['user'] == $username && $loginCreds['password'] == $password) {
            return true;            
        }
    }

    /**
    * Handle the logout feature by destroying session
    * @param
    *   NONE
    *
    * @return 
    *   Boolean
    **/
    public function logout(){
        unset($_SESSION['user']);
        session_destroy();

        return true;
    }


    /**
    * Read Credentials JSON file to get saved username and password
    * @param
    *   NONE
    *
    * @return 
    *   $data (ARRAY)
    **/
    private function getCredentials() {
        $jsonRead = file_get_contents(CREDENTIALS_FILE);
        $jsonData = json_decode($jsonRead, true);
        
        $data['user'] = $jsonData['credentials']['user'];
        $data['password'] = $jsonData['credentials']['password'];

        return $data;
    }

} // End Login Class
?>