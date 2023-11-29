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
<body class="admin-body">
    <?php $this->view('admin/admin-header'); ?>

    <?php $this->view('admin/admin-sidebar'); ?>


    <section class="appointments-table">
        <table>
            <tr>
                <th>#</th>
                <th>vehicle_plate_number</th>
                <th>appointment_date</th>
                <th>time</th>
                <th>drop_off</th>
                <th>date_added</th>
                <th>related_job</th>
            </tr>

            <?php foreach ($data['appointments'] as $key => $appointment) { ?>
                <tr>
                <td><?=$key+1?></td>
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