<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Basic PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav>
	<div style="float:right">
		<span><?= $_SESSION['username'] ?></span>
		<span>
			<a href="action/user/doLogout.php">Logout</a>
		</span>
	</div>
</nav>

<div class="card">
	<form action="action/post/doInsert.php" method="POST">
		<textarea name="post"></textarea>
		<input type="submit" value="Post">
		<span><?= $_GET['message'] ?? '' ?></span>
	</form>
</div>

<?php 
	require 'action/connect.php';
	$query = "SELECT * FROM posts JOIN users ON posts.user_id = users.id ORDER BY posts.id DESC";
	$posts = mysqli_query($con, $query);
	while($post = mysqli_fetch_assoc($posts)){
?>
<div class="card">
	<header><?= $post['username'] ?></header>
	<article>
		<?= $post['post'] ?>
	</article>
</div>
<?php } ?>

</body>
</html>