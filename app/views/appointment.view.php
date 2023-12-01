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

    <section class="appointment-form-section">
        <div class="container">
            <div class="form-progress">
                <div class="progress-section progress-active-text">
                    <p><span class="progress-active-number" >1</span>Appointment Details</p>
                    <div class="progressline progress-active-line"></div>
                </div>
                <div class="progress-section">
                    <p><span>2</span>My Information</p>
                    <div class="progressline"></div>
                </div>
                <div class="progress-section">
                    <p><span>3</span>Review & Submit</p>
                    <div class="progressline"></div>
                </div>                
            </div>
            <form id="appointment-form" action="" method="post">

                <div class="form-content-grid">
                    <div class="appointment-details">
                        <div class="date-input">
                            <h3>Preferred Date of Request</h3>
                            <input class="appoint-details-input" type="date" name="appointment_date" min="2023-01-01" max="2025-12-31" value="<?=set_value("appointment_date")?>"/>
                            <?php if(!(empty($data["errors"]['appointment_date']))) {?>
                                    <div class="error-message"><?=$data["errors"]['appointment_date']?></div>
                            <?php } ?>
                        </div>
                        <div class="appointment-time-options">
                            <h3>Preferred Date of Request</h3>
                           <div class="time-options">
                                <input class="appoint-details-input" id="timeslot-1" type="radio"  name="time" value="08:00AM - 10:00AM" <?= set_value('time')==='08:00AM - 10:00AM'? 'checked':''?> >
                                <label for="timeslot-1">08:00AM - 10:00AM</label>
                                <input class="appoint-details-input" id="timeslot-2" type="radio"  name="time" value="10:00AM - 12:00AM" <?= set_value('time')==='10:00AM - 12:00AM'? 'checked':''?> >
                                <label for="timeslot-2">10:00AM - 12:00AM</label>
                                <input class="appoint-details-input" id="timeslot-3" type="radio"  name="time" value="12:00AM - 02:00AM" <?= set_value('time')==='12:00AM - 02:00AM'? 'checked':''?> >
                                <label for="timeslot-3">12:00AM - 02:00AM</label>
                                <input class="appoint-details-input" id="timeslot-4" type="radio"  name="time" value="02:00AM - 04:00AM" <?= set_value('time')==='02:00AM - 04:00AM'? 'checked':''?> >
                                <label for="timeslot-4">02:00AM - 04:00AM</label>
                                <input class="appoint-details-input" id="timeslot-5" type="radio"  name="time" value="04:00AM - 05:00AM" <?= set_value('time')==='04:00AM - 05:00AM'? 'checked':''?> >
                                <label for="timeslot-5">04:00AM - 05:00AM</label>
                           </div>
                            
                            <?php if(!(empty($data["errors"]['time']))) {?>
                                    <div class="error-message"><?=$data["errors"]['time']?></div>
                            <?php } ?>
                        </div>

                        <div class="drop-off-container">
                            <h4>Vehicle Drop off?</h4>
                            <input class="appoint-details-input" type="radio" name="drop_off" value="drop off" <?= set_value('drop_off')==='drop off'? 'checked':''?>>
                            <label for="drop_off">Drop Off</label>
                            <input class="appoint-details-input" type="radio" name="drop_off" value="wait for" <?= set_value('drop_off')==='wait for'? 'checked':''?>>
                            <label for="drop_off">Wait For</label>
                            <?php if(!(empty($data["errors"]['drop_off']))) {?>
                                    <div class="error-message"><?=$data["errors"]['drop_off']?></div>
                            <?php } ?>
                        </div>

                        <div class="service-options">
                            <h3>Select Service(s)</h3>
                            <ul>
                                <?php $services = ['Alignment','Battery','Exhaust','Oil Change','Tires','Brakes','Suspension','Transmission','Engine','Heating & Cooling','Interior','Exterior','Electrical','Accessories','Body Work','Glass','Lights','Paint','Wheels']; ?>
                                <?php foreach ($services as $key => $service) : ?>
                                    <li>
                                        <input class="appoint-details-input" type="checkbox"  name="services[]" value="<?=$service?>" <?= set_value('services')!==""?  in_array($service, set_value('services'))? 'checked':'' :'' ?>>
                                        <label for="service"><?=$service?></label>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                            
                            <?php if(!(empty($data["errors"]['services']))) {?>
                                    <div class="error-message"><?=$data["errors"]['services']?></div>
                            <?php } ?>
                        </div>
                         <div class="form-button-section">
                            
                            <button type="button" id="app-details-continue">Continue</button>
                           

                        </div>
                    </div>


                    <div class="my-information hide">
                        <div class="your-information">
                            <h3>Your Information</h3>
                            <div>
                                <input value="<?= Authentication::getFirst_Name() ?>" class="your-info-input" type="text" placeholder="Enter First Name" name="first_name" readonly>
                            </div>
                            <div>
                                <input value="<?= Authentication::getLast_Name() ?>" class="your-info-input" type="text" placeholder="Enter Last Name" name="last_name" readonly>
                            </div>
                            <div>
                                <input value="<?= Authentication::getEmail() ?>" class="your-info-input" type="email" placeholder="Enter Email Address" name="email" readonly>
                            </div>
                            <div>
                                <input value="<?= Authentication::getPhone_Number() ?>" class="your-info-input" type="text" placeholder="Enter Phone Number" name="phone_number" readonly>
                            </div>
                        </div>
                        <div class="vehicle-information">
                            <h3>Vehicle Information</h3>

                            <div>
                                <input value="<?= set_value("year")?>" class="vehicle-info-input" type="text" placeholder="Enter Year" name="year">

                                <?php if(!(empty($data["errors"]['year']))) {?>
                                        <div class="error-message"><?=$data["errors"]['year']?></div>
                                <?php } ?>
                            </div>
                            <div>
                                <input value="<?= set_value("make")?>" class="vehicle-info-input" type="text" placeholder="Enter Make" name="make">

                                <?php if(!(empty($data["errors"]['make']))) {?>
                                        <div class="error-message"><?=$data["errors"]['make']?></div>
                                <?php } ?>
                            </div>
                            <div>
                                <input value="<?= set_value("model")?>" class="vehicle-info-input" type="text" placeholder="Enter Model" name="model">

                                <?php if(!(empty($data["errors"]['model']))) {?>
                                        <div class="error-message"><?=$data["errors"]['model']?></div>
                                <?php } ?>
                            </div>
                            <div>
                                <input value="<?= set_value("add_model")?>" class="vehicle-info-input" type="text" placeholder="Enter Additional Model Info" name="add_model">

                                <?php if(!(empty($data["errors"]['add_model']))) {?>
                                        <div class="error-message"><?=$data["errors"]['add_model']?></div>
                                <?php } ?>
                            </div>
                            <div>
                                <input value="<?= set_value("vehicle_plate_number")?>" class="vehicle-info-input" type="text" placeholder="Enter Plate number" name="vehicle_plate_number">

                                <?php if(!(empty($data["errors"]['vehicle_plate_number']))) {?>
                                        <div class="error-message"><?=$data["errors"]['vehicle_plate_number']?></div>
                                <?php } ?>
                            </div>
                            <!-- <div class="exsisting-vehicle">
                                <h4>Want to Set an appointment with a <br> vehicle we have worked on before?</h4>
                                <input class="vehicle-info-get" type="text" placeholder="Enter VIN" name="form_vehicle_search">
                            </div> -->
                        </div>
                        <div class="form-button-section">
                            <button type="button" id="my-info-back" >Back</button>
                            <button type="button" id="my-info-continue">Continue</button>
                        </div>
                    </div>
                    <?php 
                        $this->view('includes/review-submit');
                    ?>          
                </div>    
            </form>
        </div>
    </section>
    
</body>
</html>