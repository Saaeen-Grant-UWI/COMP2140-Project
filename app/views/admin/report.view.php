<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/COMP2140-Project/app/views/admin/admin.css">


</head>
<body class="admin-body">
    <?php $this->view('admin/admin-header'); ?>

    <?php $this->view('admin/admin-sidebar'); ?>

   <section class="report">
        <h1>Vehicle report</h1>
        <div class="vehicle-report-info">
            <h2><?=$data["vehicle_data"]->make." ".$data["vehicle_data"]->model." ".$data["vehicle_data"]->add_model?></h2>
            <h3>Plate number: <?=$data["vehicle_data"]->vehicle_plate_number?></h3>
            <br>
        </div>

        <div class="customer-report-info">
           <h2>User/Owner Info</h2>
           <p>id: <?=$data["user_data"]->id?></p>
           <p>Name: <?=$data["user_data"]->first_name." ".$data["user_data"]->last_name?></p>
           <p>Phone: <?="(".substr($data["user_data"]->phone_number,0,3).") ".substr($data["user_data"]->phone_number,3,3)." - ".substr($data["user_data"]->phone_number,6,4)?></p>
           <p>Email: <?=$data["user_data"]->email?></p>
        </div>
        <br>

        <div class="appointments-report-info">
           <h2>Appointment Info</h2>
            <?php foreach ($data["appointments_data"] as $key => $appointment) { ?>
                <div class="appointments">
                    <p>Id: <?=$appointment->id?></p>
                    <p>Date: <?=$appointment->appointment_date?></p>
                    <p>Time: <?=$appointment->time?></p>
                    <p>Drop off action: <?=$appointment->drop_off?></p>
                </div>
                <br>
            <?php } ?>
        </div>
        <br>

        <div class="appointments-report-info">
           <h2>Services Info</h2>
            <?php foreach ($data["services_data"] as $key => $service) { ?>
                <div class="services">
                    <p>Id: <?=$service->id?></p>
                    <p>Service: <?=$service->service?></p>
                    <p>Progress status: <?=$service->progress?></p>
                    <p>Date Added: <?=$service->date_added?></p>
                    <p>Related appointment id: <?=$service->related_appointment_id?></p>
                </div>
                <br>
            <?php } ?>
        </div>
   </section>
</body>
</html>