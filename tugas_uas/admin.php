<?php 
error_reporting(E_ALL);
include_once 'koneksi.php';
include_once 'akses.php';
$title= 'Tambah';
if (isset($_POST['submit'])) {
	$judul=$_POST['title'];
	$deskripsi=$_POST['deskripsi'];
	$content=$_POST['content'];
	$tanggal=$_POST['tanggal'];

	$sql='INSERT INTO berita (title, deskripsi, content, tanggal)';
	$sql .="VALUE ('{$judul}', '{$deskripsi}', '{$content}', '{$tanggal}')";
	$result=mysqli_query($conn, $sql);
	if ( !$result) {
	 	die(mysqli_error($conn));
	 } 
	 header('location: index.php');
}
?>
<title>Admin</title>
<link rel="stylesheet" href="css/style2.css">
<body>
	<div class="container">>
		<header>
			<div  class="entry">
			<h1> Azizah.com </h1>
		</header>
		<nav>
			<a href="index.php">Home</a>
			<a href="profile.php">Profile</a>
		</nav>
		<div class="wrap">
			<div class="side">
				
			</div>
			<div class="content">

<h2>Tambah Artikel</h2>
<form method="post" action="admin.php" enctype="multipart/form-data">
	<div class="field">
		<label for="">Title</label>
		<input type="text" name="title" placeholder="Judul Artikel " />
	</div>
	<div class=field>
		<label for="">Deskripsi</label>
		<textarea name="deskripsi" cols="50" rows="10" placeholder="deskripsi"></textarea>
	<div class=field>
		<label for="">Content</label>
		<textarea name="content" cols="70" rows="20" placeholder="isi berita"></textarea> 
	</div>
	<div class="field">
		<label for="">Tanggal</label>
		<input type="date" name="tanggal">
	</div>
	<div class="field submit">
		<input type="submit" class="btn btn-large "name="submit" value="Simpan" />
	</div>
	<?php
        echo '<a href="logout.php" class="btn btn-large">Logout</a>';
      ?>
</div>
</form>
</div>
<footer>
	<p>&copy; 2018 Arbangiatun Azizah, PelitaBangsa</p>
</footer>	
</body>