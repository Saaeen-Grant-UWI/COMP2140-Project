<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="my-information.css">
</head>
<body>
    <div class="appointment-form">
        <!-- My Information section -->
        <div class="my-information" id="my-information-section">
            <div class="your-information">
                <h3>Your Information</h3>
                <div class="circular-textbox">
                    <input type="text" placeholder="Enter First Name" name="f-name" autocomplete="given-name">
                </div>
                <div class="circular-textbox">
                    <input type="text" placeholder="Enter Last Name" name="l-name" autocomplete="family-name">
                </div>
                <div class="circular-textbox">
                    <input type="text" placeholder="Enter Email Address" name="email" autocomplete="email">
                </div>
                <div class="circular-textbox">
                    <input type="text" placeholder="Enter Phone Number" name="phone" autocomplete="tel">
                </div>
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
            <div class="buttons">
                <button id="Back">Back</button>
                <button id="Continue">Continue</button>
            </div>
        </div>
    </div>
</body>
</html>