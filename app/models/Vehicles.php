<?php


class Vehicles extends Model {

    protected $table = "vehicles";
    public $allowedColumns = [
        "user_id",
        "vehicle_plate_number",
        "year",
        "make",
        "model",
        "add_model",
        "processed",
        "in_shop",
        "date_added"
    ];
    public $erros = [];
    public $fieldErros = [
        "year" => "Vehicle year",
        "make" => "Vehicle make",
        "model" => "Vehicle model",
        "add_model" => "Additional model",
        "vehicle_plate_number" => "Licence plate number"
  ];

    function __construct() {}



   public function validate($data) {

    foreach($data as $key => $value) {
      if(in_array($key,['year','make','model','add_model','vehicle_plate_number'])) {
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