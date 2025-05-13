<?php
session_start(); // start session

$email = $_SESSION['email'] ?? '';
$nickname = $_SESSION['nickname'] ?? '';
$street = $_SESSION['street'] ?? '';
$number = $_SESSION['number'] ?? '';
$city = $_SESSION['city'] ?? '';
$zipcode = $_SESSION['zipcode'] ?? '';
?>

<!DOCTYPE html>
<html>
<head><title>Overview</title></head>
<body>
    <h2>Overview Page</h2>
    <p>Email: <?php echo htmlspecialchars($email); ?> | <a href="register.php?focus=email">Edit</a></p>
    <p>Nickname: <?php echo htmlspecialchars($nickname); ?> | <a href="register.php?focus=nickname">Edit</a></p>
    <p>Street: <?php echo htmlspecialchars($street); ?> | <a href="address.php?focus=street">Edit</a></p>
    <p>Number: <?php echo htmlspecialchars($number); ?> | <a href="address.php?focus=number">Edit</a></p>
    <p>City: <?php echo htmlspecialchars($city); ?> | <a href="address.php?focus=city">Edit</a></p>
    <p>Zipcode: <?php echo htmlspecialchars($zipcode); ?> | <a href="address.php?focus=zipcode">Edit</a></p>
</body>
</html>
