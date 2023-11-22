<?php


class Parts extends Controller {

   function __construct() {

      $data["title"] = "Parts";
      $this->view('parts', $data);
   }

}

?>