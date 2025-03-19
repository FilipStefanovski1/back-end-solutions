<?php
$username = "stijn";
$password = "azerty";

$message = "";

if (isset($_POST['submit'])) {
    $enteredUsername = isset($_POST['username']) ? $_POST['username'] : "";
    $enteredPassword = isset($_POST['password']) ? $_POST['password'] : "";

    if ($enteredUsername === $username && $enteredPassword === $password) {
        echo "<p class='success'>Welcome, $username! <a href='index.php'>Go Back</a></p>";
    } else {
        echo "<p class='error'>There was an error logging in, please try again. <a href='index.php'>Go Back</a></p>";
    }
}
?>
