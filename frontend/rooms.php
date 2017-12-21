<?php require_once 'header.php' ?>

<button id="main-button" href="../actions/editRoom.php"> New </button>

<div>
    <?php foreach ($rooms as $room) : ?>
        <div class="oneOfRooms">
            <a href="room.php?id=<?php echo $room['id'] ?>"> 
                <div class="room-name-list">
                    <?php echo $room['name'] ?>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
