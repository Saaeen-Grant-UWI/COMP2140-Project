<?php


class Admin extends Controller {

    function __construct() {

        $data["title"] = "Admin";

        if(Authentication::is_admin()) {

            switch ($_GET['url']) {
                case 'Admin/Appointments':
                    $this->Appointments();
                    break;

                case 'Admin/Vehicles':
                    $this->Vehicles();
                    break;

                case 'Admin/Jobs':
                    $this->Jobs();
                    break;

                case 'Admin/Report':
                    $this->Report();
                    break;

                case 'Admin':
                    $this->Appointments();
                break;
    
                default:
                    $this->view('_404',$data);
                    break;
            }
            

        } else {
            $this->view('_404',$data);
        }
    }

    public function Appointments() {
        $appointment = new Appointments();

        $data["title"] = "Appointments";
        $data["appointments"] =  $appointment->admin_appointments($appointment->admin_id(Authentication::getID())->id); 
        $this->view('admin/appointments',$data);
    }

    public function Vehicles() {
        $vehicles = new Vehicles(); 
    
        if(array_key_exists('plate_search',$_GET)) {
            if(!empty($_GET['plate_search'])) {
                 $data['vehicles'] = $vehicles->where(['vehicle_plate_number'=>$_GET['plate_search']]);
            } else {
                $data['vehicles'] = $vehicles->where_all();
            }
         } else {
             $data['vehicles'] = $vehicles->where_all();
         }

        $data["title"] = "Vehicles";
        $this->view('admin/vehicles',$data);
    }

    public function Jobs() {
        $services = new Services();
        $appointment = new Appointments();
        $appointment_row = $appointment->admin_appointments($appointment->admin_id(Authentication::getID())->id);
        $appointment_id_str = "";

        $data['services'] = [];
        foreach ($appointment_row as $key => $value) {
            $appointment_id_str.= $value->id.",";
        }
        $appointment_id_str = trim($appointment_id_str,",");

    
        if(array_key_exists('job_id',$_GET)) {
           if(!empty($_GET['job_id'])) {
                $data['services'] = $services->where(['related_appointment_id'=>$_GET['job_id']]);
           }
        } else {
            $data['services'] = $services->query("SELECT * FROM `services` WHERE related_appointment_id IN ($appointment_id_str)", []);
        }


        $data["title"] = "Jobs";
        $this->view('admin/jobs',$data);
    }

    public function Report() {
        $vehicle = new Vehicles(); 
        $user = new Users();
        $appointments = new Appointments();
        $services = new Services();
        


        $data["title"] = "Report";
        $data["vehicle_data"] = $vehicle->query("select * from vehicles where vehicles.vehicle_plate_number = 'J6SJ5R'",[])[0];
        $data["user_data"] = $user->query("select * from users where users.id = '6'",[])[0];
        $data["appointments_data"] = $appointments->query("select * from appointments where appointments.vehicle_plate_number = 'J6SJ5R'",[]);
        $data["services_data"] = $services->query("select * from services where services.vehicle_plate_number = 'J6SJ5R'",[]);

        // 
        $this->view('admin/report',$data);
    }

}

?>