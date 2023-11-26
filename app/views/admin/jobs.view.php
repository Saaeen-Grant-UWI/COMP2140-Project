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
        <button type="submit" name="all">All</button>
    </form>

    <?php 
        if(array_key_exists('find',$_GET)) {
            echo $data['test'];
        }
    ?>
    <table>
        <tr>
            <th>#</th>
            <th>vehicle_plate_number</th>
            <th>service</th>
            <th>progress</th>
            <th>related_appointment_id</th>
            <th>job_id</th>
            <th>date_added</th>
        </tr>

        <?php  $options = ["vehicle not available","not started","pending","complete"];  ?>

        <?php foreach ($data['services'] as $key => $service) { ?>
            <tr>
                <td><?=$key+1?></td>
                <td><a href="#"><?=$service->vehicle_plate_number?></a></td>
                <td><?=$service->service?></td>
                <td>
                    <select name="" id="">
                        <?php foreach ($options as  $option) { ?>
                            <option value="" <?= $option == $service->progress ? "Selected" : ""; ?> ><?=$option?></option>
                        <?php } ?>
                    </select>
                </td>
                <td><?=$service->related_appointment_id?></td>
                <td><?=$service->job_id?></td>
                <td><?=$service->date_added?></td>
            </tr>
        <?php } ?>
        
    </table>

</body>
</html>