<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/header.php' ?>

<a href="/room.php">
    <button id="edit-button" class="center-button"> New </button>
</a>

<div>
    <?php foreach ($rooms as $room) : ?>
        <div class="oneOfRooms">
            <a href="/room.php?id=<?php echo $room['id'] ?>" title="<?php echo $room['name'] ?>">
                <div class="room-name-list">
                    <?php echo $room['name'] ?>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
