<?php


class Logout extends Controller {

   function __construct() {
        Authentication::logout();
        redirect('Home');
   }

}

?>