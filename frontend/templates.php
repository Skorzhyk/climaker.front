<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/header.php' ?>

<script src="/frontend/js/activeForm.js"></script>

<?php foreach ($templates as $template) : ?>
    <form action="/actions/editTemplate.php?id=<?php echo $template['id'] ?>" method="post">
        <div class="oneOfTemplates">
            <div class="template-name">
                <div class="current">
                    <?php echo $template['name'] ?>
                </div>
                <input class="param-input" name="name" value="<?php echo $template['name'] ?>" placeholder="Name" required hidden>
            </div>
            <div class="template-params">
                <div class="template-param">
                    <div class="template-param-name"> Temperature </div>
                    <div class="current">
                        <?php echo $template['temperature'] . '°C' ?>
                    </div>
                    <input class="template-param-input param-input" name="temperature" value="<?php echo $template['temperature'] ?>" pattern="[0-9]{1,2}" required hidden>
                </div>
                <div class="template-param">
                    <div class="template-param-name"> Humidity </div>
                    <div class="current">
                        <?php echo $template['humidity'] . ' %' ?>
                    </div>
                    <input type="number" class="template-param-input param-input" name="humidity" value="<?php echo $template['humidity'] ?>" pattern="[0-9]{1,2}" required hidden>
                </div>
            </div>
        </div>
        <button class="edit edit-button center-button"> Edit </button>
        <a href="/actions/deleteTemplate.php?id=<?php echo $template['id'] ?>">
            <button class="delete-template-button" type="button"> Delete </button>
        </a>
    </form>
<?php endforeach; ?>

<form action="/actions/editTemplate.php" method="post">
    <div class="oneOfTemplates" hidden>
        <div class="template-name">
            <input class="param-input" name="name" placeholder="Name (letters and numbers)" pattern="^[a-zA-Z0-9 ]+$" required hidden>
        </div>
        <div class="template-params">
            <div class="template-param">
                <div class="template-param-name"> Temperature </div>
                <input class="template-param-input param-input" name="temperature" pattern="[0-9]{1,2}" required hidden>
            </div>
            <div class="template-param">
                <div class="template-param-name"> Humidity </div>
                <input class="template-param-input param-input" name="humidity" pattern="[0-9]{1,2}" required hidden>
            </div>
        </div>
    </div>
    <button class="edit edit-button center-button"> Add </button>
</form>

<script>
    $(function() {
        $('body').on('click', '.edit-button', function () {
            if ($(this).hasClass('edit')) {
                elem = $(this).parent();
                elem.find('.oneOfTemplates').show();
                return active(elem);
            }
        });
    });
</script>
