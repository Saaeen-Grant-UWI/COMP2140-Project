<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $this->view('admin/admin-header');
    ?>

    <?php 
        $this->view('admin/admin-sidebar');
        
    ?>

    <?php
        $appointment = new Appointments(); 
        $row = $appointment->admin_appointments($appointment->admin_id(Authentication::getID())->id);
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    ?>
</body>
</html>