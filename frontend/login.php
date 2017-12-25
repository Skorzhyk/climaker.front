<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/config.php' ?>

<form action="/actions/login.php" method="post">
    <div id="sign-data">
        <div>
            Sign in to CliMaker
        </div>
        <div class="user-input">
            <input type="email" name="email">
        </div>
        <div class="user-input">
            <input type="password" name="password">
        </div>
        <div id="response">
            <?php if (!empty($response)) { echo $response; } ?>
        </div>
    </div>

    <button id="main-button"> Sign in </button>
</form>