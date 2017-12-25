<?php require_once 'header.php' ?>

<a href="room.php">
    <button id="main-button"> New </button>
</a>

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
