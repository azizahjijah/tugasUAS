<?php
include_once 'koneksi.php';
//include('login_session.php');
$title = 'Berita';
$sql = 'SELECT * FROM berita order by id DESC';
$result = mysqli_query($conn, $sql);
?>
<head>
	<meta charset="utf-8">
	<!-- pemanggilan file css -->		
	<title>Berita Nasional</title>
	<link rel="stylesheet" href="css/style2.css">
	 <!-- <script src="js/main.js"></script> -->
</head>
<body>
	<div class="container">
		<!-- header -->
		<header>
			<div  class="entry">
			<h1> Azizah.com </h1		>
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
				<h3 class="title">SUMMARY</h3>
				<ul>
					<li><a href="berita2.php">Idonesia stabil di posisi 4 dengan 30 mendali emas</a></li>
					<li><a href="#">Korea bersatu padu dalam team basket putri</a></li>
					<li><a href="#">Jepang dan Korea bertemu di final sepak bola</a></li>
					<li><a href="kategori.php">Dua petinju Indonesia maju ke semi final</a></li>
					
				</ul>
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
							<a href="http://www.saturiau.com/read/ekonomi/707/2009/05/19/citarasa-foodcourt-mal-pekanba-html" target="_blank"><img src="https://www.google.co.id/search?q=sponsor+asian+games&safe=strict&source=lnms&tbm=isch&sa=X&ved=0ahUKEwidxv2LzZTdAhUkSY8KHY-DD0AQ_AUICygC&biw=1366&bih=613#imgrc=KrG1SCCUICKeTM.jpg"></a>
							<br/><br/>
						</marquee>
					</div>
					</div>
				
				<div class="wrap">
				</div>
				</div>
	<div class="content">
		<div class="post">
			
		<?php while ($row = mysqli_fetch_array($result)):?>
         	<tr>
           		<td><h1><br><a class="text" href="ag.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'];?></a></h1></td>
           		<td><?php echo $row['deskripsi'] ;?></td>
           		
         	</tr>
       <?php endwhile; ?>
      				 
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