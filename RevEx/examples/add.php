<?php
require_once 'connection.php';

$username = '';
$password = '';
$confirm = '';
$success = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm = $_POST['confirm'] ?? '';

    // Username validation
    if (empty($username)) {
        $errors['username'] = "Username is required.";
    } else {
        // Check for duplicates
        $stmt = $db->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
        $stmt->execute([$username]);
        if ($stmt->fetchColumn() > 0) {
            $errors['username'] = "Username already exists.";
        }
    }

    // Password validation
    if (empty($password)) {
        $errors['password'] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors['password'] = "Password must be at least 8 characters.";
    } elseif (!preg_match('/[!@?_]/', $password)) {
        $errors['password'] = "Password must include ! @ ? _";
    }

    // Confirm match
    if ($password !== $confirm) {
        $errors['confirm'] = "Passwords do not match.";
    }

    // If no errors, insert
    if (empty($errors)) {
        $stmt = $db->prepare("INSERT INTO users (username, password, created_at) VALUES (?, ?, ?)");
        $stmt->execute([
            $username,
            $password, // Note: Hash in real-world apps!
            date('Y-m-d H:i:s')
        ]);
        $success = "User registered successfully!";
        $username = $password = $confirm = ''; // Reset form
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <h2>Register</h2>

    <?php if ($success): ?>
        <p style="color:green"><?= $success ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username" value="<?= htmlspecialchars($username) ?>"><br>
        <?php if (isset($errors['username'])): ?>
            <small style="color:red"><?= $errors['username'] ?></small><br>
        <?php endif; ?>

        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <?php if (isset($errors['password'])): ?>
            <small style="color:red"><?= $errors['password'] ?></small><br>
        <?php endif; ?>

        <label>Confirm Password:</label><br>
        <input type="password" name="confirm"><br>
        <?php if (isset($errors['confirm'])): ?>
            <small style="color:red"><?= $errors['confirm'] ?></small><br>
        <?php endif; ?>

        <br><button type="submit">Submit</button>
    </form>
</body>
</html>
