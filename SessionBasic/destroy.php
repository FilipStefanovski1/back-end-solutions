<?php
session_start(); // start session
session_destroy();
header("Location: register.php");
exit;
