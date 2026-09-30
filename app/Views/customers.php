<!DOCTYPE html>
<html>
<head><title>Customer Accounts</title></head>
<body>
    <?= view('partials/nav') ?>
    <h1>Customer Accounts</h1>
    <table border="1" cellpadding="8">
        <tr><th>Full Name</th><th>Email</th><th>Phone</th></tr>
        <?php foreach ($customers as $c): ?>
            <tr>
                <td><?= esc($c['name']) ?></td>
                <td><?= esc($c['email']) ?></td>
                <td><?= esc($c['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>