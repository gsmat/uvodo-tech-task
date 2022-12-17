<?php
include 'UserRepository.php';
include 'UserController.php';
include 'User.php';
include 'Response.php';

$dsn = "mysql:host=localhost;dbname=uvodo";
try {
	$pdo = new PDO($dsn, "root", "");
} catch (Exception $e) {
	//something a user can understand
	error_log($e->getMessage());
	exit('Something weird happened');
}
$users = new UserRepository($pdo);
$userController = new UserController($users);
if ($_SERVER['REQUEST_URI'] === "/user/create" && $_SERVER['REQUEST_METHOD'] === 'POST') {
	$requestData = $_POST;
	$params = [
		'email' => $requestData['email']?:'null',
		'first_name' => $requestData['first_name']?:'null',
		'last_name' => $requestData['last_name']?:'null'
	];
	$userController->addUser($params);
} elseif ($_SERVER['REQUEST_URI'] === "/users" && $_SERVER['REQUEST_METHOD'] === 'GET') {

	try {
		echo Response::json(['users' => $userController->getUsers()],200);
	} catch (JsonException $e) {
		return $e->getMessage();
	}

} else {
	echo Response::json([
		'error' => 'Url Not found'
	], 404);
}

// Create the "controller Instance"

// Create new User
//$params = [
//	'email' => 'testUser@gmail.com',
//	'first_name' => 'Test',
//	'last_name' => 'User'
//];
//var_export($userController->addUser($params));
//
//// Fetch the all users from the database
//var_export($userController->getUsers());


