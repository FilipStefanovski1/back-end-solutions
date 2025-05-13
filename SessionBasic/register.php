<?php
session_start(); // start session

$email = $_SESSION['email'] ?? '';
$nickname = $_SESSION['nickname'] ?? '';
$focus = $_GET['focus'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['email'] = $_POST['email'] ?? '';
    $_SESSION['nickname'] = $_POST['nickname'] ?? '';
    header("Location: address.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <h2>Part 1: Registration Details</h2>
    <form method="POST" action="register.php">
        <label>Email</label><br>
        <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" <?php if ($focus === 'email') echo 'autofocus'; ?> required><br><br>

        <label>Nickname</label><br>
        <input type="text" name="nickname" value="<?php echo htmlspecialchars($nickname); ?>" <?php if ($focus === 'nickname') echo 'autofocus'; ?> required><br><br>

        <button type="submit">Next</button>
    </form>
</body>
</html>
