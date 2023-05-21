<?php 
session_start();

function userCheck() {
if(isset($_POST['title']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['role'])) {
	$_SESSION['user'] = array(
		'title' => $_POST['title'],
		'first_name' => $_POST['first_name'],
		'last_name' => $_POST['last_name'],
		'role' => $_POST['role']
	);
}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe and Kayak | Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <header>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="all-adventures.php">Home</a></li>
                    <li><a href="index.php">Sign in</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="assets">
            <img src="images/hamburger.png" id="menu-btn" alt="menu icon">
            <a href="all-adventures.php" id="home">Halifax Canoe and Kayak</a>
            <img src="images/paddle-white.png" id="paddle-logo" alt="paddle logo">
        </div>
    </header>