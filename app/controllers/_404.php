<?php

class _404 extends Controller {
   function __construct() {

      $data["title"] = "_404";
      $this->view('_404',$data);
   }
}

?>