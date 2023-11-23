<?php


class Appointments extends Model {

    protected $table = "appointments";
    public $allowedColumns = [
        "vehicle_plate_number",
        "appointment_date",
        "time",
        "drop_off",
        "date_added"
    ];
    public $erros = [];
    public $fieldErros = [
        "appointment_date" => "Appointment Date",
        "time" => "Appointment time",
        "drop_off" => "Selection",
    ];

    function __construct() {}

    public function validate($data) {

        if(!array_key_exists('drop_off',$data)) {
            $data['drop_off'] = "";
        }
        if(!array_key_exists('time',$data)) {
            $data['time'] = '';
        }


        foreach($data as $key => $value) {
            if(in_array($key,["appointment_date","time","drop_off",])) {
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


   public function admin_appointments($admin_id, $order = 'asc') {

        $query = "select appointments.*, appointment_times.admin_id from appointments join appointment_times on appointments.time = appointment_times.appointment_time where appointment_times.admin_id = '$admin_id' order by appointments.id $order" ;
        $result = $this->query($query, []);
        
        if(is_array($result)) {
            return $result;

        } else {
            return false;
        }
    }

    public function admin_id($user_id) {

        $query = "select admin.id from `admin` where admin.user_id = '$user_id'";
        $result = $this->query($query, []);
        
        if(is_array($result)) {
            return $result[0];

        } else {
            return false;
        }
    }


    public function getErros() {
        return $this->erros;
    }

}

?>