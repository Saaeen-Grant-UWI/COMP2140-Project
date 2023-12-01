<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/COMP2140-Project/app/views/admin/admin.css">

</head>
<body>
    <?php $this->view('admin/admin-header'); ?>

    <?php $this->view('admin/admin-sidebar'); ?>

    <section class="vehicle-table">
        <h1>Vehicle</h1>
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
                <th style="text-align:center;" >vehicle_report</th>
            </tr>

            <?php if(is_array($data['vehicles'])) { ?>
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
                    <td><a href="<?=ROOT?>/Admin/Report?plate=<?=$vehicle->vehicle_plate_number?>">See report</a></td>

                    </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td style="text-align:center; font-size:18px; font-size:18px;" colspan="100%" >vehicle not found</td>
                </tr>
            <?php }?>

        
        </table>
    </section>

    
</body>
</html>