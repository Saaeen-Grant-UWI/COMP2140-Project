<?php


class Logout extends Controller {

   function __construct() {
        Authentication::logout();
        message('You have logged out');
        redirect('Home');
   }

}

?>