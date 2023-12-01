<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../public/assets/css/global.css">

</head>
<body>
    
    <?php 
        $this->view('includes/header');
    ?>

    <?php if(message()) { ?>
        <div class="appointment-message"><?=message('',true)?></div>
    <?php } ?>

    <section class="home-section">
        <div class="container">
           <div class="left">
                <h1 class="hero-title-text">Set An Appointment With Gramac Auto Repair</h1>
                <p class="hero-subtitle">Welcome to Gramac Auto Repair and Service Limited, where excellence is our standard. Utilize our website to schedule appointments, purchase genuine parts online, and receive detailed reports when necessary. Our dedicated professionals ensure top-notch service, guaranteeing your vehicle's longevity and performance. Drive confidently, knowing your vehicle is in the hands of professionals dedicated to quality service.</p>
                <a href="<?=ROOT?>/Appointment" class="appointment-btn" >Set Appointment</a>
                <a href="" class="about-btn">Learn More</a>
                <ul>
                    <li><p>&#x2714 Book Vehicle Service</p></li>
                    <li><p>&#x2714 View Vehicle Repair History</p></li>
                    <li><p>&#x2714 Buy Used & New Parts</p></li>
                </ul>
           </div>
           <div class="right">
           </div>
        </div>
    </section>
    
</body>
</html>