<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div class="user">
        <img src="images/indraprofil.jpeg" alt="">
        <h3 class="name">Indra Budiman</h3>
        <p class="post">web developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">beranda</a></li>
            <li><a href="#about">tentang</a></li>
            <li><a href="#education">pendidikan</a></li>
            <li><a href="#portfolio">portofolio</a></li>
            <li><a href="#contact">kontak</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>Haii!</h3>
    <h1>Saya <span>indra budiman</span></h1>
    <p>Pekerja keras, kreatif dan proaktif. Saya adalah siswa tingkat akhir yang mendalami pemrograman web. Saya tertarik dengan dunia digital dan game. Saya mampu bekerja dalam tim dan antusias dengan hal baru.
       
    </p>
    <a href="#about"><button class="btn">tentang saya<i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>tentang</span></h1>

<div class="row">

    <div class="info">
        <h3> <span> nama : </span> Indra Budiman </h3>
        <h3> <span> email : </span> indrabudiman2005@gmail.com </h3>
        <h3> <span> negara : </span> Indonesia </h3>
        <h3> <span> telepon : </span> 0822-2354-5293 </h3>
        <h3> <span> umur : </span> 17 tahun </h3>
        <a href="#"><button class="btn"> unduh CV <i class="fas fa-download"></i> </button></a>
    </div>

    <!-- <div class="counter">

        <div class="box">
            <span>2+</span>
            <h3>tahun eksperimen</h3>
        </div>

        <div class="box">
            <span>20+</span>
            <h3>projek selesai</h3>
        </div>

        <div class="box">
            <span>430+</span>
            <h3>happy clients</h3>
        </div>

        <div class="box">
            <span>12+</span>
            <h3>awards won</h3>
        </div>

    </div> -->

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"><span>pendidikan</span></h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2012 - 2017</span>
        <h3>SDI Numba 2</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p> -->
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018 - 2020</span>
        <h3>SMP N 8 Nangapanda</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p> -->
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021 - sekarang</span>
        <h3>MA Kejuruan Negeri Ende</h3>
        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p> -->
    </div>

</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"><span>portofolio</span></h1>

<div class="box-container">

    <div class="box">
        <a href="https://rpl.makn-ende.sch.id/travel-website/">
            <img src="images/travelcover.png" alt=""></a>
    </div>

    <div class="box">
        <a href="https://rpl.makn-ende.sch.id/ponpes/">
        <img src="images/ponpescover.png" alt=""></a>
    </div>

    <!-- <div class="box">
        <img src="images/img-5.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img-5.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img-5.jpg" alt="">
    </div>

    <div class="box">
        <img src="images/img-5.jpg" alt="">
    </div> -->

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"><span>Kontak</span></h1>

<div class="row">

    <div class="content">

        <h3 class="title">informasi kontak</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i>indrabudiman2005@gmail.com</h3>
            <h3> <i class="fas fa-phone"></i> 0822-2354-5293</h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Ntt, Indonesia - 86319</h3>
        </div>

    </div>

    <form action="pesan.php" method="POST">

        <input type="text" name="nama" placeholder="nama" class="box">
        <input type="email" name="email" placeholder="email" class="box">
        <input type="number" name="nomor" placeholder="nomor" class="box">
        <textarea name="pesan" id="" cols="30" rows="10" class="box message" placeholder="pesan"></textarea>
        <button type="submit" name="send" class="btn"> kirim <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->


<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>