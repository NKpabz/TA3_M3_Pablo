<?php $users = $users ?? []; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <h1>User Accounts</h1>
    <a href="/users/new">Add New User</a>
    <table border="1" cellpadding="5" style="margin-top: 15px;">
        <tr>
            <th>Avatar</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $u): ?>
        <tr>
            <td>
                <?php if (!empty($u['avatar'])): ?>
                    <img src="/uploads/<?= $u['avatar'] ?>" width="50" height="50">
                <?php else: ?>
                    <img src="/uploads/default.png" width="50" height="50">
                <?php endif; ?>
            </td>
            <td><?= $u['username'] ?></td>
            <td><?= $u['full_name'] ?></td>
            <td>
                <a href="/users/edit/<?= $u['id'] ?>">Edit</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="/customers">Go to Customers</a>
</body>
</html>