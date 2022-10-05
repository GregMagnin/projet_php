<?php



function loginUser(string $name, string $password): array {
require_once '../database/db.php';
$sql = "SELECT *  FROM user WHERE name = :name ";
$query = $connection ->prepare($sql); 
$query->bindParam(':username', $name, PDO::PARAM_STR);
$query->bindParam(':password', $password, PDO::PARAM_STR);
if ($query->execute()) { 
	if ($query->rowcount() == 1) { 
		if($row =$query->fetch()) { 
		$name = $row['name']; $hashed_password = $row['psw'];
			if(password_verify($password, $hashed_password)) { 
			session_start();
			$_SESSION["loggedin"] = true; 
			$_SESSION["id"] = $id; 
			$_SESSION["name"] = $name; 
			header("Location: ../views/welcomeView.php"); } } } } }
