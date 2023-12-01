<header>
    <div class="container">
        <a href="<?=ROOT?>/Home" style="font-size: 20px;" >GramacAuto</a>
        <ul>
            <li><a href="<?=ROOT?>/Home">Home</a></li>
            <li><a href="<?=ROOT?>/Contact" class="contact-btn">Contact Us</a></li>
            <li><a href="<?=ROOT?>/Parts">Parts inquiry</a></li>
            <?php if((Authentication::is_admin())) {?>
                <li><a href="<?=ROOT?>/Admin" class="contact-btn">Admin</a></li>
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