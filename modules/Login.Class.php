<?php

class Login {

    public function __construct($username, $password){

        $loginCreds = $this->getCredentials();

        if($loginCreds['user'] == $username && $loginCreds['password'] == $password) {
            return true;            
        }
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