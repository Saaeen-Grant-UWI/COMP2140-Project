<header>
    <div class="title">
        <p>GramacAuto</p>
    </div>

    <?php if(Authentication::logged_in()) { ?>
        <div class="name-container">
            <p><?=Authentication::getFirst_Name()." ".Authentication::getLast_Name()?></p>
            <a href="<?=ROOT?>/Logout" class="register-btn">Logout</a>
        </div>
    <?php } ?>
</header>