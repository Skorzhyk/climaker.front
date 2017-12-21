<?php require_once 'header.php' ?>

<script src="frontend/js/activeForm.js"></script>

<form action="../actions/editRoom.php" method="post">
    <input id="room-id" name="id" value="<?php if (!empty($room)) echo $room['id'] ?>" hidden>
    <div class="room-name">
        <div class="current" id="current-name">
            <?php if (!empty($room)) echo $room['name'] ?>
        </div>
        <input class="param-input" name="name" value="<?php if (!empty($room)) echo $room['name'] ?>" placeholder="Name" hidden>
    </div>
    <div class="room-params">
        <div class="room-param">
            <div> Temperature </div>
            <div class="room-param-value current">
                <?php if (!empty($room)) echo $room['current_temperature'] . '°C' ?>
            </div>
            <input class="room-param-input param-input" name="temperature" value="<?php if (!empty($room)) echo $room['custom_temperature'] ?>" hidden>
        </div>
        <div class="room-param">
            <div> Humidity </div>
            <div class="room-param-value current">
                <?php if (!empty($room)) echo $room['current_humidity'] . ' %' ?>
            </div>
            <input class="room-param-input param-input" name="humidity" value="<?php if (!empty($room)) echo $room['custom_humidity'] ?>" hidden>
        </div>
    </div>
    <button id="main-button" class="edit"> Edit </button>
</form>
