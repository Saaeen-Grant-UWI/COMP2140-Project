<div class="appointment-details">
    <label for="appointment-date">Preferred Date of Request</label>
    <input type="date" name="appointment-date" min="2023-01-01" max="2025-12-31" />
    <div class="appointment-time-options">
        <input type="radio"  name="time" value="time1">
        <label for="time">08:00AM - 10:00AM</label>
        <input type="radio"  name="time" value="time2">
        <label for="time">10:00AM - 12:00AM</label>
        <input type="radio"  name="time" value="time3">
        <label for="time">12:00AM - 02:00AM</label>
        <input type="radio"  name="time" value="time4">
        <label for="time">02:00AM - 04:00AM</label>
        <input type="radio"  name="time" value="time5">
        <label for="time">04:00AM - 05:00AM</label>
    </div>

    <div class="drop-off-container">
        <h4>Vehicle Drop off?</h4>
        <input type="radio"  name="drop-off" value="drop-off">
        <label for="drop-off">Drop Off</label>
        <input type="radio"  name="drop-off" value="wait-for">
        <label for="drop-off">Wait For</label>
    </div>

    <div class="service-options">
        <ul>
            <?php for ($i = 1;$i <= 16; $i++) : ?>
                <li>
                    <input type="checkbox"  name="service" value="service<?=$i?>">
                    <label for="service">Service <?=$i?></label>
                </li>
            <?php endfor ?>
        </ul>
    </div>
</div>