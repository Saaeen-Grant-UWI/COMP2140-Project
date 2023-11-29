<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="appointment.css">
    <title>Set Up Appointment</title>
</head>
<body>
    <section>
        <div class="container">
            <form action="">
                <?php 
                    include('../appointment/appointment-details.php');
                ?>
                <?php 
                    include('../includes/my-information.php');
                ?>        
                <?php 
                    include('../includes/review-submit.php');
                ?>
            </form>
        </div>
    </section>
    
</body>
</html>