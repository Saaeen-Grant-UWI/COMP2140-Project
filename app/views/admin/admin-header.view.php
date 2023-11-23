<header>
    <div class="title">
        <p>GramacAuto</p>
    </div>

    <?php if(Authentication::logged_in()) { ?>
        <div class="name-container">
            <p><?=Authentication::getFirst_Name()." ".Authentication::getLast_Name()?></p>
        </div>
    <?php } ?>
</header>