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

    <form action="" method="get">
        <input type="text" name="find">
        <button type="submit">Lookup</button>
    </form>

    <?php

        $vehicle = new Vehicles(); 

        if(array_key_exists('find', $_GET)) {

            $row = $vehicle->where(['vehicle_plate_number'=>$_GET['find']]);

            if(empty($_GET['find'])) {
                $row = $vehicle->where_all();
            }

        } 
     
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    ?>
</body>
</html>