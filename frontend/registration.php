<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/config.php' ?>

<a href="/frontend/login.php">
    <button id="change-sign-button"> Sign in </button>
</a>

<form action="/actions/registration.php" method="post">
    <div id="sign-data">
        <div>
            Sign up to CliMaker
        </div>
        <div class="user-input">
            <input type="email" name="email" placeholder="E-mail">
        </div>
        <div class="user-input">
            <input name="name" placeholder="Name (only letters)" pattern="^[a-zA-Z]+$" required>
        </div>
        <div class="user-input">
            <input name="surname" placeholder="Surname (only letters)" pattern="^[a-zA-Z]+$" required>
        </div>
        <div class="user-input">
            <input type="tel" name="telephone_number" placeholder="Telephone number" required>
        </div>
        <div class="user-input">
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div id="response">
            <?php if (!empty($response)) { echo $response; } ?>
        </div>
    </div>
    <button class="center-button"> Sign up </button>
</form>