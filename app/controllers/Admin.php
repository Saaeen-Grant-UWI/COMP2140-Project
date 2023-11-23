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
            
                default:
                    $this->view('admin/admin',$data);
                    break;
            }
            

        } else {
            $this->view('_404',$data);
        }
    }

    public function Appointments() {

        $data["title"] = "Appointments";
        $this->view('admin/appointments',$data);
    }

    public function Vehicles() {

        $data["title"] = "Vehicles";
        $this->view('admin/vehicles',$data);
    }

}

?>