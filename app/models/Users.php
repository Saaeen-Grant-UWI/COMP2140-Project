<?php


class Users extends Model {

   protected $table = "users";
    public $allowedColumns = [
      "first_name",
      "last_name",
      "user_type",
      "email",
      "phone_number",
      "password",
      "date_created"
    ];

    public $erros = [];
    public $fieldErros = [
          "first_name" => "A first name",
          "last_name" => "A last name",
          "email" => "An email",
          "phone_number" => "A phone number",
          "password" => "A password"
    ];

    function __construct() {}



   public function validate($data) {

    if(!(filter_var($data['email'],FILTER_VALIDATE_EMAIL))) {
      $this->erros['email'] =  "Email is not valid"; 
    } else if($this->where(['email'=>$data['email']])) {
      $this->erros['email'] =  "Email has already been used"; 
    }

    if ($data['password'] !==  $data['confirm_password']) {
      $this->erros['password'] =  "Password do not match"; 
    }  
    if (!(empty($data['password'])) && empty($data['confirm_password'])) {
      $this->erros['password'] =  "Please retype your password"; 
    }  
    
    foreach($data as $key => $value) {
      if($key != "confirm_password") {
        if(empty($data[$key])) {
          $this->erros[$key] =  $this->fieldErros[$key]." is required"; 
        } 
      }
    }

    if(empty($this->erros)) {
      return true;
    }   
    return false;
  }

  public function getErros() {
      return $this->erros;
  }

  

}

?>