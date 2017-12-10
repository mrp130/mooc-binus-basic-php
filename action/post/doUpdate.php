<?php

require '../connect.php';
require '../global_function.php';

$id = $_POST['id'];
$query = "SELECT * FROM posts where id = $id";
$result = mysqli_query($con, $query);
$post = mysqli_fetch_assoc($result);
if(!isUser($post['user_id'])){
	header('Location:../../index.php');
	die();
}

$post = $_POST['post'];

if($post == ""){
	$query_string = "?err=Post harus diisi";
	$query_string .= "&id=$id";
	header("Location:../../update-post.php$query_string");
	die();
}

$query = "UPDATE posts SET post = '$post' WHERE id = $id";
mysqli_query($con, $query);

header('Location:../../index.php');