<?php
$title="Login";
$error=null;
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE username='{$user}' AND password='{$password}'";
	$result = mysqli_query($conn, $sql);
	if ($result && $result->num_rows >0){
		session_start();
		$_SESSION['isLogin'] = 1;
		header('location: admin.php');

	} else
	$error = "Username atau password salah.";
	# code...
}
//include_once 'header.php';?>
<title>Login</title>
<link rel="stylesheet" href="css/style2.css">
<body>
	<div class="container">>
		<header>
			<div  class="entry">
			<h1> Azizah.com </h1		>
		</header>
		<nav>
			<a href="index.php">Home</a>
			<a href="profile.php">Profile</a>
		</nav>
		<div class="wrap">
			<div class="side">
				
			</div>
			<div class="content">
<div id="login">
	<h2>Login Form</h2>
	<form action="" method="post">
		<div class="field">
		<label>Username :</label>
		<input id="name" name="username" cols="5" rows="10"placeholder="username" >
		</div>
		<div class="field">
		<label>Password :</label>
		<input id="password" name="password" cols="5" rows="10"placeholder="**********" type="password">
		</div>
		<div class="field submit">
		<input name="submit" type="submit" value="Login">
		</div>
	</form>
	
</div>
</div>
</div>
<footer>
	<p>&copy; 2018 Arbangiatun Azizah, PelitaBangsa</p>
</footer>
</div>
</div>
</body>

<?php 
//include_once "footer.php"; 
?>
