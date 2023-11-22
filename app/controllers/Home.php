<?php


class Home extends Controller {

   function __construct() {

      $data["title"] = "Home";
      $this->view('home',$data);
   }

}

?>