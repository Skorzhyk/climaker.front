<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/frontend/header.php' ?>

<form action="/actions/editUser.php?id=<?php echo $user['id'] ?>" method="post">
    <div id="user-data">
        <div>
            <?php echo $user['email'] ?>
        </div>
        <div class="user-input">
            <input name="name" value="<?php echo $user['name'] ?>" placeholder="Name">
        </div>
        <div class="user-input">
            <input class="user-input" name="surname" value="<?php echo $user['surname'] ?>" placeholder="Surname" required>
        </div>
        <div class="user-input">
            <input class="user-input" name="telephone_number" value="<?php echo $user['telephone_number'] ?>" placeholder="Telephone number" required>
        </div>
        <div class="user-input">
            <input class="user-input" name="current_password" type="password" placeholder="Current password" required>
        </div>
        <div class="user-input">
            <input class="user-input" name="new_password" type="password" placeholder="New password">
        </div>
        <div id="response">
            <?php echo $response ?>
        </div>
    </div>
    <button class="center-button"> Save </button>
</form>
