<?php 
helper('form'); 
$user = $user ?? [];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h1>Edit User</h1>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/users/update/<?= $user['id'] ?? '' ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="old_avatar" value="<?= $user['avatar'] ?? '' ?>">

        <label>Username:</label><br>
        <input type="text" name="username" value="<?= old('username', $user['username'] ?? '') ?>"><br><br>

        <label>Full Name:</label><br>
        <input type="text" name="full_name" value="<?= old('full_name', $user['full_name'] ?? '') ?>"><br><br>

        <label>Avatar (JPG/PNG, max 2MB):</label><br>
        <?php if (!empty($user['avatar'] ?? '')): ?>
            <img src="/uploads/<?= $user['avatar'] ?>" width="80"><br>
        <?php endif; ?>
        <input type="file" name="avatar"><br><br>

        <button type="submit">Update User</button>
    </form>
    <br>
    <a href="/users">Back to Users</a>
</body>
</html>