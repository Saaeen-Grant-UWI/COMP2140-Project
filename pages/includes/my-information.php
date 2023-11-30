<div class="my-information" id="my-information-section">
    <div class="your-information">
        <h3>Your Information</h3>
        <input type="text" placeholder="Enter First Name" name="f-name">
        <input type="text" placeholder="Enter Last Name" name="l-name">
        <input type="text" placeholder="Enter Email Address" name="email">
        <input type="text" placeholder="Enter Phone Number" name="phone">
    </div>
    <div class="vehicle-information">
    <h3>Vehicle Information</h3>
        <select name="year" id="yearDropdown">
            <script>
                var currentYear = new Date().getFullYear();
                for (var year = 2000; year <= 2025; year++) {
                document.write("<option value=\"" + year + "\">" + year + "</option>");
                }
            </script>
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