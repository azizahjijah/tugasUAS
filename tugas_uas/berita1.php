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
<title>Idonesia stabil di posisi 4 dengan 30 mendali emas</title>
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

<h2>Idonesia stabil di posisi 4 dengan 30 mendali emas</h2>
<h3>KONTINGEN Indonesia memantapkan posisi di peringkat ke-4 klasemen perolehan medali Asian Games 2018 hingga Rabu (29/8/2018) malam. 

Indonesia sudah mengumpulkan 30 medali emas sampai penyelenggaraan hari ke-11 Asian Games 2018. Para atlet kebanggaan kita unggul 11 medali emas atas wakil Iran yang berada di peringkat kelima. 

Pada penyelenggaraan hari ke-11, Indonesia menambah enam medali emas yang seluruhnya datang dari cabang pencak silat.



Artikel ini telah tayang di Wartakotalive dengan judul Indonesia Mantapkan Posisi di Peringkat 4 dengan Raihan 30 Medali Emas, http://wartakota.tribunnews.com/2018/08/30/indonesia-mantapkan-posisi-di-peringkat-4-dengan-raihan-30-medali-emas.

Editor: Fred Mahatma TIS
Berkaca dari statitisk Asian Games, koleksi 30 medali emas itu sudah cukup untuk mengamankan Indonesia untuk finis di posisi ke-4. 

Sebelumnya, negara dengan koleksi medali emas yang berada di posisi ke-4 Asian Games adalah Kazakstan. Mereka mengoleksi 28 medali emas di Incheon 2014. 


</h3>
</div>
<footer>
	<p>&copy; 2018 Arbangiatun Azizah, Wordpress</p>
</footer>	
</body>