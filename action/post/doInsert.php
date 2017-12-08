<?php

require '../connect.php';

$post = $_POST['post'];
if($post == ''){
	$query_string = '?message=Post harus diisi';
	header("Location:../../index.php$query_string");
	die();
}

session_start();
$user_id = $_SESSION['user_id'];

$query = "INSERT INTO posts(post, user_id) VALUES('$post', $user_id)";
mysqli_query($con, $query);

$query_string = '?message=Post berhasil dimasukkan';
header("Location:../../index.php$query_string");
die();
