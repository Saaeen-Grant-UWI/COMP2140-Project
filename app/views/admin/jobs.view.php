<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/COMP2140-Project/app/views/admin/admin.css">
   
</head>
<body class="admin-body" >
    <?php $this->view('admin/admin-header'); ?>

    <?php $this->view('admin/admin-sidebar'); ?>

    <section class="jobs-table">
        <h1>Jobs</h1>
        <form action="" method="get">
            <button type="submit" name="all">All</button>
        </form>

        <table>
            <tr>
                <th style="text-align:center;" >#</th>
                <th style="text-align:center;" >vehicle_plate_number</th>
                <th>service</th>
                <th>progress</th>
                <th>related_appointment_id</th>
                <th>job_id</th>
                <th>date_added</th>
            </tr>

            <?php  $options = ["vehicle not available","not started","pending","complete"];  ?>

            <?php foreach ($data['services'] as $key => $service) { ?>
                <tr>
                    <td style="text-align:center;" ><?=$key+1?></td>
                    <td><a href="<?=ROOT?>/Admin/Vehicles?plate_search=<?=$service->vehicle_plate_number?>"><?=$service->vehicle_plate_number?></a></td>
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
    </section>

</body>
</html>