<?php


class Contact extends Controller {

   function __construct() {

      $data["title"] = "Contact";
      $this->view('contact', $data);
   }

}

?>