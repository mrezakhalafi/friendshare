<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$dsn = "mysql:host=localhost;dbname=friendshare";
$pdo = new PDO($dsn, 'root', '');

$sql = "SELECT * FROM user
		WHERE username = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);

if($row = $stmt->fetch()){

	echo "User Ada";

	if(password_verify($password, $row['password'])){
		echo "Password Cocok";

		$_SESSION['username'] = $row['username'];
		header('Location: ../main.php');
	}else{
		echo "Password Ga Cocok";
	}
}else{
	echo "User Ga Ada";
}