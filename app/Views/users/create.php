<?php helper('form'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h1>Add New User</h1>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/users/create" method="post">
        <label>Username:</label><br>
        <input type="text" name="username" value="<?= old('username') ?>"><br><br>

        <label>Full Name:</label><br>
        <input type="text" name="full_name" value="<?= old('full_name') ?>"><br><br>

        <button type="submit">Save User</button>
    </form>
    <br>
    <a href="/users">Back to Users</a>
</body>
</html>