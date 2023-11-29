<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../public/assets/javascript/form-review.js"></script>
    <link rel="stylesheet" href="../public/assets/css/global.css">

</head>
<body>

    <?php 
        $this->view('includes/header');
    ?>

    <section class="noaccount-section">
        <div class="container">
           <h1>LOGIN TO MAKE AN APPOINTMENT</h1>
           <a href="<?=ROOT?>/Login">Login</a>
           <a href="<?=ROOT?>/Register">I do not have an account</a>
        </div>
    </section>

    <?php 
        $this->view('includes/footer');
    ?>
    
</body>
</html>