<?php
include_once 'koneksi.php';
$title = 'Berita';
$id=$_GET['id'];
$sql = "SELECT * FROM berita WHERE id='$id'";
$result = mysqli_query($conn, $sql);
?>
<head>
	<meta charset="utf-8">
	<!-- pemanggilan file css -->		
	<title>Detail</title>
	<link rel="stylesheet" href="css/style2.css">
	 <!-- <script src="js/main.js"></script> -->
</head>
<body>
	<div class="container">
		<!-- header -->
		<header>
			
		</header><!-- endof header -->

		<!-- navigasi -->
		<nav>
			<a href="index.php">Home</a>
			<a href="profile.php">Profile</a>
			<a href="kontak.php">Kontak</a>
			<a href="admin.php">Admin</a>
		</nav><!-- endof navigasi -->

		<!-- wrapcontent -->
		<div class="wrap">
			<div class="side">
				
				<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:250px;height:180px;"src="https://www.clocklink.com/html5embed.php?clock=042&timezone=Indonesia_Jakarta&color=red&size=356&Title=&Message=&Target=&From=2018,1,1,0,0,0&Color=red"></iframe>
					<div class="wrap">
						<div class="side">
							<marquee direction="up" onmouseover="this.stop()" width="100%" onmouseout="this.start()" scrollamount="2" height="200">
							<a href="http://pekanbaru-riau.blogspot.com/2007/10/mall-pekanbaru.html" target="_blank"><img src="http://3.bp.blogspot.com/_m5mB5X0aSog/ShQMBbqrJyI/AAAAAAAAAA4/5IjArJ_os_E/S220/malpekabaru_logo.jpg'"/></a>
							<br/>
							<br/>
							<a href="www.telkomspeedy.com" target="_blank"><img src="http://lh5.ggpht.com/_HR4qF9th884/SvZ70c61-TI/AAAAAAAAAH0/fd1LcGnp0kg/s128/43r3.jpg"/></a>
							<br/>
							<br/>
							<br/>
							<br/>
							<a href="http://www.putrasun.com/" target="_blank"><img src="http://lh5.ggpht.com/_HR4qF9th884/SvZ33BYiX-I/AAAAAAAAAHo/0QWC8LZpadU/s128/title.gif"/></a>
							<br/>
							<br/>
							<br/>
							<br/>
							<a href="http://www.megaplasa.com/" target="_blank"><img src="http://lh4.ggpht.com/_HR4qF9th884/SvZ1JHcxu-I/AAAAAAAAAHY/3JgOQy7AhU0/s128/PICT1274.JPG"></a>
							<br/>
							<br/>
							<br/>
							<br/>
							<a href="http://www.bertuah.org" target="_blank"><img src="http://lh4.ggpht.com/_HR4qF9th884/SvZ6L836lwI/AAAAAAAAAHs/hep88I9mXBE/s128/logo.gif"></a>
							<br/>
							<br/>
							<br/>
							<br/>
							<a href="http://www.mandalaair.com/" target="_blank"><img src="http://lh3.ggpht.com/_HR4qF9th884/SvZ6Lx1dsJI/AAAAAAAAAHw/t-t_ppdaiVU/s128/logo-mandala.gif"></a>
							<br/>
							<br/>
							<br/>
							<br/>
							<a href="http://www.telkom.co.id/" target="_blank"><img src="http://lh4.ggpht.com/_HR4qF9th884/SvZ2-2T2i5I/AAAAAAAAAHk/duDKzowXJMw/s128/new-telkom-logo.jpg"></a>
							<br/><br/>
							<br/><br/>
							<a href="http://www.saturiau.com/read/ekonomi/707/2009/05/19/citarasa-foodcourt-mal-pekanba-html" target="_blank"><img src="http://lh3.ggpht.com/_HR4qF9th884/SvZ1JGvopFI/AAAAAAAAAHc/M4mj-vIXFDQ/s128/PICT1278.JPG"></a>
							<br/><br/>
						</marquee>
					</div>
					</div>
				
				<div class="wrap">
				</div>
				</div>
	<div class="content">
		<div class="post">
			
		<?php while ($height = mysqli_fetch_array($result)):?>
         	<tr>
           		<td><h1><?php echo $height['title']; ?></h1></td>
           		<td><?php echo $height['content'] ;?></td>
           		</tr>
       <?php endwhile; ?>
<h2>Tambah Komentar</h2>
<form method="post" action="komentar.php" enctype="multipart/form-data">
	<div class="field">
		<label for="">Nama</label>
		<input type="text" name="nama" placeholder="Nama" />
	</div>
	<div class=field>
		<label for="">Email</label>
		<input type="text" name="email" placeholder="Email" />
	</div>
	<div class=field>
		<label for="">Komentar</label>
		<textarea name="komentar" cols="50" rows="5	" placeholder="komentar"></textarea> 
	</div>
	<div class="field submit">
		<input type="submit" class="btn btn-large "name="submit" value="Simpan" />
	</div>
	
</div>	
</form>
</div><!-- endof .post -->
</div><!-- endof .content -->
</div><!-- endof .wrapcontent -->

		<!-- footer -->
		<footer>
			<p>&copy; 2018 Arbangiatun Azizah, PelitaBangsa</p>
		</footer><!-- endof footer -->
	</body>
	</div><!-- endof .container -->
</body>
</html>