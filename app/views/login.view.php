<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $this->view('includes/header');
    ?>

    <section>
        <div class="container">
            <form action="" method="post" novalidate>
            <?php if(message()) { ?>
                <div class="login-message"><?=message('',true)?></div>
            <?php } ?>
            <div>
                <input value="<?= set_value("email")?>" type="email" placeholder = "Enter Email Address" name = "email" required1>

                <?php if(!(empty($data["errors"]["email"]))) {?>
                    <div class="error-message"><?=$data["errors"]["email"]?></div>
                <?php } ?>
            </div>
            <div>
                <input  type="password" placeholder="Enter Password" name="password" required1>

                <?php if(!(empty($data["errors"]["password"]))) {?>
                    <div class="error-message"><?=$data["errors"]["password"]?></div>
                <?php } ?>
            </div>
            <button type="submit">Login</button>
            </form>
            <a href="<?=ROOT?>/Register">I do not have an account</a>
        </div>
    </section>

    <?php 
        $this->view('includes/footer');
    ?>

</body>
</html>