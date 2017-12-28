<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/header.php' ?>

<script src="/frontend/js/activeForm.js"></script>

<?php if (!empty($room)): ?>
    <a href="/actions/deleteRoom.php?id=<?php echo $room['id'] ?>">
        <button id="delete-room-button"> Delete </button>
    </a>
<?php endif; ?>

<form action="/actions/editRoom.php" method="post">
    <input id="room-id" name="id" value="<?php if (!empty($room)) echo $room['id'] ?>" hidden>
    <div class="room-name">
        <div class="current" id="current-name">
            <?php if (!empty($room)) echo $room['name'] ?>
        </div>
        <input class="param-input" name="name" value="<?php if (!empty($room)) echo $room['name'] ?>" placeholder="Name (letters or numbers)" pattern="^[a-zA-Z0-9 ]+$" required hidden>
    </div>
    <div class="room-params">
        <div class="room-param">
            <div> Temperature </div>
            <div class="room-param-value current">
                <?php if (!empty($room)) echo $room['current_temperature'] . '°C' ?>
            </div>
            <input class="room-param-input param-input" name="temperature" value="<?php if (!empty($room)) echo $room['custom_temperature'] ?>" pattern="[0-9]{1,2}" required hidden>
        </div>
        <div class="room-param">
            <div> Humidity </div>
            <div class="room-param-value current">
                <?php if (!empty($room)) echo $room['current_humidity'] . ' %' ?>
            </div>
            <input class="room-param-input param-input" name="humidity" value="<?php if (!empty($room)) echo $room['custom_humidity'] ?>" pattern="[0-9]{1,2}" required hidden>
        </div>
        <button id="add-template-button" class="center-button param-input" type="button" hidden> Choose template </button>
        <div id="templates-in-room" hidden>
            <?php foreach ($templates as $template) : ?>
                <div class="template-in-room" title="<?php echo $template['name'] ?>">
                    <div class="template-name-list">
                        <?php echo $template['name'] ?>
                    </div>
                    <span class="temperature" hidden>
                        <?php echo $template['temperature'] ?>
                    </span>
                    <span class="humidity" hidden>
                        <?php echo $template['humidity'] ?>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <button class="edit edit-button center-button"> Edit </button>
</form>

<script>
    $(function() {
        var id = $('#room-id').val();
        if (!id) {
            active($(".edit-button").parent());
        }

        $('body').on('click', '.edit-button', function () {
            if ($(this).hasClass('edit')) {
                return active($(this).parent());
            }
        });

        $('body').on('click', '#add-template-button', function () {
            $('#templates-in-room').show();
            $(this).hide();
        });

        $('body').on('click', '.template-in-room', function () {
            $("[name = 'temperature']").val($(this).find('.temperature').text().trim());
            $("[name = 'humidity']").val($(this).find('.humidity').text().trim());
        });
    });
</script>
