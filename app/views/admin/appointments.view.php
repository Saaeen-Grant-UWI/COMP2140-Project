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

    <section class="appointments-table">
        <h1>Appointments</h1>
        <table>
            <tr>
                <th style="text-align:center;" >#</th>
                <th style="text-align:center;" >vehicle_plate_number</th>
                <th>appointment_date</th>
                <th>time</th>
                <th>drop_off</th>
                <th>date_added</th>
                <th style="text-align:center;" >related_job</th>
            </tr>

            <?php foreach ($data['appointments'] as $key => $appointment) { ?>
                <tr>
                <td style="text-align:center;" ><?=$key+1?></td>
                <td><a href="<?=ROOT?>/Admin/Vehicles?plate_search=<?=$appointment->vehicle_plate_number?>"><?=$appointment->vehicle_plate_number?></a></td>
                <td><?=$appointment->appointment_date?></td>
                <td><?=$appointment->time?></td>
                <td><?=$appointment->drop_off?></td>
                <td><?=$appointment->date_added?></td>
                <td><a href="<?=ROOT?>/Admin/Jobs?job_id=<?=$appointment->id?>">Jobs</a></td>
                </tr>
            <?php } ?>
        
        </table>
    </section>

</body>
</html>