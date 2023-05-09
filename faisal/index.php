<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="" class="logo"><i class="fas fa-heartbeat">portofolio.</i></a>

        <nav class="navbar">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang</a>
            <a href="#portofolio">portofolio</a>
            <a href="#contact">Kontak</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <section class="home" id="home">

        <div class="image">
            <img src="img/sall (3).JPG" alt="" >
        </div>

        <div class="content">
            <h3>Hallo, nama saya Faisal Mulia Chandra</h3>
            <p>Saya menguasai beberapa bahasa pemograman yaitu HTML, CSS, Java Script, PHP, SQL dan saya
            juga bisa menggunakan wordpress.</p>
            <a href="#contact" class="btn">Kontak <span class="fas fa-hevron-right"></span></a>

        </div>


    </section>

    <section class="about" id="about">
		<h1 class="heading"><span>biodata</span></h1>
		<div class="biography">
			<p></p>
			<div class="bio">
				<h3><span>nama : </span> Faisal Mulia Chandra</h3>
				<h3><span>email : </span> Fhaisalsall@gmail.com</h3>
				<h3><span>alamat : </span> Ende, Ntt</h3>
				<h3><span>phone : </span> +62-82144020102</h3>
				<h3><span>umur : </span> 18 years</h3>
				<h3><span>goodboy : </span> Faisal Mulia Chandra</h3>
			</div>
			<a href="https://drive.google.com/file/d/17kg7p7yE9JiDcFmddvzvu1g32QmXDHi7/view?usp=sharing" class="btn">download CV</a>
		</div>

		<div class="skills">
			<h1 class="heading"> <span>skills</span></h1>
			<div class="progress">
				<div class="bar"><h3><span>HTML</span> <span>95%</span></h3></div>
				<div class="bar"><h3><span>CSS</span> <span>85%</span></h3></div>
				<div class="bar"><h3><span>JavaScript</span> <span>65%</span></h3></div>
				<div class="bar"><h3><span>PHP</span> <span>70%</span></h3></div>
			</div>
		</div>

		
	</section>

    <section class="portofolio" id="portofolio">
		<h1 class="heading"><span>portofolio</span></h1>
		<div class="box-container">
			<div class="box">
				<a href="http://rpl.makn-ende.sch.id/wedding/">
				<img src="img/weddingcover.png" alt="">
				<h3>Wedding Organizer</h3></a>
				<span>( 2020 - 2022 )</span>
			</div>

			<div class="box">
				<a href="https://rpl.makn-ende.sch.id/sekolah/">
				<img src="img/sekolahcover.png" alt="">
				<h3>Web Sekolah</h3> </a>
				<span>( 2020 - 2022 )</span>
			</div>

			<!-- <div class="box">
				<img src="img/img-3.jpg" alt="">
				<h3>web development</h3>
				<span>( 2020 - 2022 )</span>
			</div>

			<div class="box">
				<img src="img/img-4.jpg" alt="">
				<h3>web development</h3>
				<span>( 2020 - 2022 )</span>
			</div>

			<div class="box">
				<img src="img/img-5.jpg" alt="">
				<h3>web development</h3>
				<span>( 2020 - 2022 )</span>
			</div>

			<div class="box">
				<img src="img/img-6.jpg" alt="">
				<h3>web development</h3>
				<span>( 2020 - 2022 )</span>
			</div> -->
		</div>
	</section>

	<section class="contact" id="contact">
		<h1 class="heading"><span>kontak</span></h1>
		<form action="sall.php" method="post">
			<div class="flex">
				<input type="text" name="nama" placeholder="Masukkan nama anda" class="box" required>
				<input type="email" name="email" placeholder="masukkan email anda" class="box" required>
			</div>
			<input type="number" min="0" name="nomor" placeholder="masukkan nomor anda" class="box" required>
			<textarea name="komentar" class="box" required placeholder="komentar" cols="30" rows="10"></textarea>
			<input type="submit" value="kirim" name="send" class="btn">
		</form>
		<div class="box-container">
			<div class="box">
				<i class="fa -fas-phone"></i>
				<h3>phone</h3>
				<p>+62-82144020102</p>
			</div>

			<div class="box">
				<i class="fas fa-envelope"></i>
				<h3>email</h3>
				<p>Fhaisalsall@gmail.com</p>
			</div>

			<div class="box">
				<i class="fas fa-map-marker-alt"></i>
				<h3>alamat</h3>
				<p>Ende, Ntt - 010804</p>
			</div>
		</div>
	</section>

	<div class="credit"> &copy; copyright @ 2022 by <span>Sall</span></div>



    <script src="script.js"></script>
</body>
</html>