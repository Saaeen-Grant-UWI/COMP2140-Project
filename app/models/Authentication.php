<?php

class Authentication {
    
    public static function authenticate($row) {

        if(is_object($row)) {
            $_SESSION['USER_DATA'] = $row;
        }
    }

    public static function logged_in() {

        if(!(empty($_SESSION['USER_DATA']))) {
            
             return true;    
        }
        return false;
    }

    public static function logout() {

        if(!(empty($_SESSION['USER_DATA']))) {
             unset($_SESSION['USER_DATA']);
             
            //  session_unset();
            //  session_regenerate_id();
        }
        return false;
    }

    public static function is_admin() {

        if(!(empty($_SESSION['USER_DATA']))) {
            if($_SESSION['USER_DATA']->user_type == 'admin') {
                return true;
            }
        }
        return false;
    }


    public static function __callStatic($agr1,$agr2) {

        $key =  str_replace("get","",strtolower($agr1));
        
        if(!(empty($_SESSION['USER_DATA']->$key))) {
            
            return $_SESSION['USER_DATA']->$key;
        }
        return "";

    }
}


?>