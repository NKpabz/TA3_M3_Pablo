<?php 
helper('form'); 
$customer = $customer ?? [];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>
    <h1>Edit Customer</h1>

    <?php if (isset($validation)): ?>
        <div style="color: red;">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <form action="/customers/update/<?= $customer['id'] ?? '' ?>" method="post">
        <label>Full Name:</label><br>
        <input type="text" name="full_name" value="<?= old('full_name', $customer['full_name'] ?? '') ?>"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?= old('email', $customer['email'] ?? '') ?>"><br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="<?= old('phone', $customer['phone'] ?? '') ?>"><br><br>

        <button type="submit">Update Customer</button>
    </form>
    <br>
    <a href="/customers">Back to Customers</a>
</body>
</html>