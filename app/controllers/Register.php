<?php


class Register extends Controller {

   function __construct() {

      $users = new Users();

      if($_SERVER['REQUEST_METHOD'] == 'POST') {
         

         if($users->validate($_POST)) {
            
            $_POST['date_created'] = date("Y-m-d H:i:s");
            $_POST['user_type'] = "customer";
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $users->insert(($_POST));

            redirect("Login");
         }

      }


      $data["errors"] = $users->getErros();
      $data["title"] = "Register";

      $this->view('register', $data);
   }





}

?>