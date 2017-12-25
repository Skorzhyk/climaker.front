<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/config.php' ?>

<form action="/actions/registration.php" method="post">
    <div id="sign-data">
        <div>
            Sign up to CliMaker
        </div>
        <div class="user-input">
            <input type="email" name="email">
        </div>
        <div class="user-input">
            <input name="name">
        </div>
        <div class="user-input">
            <input name="surname">
        </div>
        <div class="user-input">
            <input name="telephone_number">
        </div>
        <div class="user-input">
            <input type="password" name="password">
        </div>
        <div id="response">
            <?php if (!empty($response)) { echo $response; } ?>
        </div>
    </div>
    <button class="center-button"> Sign up </button>
</form>