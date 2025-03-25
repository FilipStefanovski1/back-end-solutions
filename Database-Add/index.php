<?php
require 'connection.php';

$confirmDelete = false;
$selectedUser = null;

// Handle soft delete
if (isset($_POST['confirm_delete'])) {
    $id = (int)$_POST['id'];
    $stmt = $pdo->prepare("UPDATE users SET SoftDeleted = 1 WHERE id = ?");
    $stmt->execute([$id]);
    header("Location: index.php");
    exit;
}

// Cancel deletion
if (isset($_POST['cancel'])) {
    header("Location: index.php");
    exit;
}

// Check if a user is selected for deletion
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->execute([$id]);
    $selectedUser = $stmt->fetch();
    if ($selectedUser) {
        $confirmDelete = true;
    }
}

// Fetch users who are NOT soft-deleted
$stmt = $pdo->query("SELECT * FROM users WHERE SoftDeleted = 0 ORDER BY id ASC");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

    <h2>Dashboard</h2>
    <h3>User Overview</h3>

    <?php if ($confirmDelete && $selectedUser): ?>
        <div style="background-color: #e3f3ff; padding: 15px; margin-bottom: 20px;">
            You are about to delete <strong>"<?= htmlspecialchars($selectedUser['username']) ?>"</strong> (id: <?= $selectedUser['id'] ?>). Are you sure?
            <form method="post" style="margin-top: 10px;">
                <input type="hidden" name="id" value="<?= $selectedUser['id'] ?>">
                <button type="submit" name="confirm_delete">Delete</button>
                <button type="submit" name="cancel">Cancel</button>
            </form>
        </div>
    <?php endif; ?>

    <?php if (count($users) > 0): ?>
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= htmlspecialchars($user['username']) ?></td>
                    <td><?= htmlspecialchars($user['password']) ?></td>
                    <td><a href="index.php?delete=<?= $user['id'] ?>">[x]</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No users found.</p>
    <?php endif; ?>

</body>
</html>
