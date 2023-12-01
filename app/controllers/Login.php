<?php


class Login extends Controller {

   function __construct() {

      $users = new Users();
      $data["title"] = "Login";
      $data["errors"] = [];      


      if($_SERVER['REQUEST_METHOD'] == 'POST') {

         $row = $users->first(['email'=>$_POST['email']]);

         if($row) {
            
            if(password_verify($_POST['password'], $row->password)) {

               Authentication::authenticate($row);
               message('You have succesfully logged in');
               redirect('Home');
            }

         }


         // if(empty($_POST['email'])) {
         //    $data['errors']['email'] = "Please enter your email";
         // } else if(!(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))) {
         //    $data['errors']['email'] = "Please enter a valid email";
         // }

         // if(empty($_POST['password'])) {
         //    $data['errors']['password'] = "Please enter your password";
         // } else {
         //    $data['errors']['password'] = "Incorrect Password";   
         // }
        
      
      }

      $this->view('login', $data);

   }

}

?>