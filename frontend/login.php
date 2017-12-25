<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/config.php' ?>

<a href="/frontend/registration.php">
    <button id="registration-button"> SIgn up </button>
</a>

<form action="/actions/login.php" method="post">
    <div id="sign-data">
        <div>
            Sign in to CliMaker
        </div>
        <div class="user-input">
            <input type="email" name="email" placeholder="E-mail">
        </div>
        <div class="user-input">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div id="response">
            <?php if (!empty($response)) { echo $response; } ?>
        </div>
    </div>

    <button class="center-button"> Sign in </button>
</form>