<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/assets/css/global.css">

</head>
<body>
    
    <?php 
        $this->view('includes/header');
    ?>
    
    <section class="register-section">
        <div class="container">
                <h1>Register</h1>
                <form action="" method="post" novalidate>

                    <div class="name-input-container">
                        <div>
                            <input value="<?= set_value("first_name")?>" type="text" placeholder="Enter First Name" name="first_name" class="<?=!(empty($data["errors"]["first_name"])) ? 'border-error' : 'normal-border'?>" required1>

                            <?php if(!(empty($data["errors"]["first_name"]))) {?>
                                <div class="error-message"><?=$data["errors"]["first_name"]?></div>
                            <?php } ?>
                        </div>
                        <div>
                            <input value="<?= set_value("last_name")?>" type="text" placeholder="Enter Last Name" name="last_name" class="<?=!(empty($data["errors"]["last_name"])) ? 'border-error' : 'normal-border'?>" required1>

                            <?php if(!(empty($data["errors"]["last_name"]))) {?>
                                <div class="error-message"><?=$data["errors"]["last_name"]?></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div>
                        <input value="<?= set_value("email")?>" type="email" placeholder="Enter Email Address" name="email" class="<?=!(empty($data["errors"]["email"])) ? 'border-error' : 'normal-border'?>" required1>

                        <?php if(!(empty($data["errors"]["email"]))) {?>
                            <div class="error-message"><?=$data["errors"]["email"]?></div>
                        <?php } ?>
                    </div>
                    <div>
                        <input value="<?= set_value("phone_number")?>" type="text" placeholder="Enter Phone Number" name="phone_number" class="<?=!(empty($data["errors"]["phone_number"])) ? 'border-error' : 'normal-border'?>" required1>

                        <?php if(!(empty($data["errors"]["phone_number"]))) {?>
                            <div class="error-message"><?=$data["errors"]["phone_number"]?></div>
                        <?php } ?>
                    </div>
                    <div>
                        <input value="<?= set_value("password")?>" type="text" placeholder="Enter Password" name="password" class="<?=!(empty($data["errors"]["password"])) ? 'border-error' : 'normal-border'?>" required1>
                    </div>
                    <div>
                        <input type="password" placeholder="Confirm Password" name="confirm_password" class="<?=!(empty($data["errors"]["password"])) ? 'border-error' : 'normal-border'?>" required1>

                        <?php if(!(empty($data["errors"]["password"]))) {?>
                            <div class="error-message"><?=$data["errors"]["password"]?></div>
                        <?php } ?>
                    </div>
                <button type="submit">Register</button>
            </form>
            <a href="<?=ROOT?>/Login">I already have an account</a>
        </div>
    </section>

    <?php 
        $this->view('includes/footer');
    ?>

</body>
</html>