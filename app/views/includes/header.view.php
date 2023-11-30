<header>
    <div class="container">
    <p><a href="http://localhost/COMP2140-Project/public/Home" style="text-decoration: none; color: inherit;">GramacAuto</a></p>
        <?php if(!(Authentication::logged_in())) {?>
            <div class="call-to-action-container">
                <a href="<?=ROOT?>/Login" class="login-btn">Login</a>
                <a href="<?=ROOT?>/Register" class="register-btn">Register</a>
                <a href="#" class="contact-btn">Contact Us</a>
            <?php if((Authentication::is_admin())) {?>
                <a href="<?=ROOT?>/Admin" class="contact-btn">Admin</a>
            <?php } ?>
            </div>
        <?php } else { ?>
            <div class="call-to-action-container">
                <p>Hi, <?=Authentication::getFirst_Name()?></p>
                <a href="<?=ROOT?>/Logout" class="register-btn">Logout</a>
            </div>
        <?php } ?>
        
    </div>
</header>