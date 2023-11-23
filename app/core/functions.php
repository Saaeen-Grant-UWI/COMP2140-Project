<?php

function set_value($key) {
    if(!empty($_POST[$key])) {
        return $_POST[$key];
    } else {
        return "";
    }
}

function redirect($page) {
    header("Location: ".ROOT."/".$page);
    die;
}

function message($message = '', $kill = false) {

   if(!(empty($message))) {
        $_SESSION['message'] = $message;
   } else {
        if(!(empty($_SESSION['message']))) {
            $message = $_SESSION['message'];
            if($kill) {
                unset($_SESSION['message']);
            }
            return $message;
        }
   }

   return false;
}
 

?>