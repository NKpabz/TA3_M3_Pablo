<?php $customers = $customers ?? []; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Customer Accounts</title>
</head>
<body>
    <h1>Customer Accounts</h1>
    <a href="/customers/new">Add New Customer</a>
    <table border="1" cellpadding="5" style="margin-top: 15px;">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($customers as $c): ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['full_name'] ?></td>
            <td><?= $c['email'] ?></td>
            <td><?= $c['phone'] ?></td>
            <td>
                <a href="/customers/edit/<?= $c['id'] ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="/users">Go to Users</a>
</body>
</html>