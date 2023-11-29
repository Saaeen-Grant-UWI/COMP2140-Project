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
                <h1 class="hero-title-text">Find Critical Vehicle Information</h1>
                <p class="hero-subtitle">non enim praesent elementum facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam</p>
                <a href="<?=ROOT?>/Appointment" class="appointment-btn" >Set Appointment</a>
                <a href="" class="about-btn">Learn More</a>
                <ul>
                    <li><p>Book Vehicle Service</p></li>
                    <li><p>View Vehicle Repair History</p></li>
                    <li><p>Buy Used & New Parts</p></li>
                </ul>
           </div>
           <div class="right">
           </div>
        </div>
    </section>

    <?php 
        $this->view('includes/footer');
    ?>
    
</body>
</html>