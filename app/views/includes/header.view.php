<header>
    <div class="container">
        <p><a href="http://localhost/COMP2140-Project/public/Home" style="text-decoration: none; color: inherit; font-weight: bold;">GramacAuto</a></p>
        <ul>
            <?php if((Authentication::is_admin())) {?>
                <li><a href="<?=ROOT?>/Admin" class="contact-btn">Admin</a></li>
                <a href="../app/views/parts.view.php" class="contact-btn">Contact Us</a>
            <?php } ?>
        </ul>

        <?php if(!(Authentication::logged_in())) {?>
            <div class="call-to-action-container">
                <a href="<?=ROOT?>/Login" class="login-btn">Login</a>
                <a href="<?=ROOT?>/Register" class="register-btn">Register</a>
                
            </div>
        <?php } else { ?>
            <div class="call-to-action-container">
                <p>Hi, <?=Authentication::getFirst_Name()?></p>
                <a href="<?=ROOT?>/Logout" class="register-btn">Logout</a>
            </div>
        <?php } ?>

    </div>
</header>