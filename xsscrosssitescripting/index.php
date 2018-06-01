<?php

require 'functions.php';

	$db = new PDO('mysql:host=127.0.0.1;dbname=crosssite', 'root', '');

if(!isset($_GET['username'])) {
	die();
}

$user = $db->prepare("SELECT * FROM users WHERE username = :username");

$user->execute([
	'username' => $_GET['username'],
]);

$user = $user->fetchObject();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Profile</title>
</head>
<body>
	<h2><?php echo e($user->username); ?></h2>
	<p><?php echo e($user->bio); ?></p>
</body>
</html>