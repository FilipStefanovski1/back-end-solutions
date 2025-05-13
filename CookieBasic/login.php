<?php
session_start(); // start session

// redirect if already logged in
if (isset($_COOKIE['auth']) && $_COOKIE['auth'] === 'true') {
    header("Location: dashboard.php");
    exit;
}

$error = '';

// handle login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usernameInput = $_POST['username'] ?? '';
    $passwordInput = $_POST['password'] ?? '';

    // read credentials
    if (file_exists("users.txt")) {
        $data = file_get_contents("users.txt");
        $parts = explode(",", trim($data));

        if (count($parts) === 2) {
            [$storedUser, $storedPass] = $parts;

            // check login
            if ($usernameInput === $storedUser && $passwordInput === $storedPass) {
                setcookie("auth", "true", time() + (6 * 60)); // 6 min cookie
                header("Location: dashboard.php");
                exit;
            } else {
                $error = "username and/or password incorrect. try again.";
            }
        } else {
            $error = "login data is corrupted.";
        }
    } else {
        $error = "users.txt file not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <h2>Login</h2>
    <?php if ($error): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
