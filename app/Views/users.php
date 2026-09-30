<!DOCTYPE html>
<html>
<head><title>User Accounts</title></head>
<body>
    <?= view('partials/nav') ?>
    <h1>User / Staff Accounts</h1>
    <table border="1" cellpadding="8">
        <tr><th>Username</th><th>Full Name</th><th>Role</th></tr>
        <?php foreach ($users as $u): ?>
            <tr>
                <td><?= esc($u['username']) ?></td>
                <td><?= esc($u['fullname']) ?></td>
                <td><?= esc($u['role']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>