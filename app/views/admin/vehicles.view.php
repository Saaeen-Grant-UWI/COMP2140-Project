<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
         background-color: #dddddd;
        }
    </style>
</head>
<body>
    <?php 
        $this->view('admin/admin-header');
    ?>

    <?php 
        $this->view('admin/admin-sidebar');
        
    ?>

    <form action="" method="get">
        <input type="text" name="plate_search">
        <button type="submit">Lookup</button>
    </form>

    <table>
        <tr>
            <th>#</th>
            <th>user_id</th>
            <th>vehicle_plate_number</th>
            <th>year</th>
            <th>year</th>
            <th>model</th>
            <th>add_model</th>
            <th>processed</th>
            <th>in_shop</th>
            <th>date_added</th>
            <th>vehicle_report</th>
        </tr>

        <?php foreach ($data['vehicles'] as $key => $vehicle) { ?>
            <tr>
              <td><?=$key+1?></td>
              <td><?=$vehicle->user_id?></th>
              <td><?=$vehicle->vehicle_plate_number?></td>
              <td><?=$vehicle->year?></td>
              <td><?=$vehicle->make?></td>
              <td><?=$vehicle->model?></td>
              <td><?=$vehicle->add_model?></td>
              <td><?=$vehicle->processed?></td>
              <td><?=$vehicle->in_shop?></td>
              <td><?=$vehicle->date_added?></td>
              <td><a href="<?=ROOT?>/Admin/Report">See report</a></td>

            </tr>
        <?php } ?>
       
    </table>

    
</body>
</html>