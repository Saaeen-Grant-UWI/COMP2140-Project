<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $this->view('includes/header');
    ?>

    <?php if(message()) { ?>
        <div class="appointment-message"><?=message('',true)?></div>
    <?php } ?>

    <section>
        <div class="container">
            <h1 class="hero-title-text">Find Critical Vehicle Information</h1>
            <p class="hero-subtitle">non enim praesent elementum facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam</p>
            <a href="<?=ROOT?>/Appointment" class="appointment-btn" id="hero-btn">Set Appointment</a>
            <ul>
                <li><p>non enim</p></li>
                <li><p>elementum facilisis</p></li>
                <li><p>vel fringilla</p></li>
                <li><p>est ullamcorper</p></li>
                <li><p>facilisi etiam</p></li>
            </ul>
        </div>
    </section>

    <?php 
        $this->view('includes/footer');
    ?>
    
</body>
</html>