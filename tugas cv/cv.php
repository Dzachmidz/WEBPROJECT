<?php
	require "variabel.php";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Portfolio Website</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- Header -->
	<header>
        <h1><img src="Moon.png" alt="ach Fahmi"> Fahmi's Blog</h1>
		<div class="container">
			<nav>
				<ul>
					<li><a href="#" >Home</a></li>
					<li><a href="#about">Tentang</a></li>
					<li><a href="#services">Skill</a></li>
					<li><a href="#contact">Kontak</a></li>
                    <li><a href=<?php echo $link["portofolio"]; ?>target="blank">Portofolio</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Hero section -->
	<section id="hero">
		<div class="container">
			<h1>Halo, Saya <?php echo $nama ["depan"] .''. $nama ["belakang"]; ?> </h1>
			<h2>Dari Kelas <?php echo $deskripsi_diri ["kelas"]; ?> </h2>
            <h1>NPM <?php echo $deskripsi_diri ["npm"];?></h1>
			<a href=<?php echo $link["biodata"];?> target="blank" class="btn">Inilah saya</a>
		</div>
	</section>

	<!-- About section -->
	<section id="about">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<img src="foto.PNG" alt="Achmad Fahmi">
				</div>
				<div class="col-6">
					<h2>Tentang Saya</h2>
					<p>Haii, saya <?php echo $nama["depan"].''.$nama["belakang"]; ?>, dengan NPM <?php echo $deskripsi_diri["npm"];?>, dari <?php echo $deskripsi_diri["kelas"];?>. Saya sekarang berumur <?php echo $umur;?>. <?php echo $about;?></p>
					<p><?php echo $tentang_saya; ?></p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services section -->
	
<section id="services">
	<div class="container">
		<h2>Skill</h2>
		<div class="row">
			<div class="col-4">
				<div class="service">
					<i class="fas fa-code"></i>
					<h3>Web Programing</h3>
					<p><?php echo $skill["web programing"];?></p>
				</div>
			</div>
			<div class="col-4">
				<div class="service">
					<i class="fas fa-mobile-alt"></i>
					<h3>Desain</h3>
					<p><?php echo $skill["desain"];?></p>
				</div>
			</div>
			<div class="col-4">
				<div class="service">
					<i class="fas fa-search"></i>
					<h3>Servis Hardware</h3>
					<p><?php echo $skill["servis hardware"];?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Contact section -->
<section id="contact">
	<div class="container">
		<h2>Kontak</h2>
			<div class="col-68">
				<div class="contact-info">
					<div class="social-icons">
                        <a href=<?php echo $link ["instagram"]; ?>target="blank"><i class="btn2"><img src="Instagram.png"></i></a>
						<a href=<?php echo $link ["github"]; ?> target="blank"><i class="btn2"><img src="github.png" width="65px"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> 