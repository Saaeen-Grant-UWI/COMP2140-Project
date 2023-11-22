<?php


class Services extends Model {

    protected $table = "services";
    public $allowedColumns = [
        "vehicle_plate_number",
        "service",
        "progress",
        "related_appointment_id",
        "job_id",
        "date_added"
    ];
    public $erros = [];

    function __construct() {}

    public function validate($data) {


        if(empty($data['services'])) {

            $this->erros['services'] = "Make Service(s) Selection"; 
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