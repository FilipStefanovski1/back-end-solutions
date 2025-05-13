<?php
session_start(); // start session

$email = $_SESSION['email'] ?? '';
$nickname = $_SESSION['nickname'] ?? '';
$street = $_SESSION['street'] ?? '';
$number = $_SESSION['number'] ?? '';
$city = $_SESSION['city'] ?? '';
$zipcode = $_SESSION['zipcode'] ?? '';
$focus = $_GET['focus'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['street'] = $_POST['street'] ?? '';
    $_SESSION['number'] = $_POST['number'] ?? '';
    $_SESSION['city'] = $_POST['city'] ?? '';
    $_SESSION['zipcode'] = $_POST['zipcode'] ?? '';
    header("Location: overview.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Address</title></head>
<body>
    <h2>Registration Details</h2>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
    <p>Nickname: <?php echo htmlspecialchars($nickname); ?></p>

    <h2>Part 2: Address</h2>
    <form method="POST" action="address.php">
        <label>Street</label><br>
        <input type="text" name="street" value="<?php echo htmlspecialchars($street); ?>" <?php if ($focus === 'street') echo 'autofocus'; ?>><br><br>

        <label>Number</label><br>
        <input type="text" name="number" value="<?php echo htmlspecialchars($number); ?>" <?php if ($focus === 'number') echo 'autofocus'; ?>><br><br>

        <label>City</label><br>
        <input type="text" name="city" value="<?php echo htmlspecialchars($city); ?>" <?php if ($focus === 'city') echo 'autofocus'; ?>><br><br>

        <label>Zipcode</label><br>
        <input type="text" name="zipcode" value="<?php echo htmlspecialchars($zipcode); ?>" <?php if ($focus === 'zipcode') echo 'autofocus'; ?>><br><br>

        <button type="submit">Next</button>
    </form>

    <br><a href="destroy.php">Reset Session</a>
</body>
</html>
