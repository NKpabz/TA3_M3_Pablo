<?php helper('form'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
</head>
<body>
    <h1>Add New Customer</h1>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/customers/create" method="post">
        <label>Full Name:</label><br>
        <input type="text" name="full_name" value="<?= old('full_name') ?>"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= old('email') ?>"><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="<?= old('phone') ?>"><br><br>

        <button type="submit">Save Customer</button>
    </form>
    <br>
    <a href="/customers">Back to Customers</a>
</body>
</html>