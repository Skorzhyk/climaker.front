<?php require_once 'header.php' ?>

<script src="frontend/js/activeForm.js"></script>

<?php foreach ($templates as $template) : ?>
    <form action="../actions/editTemplate.php?id=<?php echo $template['id'] ?>" method="post">
        <div class="oneOfTemplates">
            <div class="template-name">
                <div class="current">
                    <?php echo $template['name'] ?>
                </div>
                <input class="param-input" name="name" value="<?php echo $template['name'] ?>" placeholder="Name" hidden>
            </div>
            <div class="template-params">
                <div class="template-param">
                    <div class="template-param-name"> Temperature </div>
                    <div class="current">
                        <?php echo $template['temperature'] . '°C' ?>
                    </div>
                    <input class="template-param-input param-input" name="temperature" value="<?php echo $template['temperature'] ?>" hidden>
                </div>
                <div class="template-param">
                    <div class="template-param-name"> Humidity </div>
                    <div class="current">
                        <?php echo $template['humidity'] . ' %' ?>
                    </div>
                    <input class="template-param-input param-input" name="humidity" value="<?php echo $template['humidity'] ?>" hidden>
                </div>
            </div>
        </div>
        <button id="main-button" class="edit"> Edit </button>
    </form>
<?php endforeach; ?>
