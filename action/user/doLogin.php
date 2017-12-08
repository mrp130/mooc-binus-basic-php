<?php

require '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$err_username = '';
$err_password = '';

if($username == '')
	$err_username = 'Username harus diisi';

if($password == '')
	$err_password = 'Password harus diisi';

if($err_username != '' || $err_password != ''){
	$query_string = "?err_login_username=$err_username";
	$query_string .= "&err_login_password=$err_password";
	header("Location:../../login.php$query_string");
	die();
}

$password = md5($password);
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result) == 0){
	$query_string = '?login_message=Login gagal';
	header("Location:../../login.php$query_string");
	die();
}

$user = mysqli_fetch_assoc($result);

session_start();
$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];
header("Location:../../index.php");
die();