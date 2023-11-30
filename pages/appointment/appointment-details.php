<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $('div button').on('click', function() {
            $(this).siblings('button').removeClass('clicked');

            $(this).addClass('clicked');
        });
        $('a[href^="#"]').on('click', function(event) {
            var target = $($(this).attr('href'));
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
            }
        });
    });
    </script>
    
    <link rel="stylesheet" type="text/css" href="appointment.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<container>
<body>
    <div class="appointment-form">
        <div class="progress-title">	
            <ul id="progressbar">
                <li class="active">Appointment Details</li>
                <li><a href="#my-information-section">My Information</a></li>
                <li>Review & Submit</li>
            </ul>
        </div>
        <div>
            <h2>Preferred Date of Request</h2>
            <input type="date" id="request-date" name="request-date">
        </div>
        <div id="times">
            <h2>Preferred Time</h2>
            <button type="button" >08:00AM - 10:00 AM</button>
            <button type="button" >10:00AM - 12:00 PM</button>
            <button type="button" >12:00AM - 02:00 PM</button>
            <button type="button" >02:00AM - 04:00 PM</button>
            <button type="button" >04:00AM - 06:00 PM</button>
            
        </div>

        <div class="radio-options">
            <h2>Vehicle Drop off</h2>
            <label><input type="radio" name="vehicle-drop-off" value="vehicle-drop-off"> Drop it off</label>
            <label><input type="radio" name="vehicle-drop-off" value="wait">Wait for it</label>
        </div>
        <h2>Service(s) Needed</h2>
        <div class="checkbox-options">
            
            <label><input type="checkbox" > Alignment</label>
            <label><input type="checkbox" > Battery</label>
            <label><input type="checkbox" > Exhaust</label>
            <label><input type="checkbox" > Oil Change</label>
            <label><input type="checkbox" > Tires</label>
            <label><input type="checkbox" > Brakes</label>
            <label><input type="checkbox" > Suspension</label>
            <label><input type="checkbox" > Transmission</label>
            <label><input type="checkbox" > Engine</label>
            <label><input type="checkbox" > Heating & Cooling</label>
            <label><input type="checkbox" > Interior</label>
            <label><input type="checkbox" > Exterior</label>
            <label><input type="checkbox" > Electrical</label>
            <label><input type="checkbox" > Accessories</label>
            <label><input type="checkbox" > Body Work</label>
            <label><input type="checkbox" > Glass</label>
            <label><input type="checkbox" > Lights</label>
            <label><input type="checkbox" > Paint</label>
            <label><input type="checkbox" > Wheels</label>
            <label><input type="checkbox" > Other</label>
        </div>
        <div>
            <h2>Additional Comments</h2>
            <textarea name="comments" id="comments" cols="45" rows="1"></textarea>
        </div>
        <!-- my-information.php -->
        <h2><a href="#my-information-section">My Information</a></h2>
        <?php include('../includes/my-information.php'); ?>
        <div class="my-information">
            <div class="your-information">
                <h3>Your Information</h3>
                <input type="text" placeholder="Enter First Name" name="f-name" autocomplete="given-name">
                <input type="text" placeholder="Enter Last Name" name="l-name" autocomplete="family-name">
                <input type="text" placeholder="Enter Email Address" name="email" autocomplete="email">
                <input type="text" placeholder="Enter Phone Number" name="phone" autocomplete="tel">
            </div>
            <div class="vehicle-information">
                <h3>Vehicle Information</h3>
                <select name="year" id="yearDropdown">
                    <?php
                        $currentYear = date("Y");
                        for ($year = 2000; $year <= 2025; $year++) {
                            echo "<option value=\"$year\">$year</option>";
                        }
                    ?>
                </select>
                <input type="text" placeholder="Enter Make" name="make">
                <input type="text" placeholder="Enter Model" name="model">
                <input type="text" placeholder="Enter Additional Model Info" name="add-model">
            </div>
        </div>
        <button id="Continue" >Continue</button>
    </div>
</body>
</container>
</html>
