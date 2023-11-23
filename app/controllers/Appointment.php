<?php


class Appointment extends Controller {

   function __construct() {

      $data["title"] = "Appointment";
      $data["errors"] = [];
     
      if(!(Authentication::logged_in())) {
         $this->view('noaccount',$data);
      } else {

         $appointment = new Appointments();
         $vehicle = new Vehicles();
         $services = new Services();

         if($_SERVER['REQUEST_METHOD'] == 'POST') {
           
            $is_appointment_valid = $appointment->validate($_POST);
            $is_vehicle_valid = $vehicle->validate($_POST);
            $is_services_valid = $services->validate($_POST);

            if($is_appointment_valid && $is_vehicle_valid && $is_services_valid) {

               $_POST['progress'] = "vehicle not available";
               $_POST['related_appointment_id'] = $appointment->last_row() ? $appointment->last_row()->id+1 : 1;
               $_POST['job_id'] = $services->last_row() ? $services->last_row()->job_id+1 : 10000;
               $_POST['user_id'] = Authentication::getID();
               $_POST['processed'] = "no";
               $_POST['in_shop'] = "no";
               $_POST['date_added'] = date("Y-m-d H:i:s");

               foreach ($_POST['services'] as $key => $value) {
                     $_POST['service'] = $value;
                     $services->insert($_POST);

               }

               $vehicle->insert($_POST);
               $appointment->insert($_POST);

               message('Appointment was succesfully made');
               redirect("Home");
               
            }

         }

         $data["errors"] = array_merge($appointment->getErros(),$vehicle->getErros(),$services->getErros());
         //print_r($data["errors"]);
         $this->view('appointment',$data);
      }
   }

}

?>