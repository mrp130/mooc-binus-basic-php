<?php
	require 'action/connect.php';
	require 'action/global_function.php';

	$id = $_GET['id'];
	$query = "SELECT * FROM posts where id = $id";
	$result = mysqli_query($con, $query);
	$post = mysqli_fetch_assoc($result);
	if(!isUser($post['user_id'])){
		header('Location:index.php');
		die();
	}
?>

<div class="card">
<form action="action/post/doUpdate.php" method="POST">
	<input type="hidden" name="id" value="<?=$post['id']?>">
	<textarea name="post"><?= $post['post'] ?></textarea>
	<input type="submit" value="Update">
	<span><?= $_GET['err'] ?? '' ?></span>
</form>
</div>