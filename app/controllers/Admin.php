<?php


class Admin extends Controller {

   function __construct() {

        $data["title"] = "Admin";
        $data["errors"] = [];

        if(Authentication::is_admin()) {
            $this->view('admin',$data);
        } else {
            $this->view('_404',$data);
        }
   }

}

?>