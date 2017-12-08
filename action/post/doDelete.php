<?php

require '../connect.php';
require '../global_function.php';

$id = $_GET['id'];
$query = "SELECT * FROM posts where id = $id";
$result = mysqli_query($con, $query);
$post = mysqli_fetch_assoc($result);
if(!isUser($post['user_id'])){
	header('Location:../../index.php');
	die();
}

$query = "DELETE FROM posts WHERE id = $id";
mysqli_query($con, $query);

header("Location:../../index.php");
