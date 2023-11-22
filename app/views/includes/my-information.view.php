<div class="my-information">
    <div class="your-information">
        <h3>Your Information</h3>
        <input value="<?= Authentication::getFirst_Name() ?>" class="your-info-input" type="text" placeholder="Enter First Name" name="first_name" readonly>
        <input value="<?= Authentication::getLast_Name() ?>" class="your-info-input" type="text" placeholder="Enter Last Name" name="last_name" readonly>
        <input value="<?= Authentication::getEmail() ?>" class="your-info-input" type="email" placeholder="Enter Email Address" name="email" readonly>
        <input value="<?= Authentication::getPhone_Number() ?>" class="your-info-input" type="text" placeholder="Enter Phone Number" name="phone_number" readonly>
    </div>
    <div class="vehicle-information">
        <h3>Vehicle Information</h3>

        <div>
            <input class="vehicle-info-input" type="text" placeholder="Enter Year" name="year">

            <?php if(!(empty($data["errors"]['year']))) {?>
                    <div class="error-message"><?=$data["errors"]['year']?></div>
            <?php } ?>
        </div>
        <div>
            <input class="vehicle-info-input" type="text" placeholder="Enter Make" name="make">

            <?php if(!(empty($data["errors"]['make']))) {?>
                    <div class="error-message"><?=$data["errors"]['make']?></div>
            <?php } ?>
        </div>
        <div>
            <input class="vehicle-info-input" type="text" placeholder="Enter Model" name="model">

            <?php if(!(empty($data["errors"]['model']))) {?>
                    <div class="error-message"><?=$data["errors"]['model']?></div>
            <?php } ?>
        </div>
        <div>
            <input class="vehicle-info-input" type="text" placeholder="Enter Additional Model Info" name="add_model">

            <?php if(!(empty($data["errors"]['add_model']))) {?>
                    <div class="error-message"><?=$data["errors"]['add_model']?></div>
            <?php } ?>
        </div>
        <div>
            <input class="vehicle-info-input" type="text" placeholder="Enter Plate number" name="plate_number">

            <?php if(!(empty($data["errors"]['plate_number']))) {?>
                    <div class="error-message"><?=$data["errors"]['plate_number']?></div>
            <?php } ?>
        </div>
        <div class="exsisting-vehicle">
            <h4>Want to Set an appointment with a <br> vehicle we have worked on before?</h4>
            <input class="vehicle-info-get" type="text" placeholder="Enter VIN" name="form_vehicle_search">
        </div>
    </div>
</div>

          