 <?php
// block if not logged in
if (!isset($_COOKIE['auth']) || $_COOKIE['auth'] !== 'true') {
    header("Location: login.php");
    exit;
}

// logout
if (isset($_GET['logout'])) {
    setcookie("auth", "", time() - 3600); // delete cookie
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h2>Dashboard</h2>
    <p>You are logged in.</p>
    <a href="dashboard.php?logout=true">Logout</a>
</body>
</html>
