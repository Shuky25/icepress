<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>ICEPRESS - Početna</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/logo.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


	<!-- Template Main CSS File -->
	<link href="assets/css/main.css" rel="stylesheet">


</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
				<!-- <img src="assets/img/logo.png" alt=""> -->
				<img src="assets/img/logo.jpg" alt="">
			</a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="#hero">Početna</a></li>
					<li><a href="#about">Proizvodi</a></li>
					<li><a href="#prezentacija">Prezentacija</a></li>
					<li><a href="#book-a-table">O nama</a></li>
					<li><a href="#contact">Kontakt</a></li>
				</ul>
			</nav><!-- .navbar -->
			<div class="quote_btn-container  d-flex justify-content-center">
				<a href="korpa.php">
					<img src="assets/img/kolica.png" alt="">
				</a>
				<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
				<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

			</div>
	</header><!-- Header kraj -->

	<!-- ======= Hero Section ======= -->
	<!-- <div class="slider-container" id="hero">
		<div class="slider-control left inactive"></div>
		<div class="slider-control right"></div>
		<ul class="slider-pagi"></ul>
		<div class="slider">
			<div class="slide slide-0 active">
				<div class="slide__bg"></div>
			</div>
			<div class="slide slide-1 ">
				<div class="slide__bg"></div>

			</div>
			<div class="slide slide-2">
				<div class="slide__bg"></div>

			</div>
			<div class="slide slide-3">
				<div class="slide__bg"></div>

			</div>
		</div>
	</div> -->

	<main id="main">
		<style>
			#carouselExampleIndicators {
				width: 100%;
				height: 100vh;
				overflow: hidden;
			}

			#carouselExampleIndicators .carousel-inner .carousel-item {
				width: 100%;
				height: 100vh;
				background-repeat: no-repeat;
				background-size: cover;
			}

			#carouselExampleIndicators .carousel-inner #first {
				background-image: url("./assets/img/slika2.jpg");
				background-position: 35% 78%;
			}

			#carouselExampleIndicators .carousel-inner #second {
				background-image: url("./assets/img/slika3.jpg");
				background-position: 45% 85%;
			}

			#carouselExampleIndicators .carousel-inner #third {
				background-image: url("./assets/img/slika16.jpg");
				background-position: 55% 60%;
			}

			#carouselExampleIndicators .carousel-inner #fourth {
				background-image: url("./assets/img/slika4.jpg");
				background-position: center;
			}
		</style>
		<div id="carouselExampleIndicators" class="carousel slide">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" id="first">
					<!-- <img src="./assets/img/slika2.jpg" class="d-block w-100" alt="1"> -->
				</div>
				<div class="carousel-item" id="second">
					<!-- <img src="./assets/img/slika3.jpg" class="d-block w-100" alt="2"> -->
				</div>
				<div class="carousel-item" id="third">
					<!-- <img src="./assets/img/slika16.jpg" class="d-block w-100" alt="3"> -->
				</div>
				<div class="carousel-item" id="fourth">
					<!-- <img src="./assets/img/slika4.jpg" class="d-block w-100" alt="4"> -->
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
			<script>
				setInterval(() => {
					document.querySelector('.carousel-control-next').click();
				}, 3000);
			</script>
		<!-- ======= Vise o nama ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">

				<div class="section-header">
					<p style="font-weight: bold;">Proizvodi</p>
				</div>
			</div>
		</section><!-- Vise o nama kraj -->

		<div class="container1">
			<div class="item">
				<a href="proizvod1.html" class="logo d-flex align-items-center me-auto me-lg-0">
					<img src="./assets/img/classic.jpg" alt="classic" class="img-fluid">
				</a>
				<p style="text-align: center; font-weight: bold;">IcePress Classic</p>
			</div>
			<div class="item">
				<a href="proizvod2.html" class="logo d-flex align-items-center me-auto me-lg-0">
					<img src="./assets/img/pro.jpg" alt="pro" class="img-fluid">
				</a>
				<p style="text-align: center; font-weight: bold;">IcePress PRO</p>
			</div>
		</div>

		<!-- ==== PREZENTACIJA ==== -->
		<style>
			h2 {
				font-size: 32px;
			}

			p {
				font-size: 24px;
			}

			.container .row #prezentacijaSlika img {
				width: 600px;
				margin: auto;
				display: block;
			}

			form {
				display: flex;
				justify-content: center;
				align-items: center;
				flex-direction: row;
			}

			#formControl {
				background-color: transparent;
				border: none;
				width: 100%;
			}

			#formControl input {
				width: 100%;
				background-color: transparent;
				border: none;
				border-bottom: 2px solid #d3d3d3;
				padding: 10px 5px;
				color: #fff;
				outline: none;
				transition: .2s;
				font-size: 18px;
			}

			form input[type="submit"] {
				border: 2px solid #fff;
				background-color: transparent;
				transition: .2s;
				margin-top: 20px;

				display: block;
				margin: 20px auto;
				padding: 10px 20px;
				font-size: 18px;
				color: #fff;
			}

			form input[type="submit"]:hover {
				background-color: #fff;
				color: #000;
			}

			#formControl input:focus {
				border-color: #fff;
			}

			@media screen and (max-width: 991px) {
				.container .row #prezentacijaSlika img {
					width: 400px;
				}

				#prezentacija .row,
				#prezentacija .row form {
					flex-direction: column;
				}
			}
		</style>
		<section id="prezentacija">
			<div class="container">
				<div class="section-header">
					<p style="font-weight: bold;">Zakažite besplatnu prezentaciju</p>
				</div>
				<div class="row">
					<div class="col-md-6" data-aos="fade-up">
						<p>IcePress tim obilaziće gradove na teritoriji cele Srbije u cilju besplatnog prezentovanja naših proizvoda. Možete uživo videti kako naše prese rade, a mi ćemo odgovoriti na svako Vaše pitanje. Nakon što se prijavite i ostavite neophodne podatke, niste u obavezi da kupite presu, upoznajmo se.</p>
					</div>
					<div class="col-md-6" id="prezentacijaSlika" data-aos="fade-up">
						<img src="./assets/img/prezentacija.png" class="img-fluid" alt="Slicica">
					</div>
				</div>
				<div class="row" data-aos="fade-up">
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<div style="width: 70%;">
							<div class="form-control" id="formControl">
								<div class="kec">
									<label for="ime">Ime:</label><br>
									<input type="text" name="imePrez" placeholder="Unesite svoje ime" require>
								</div>
								<div class="dvojka">
									<label for="prezime">Prezime:</label><br>
									<input type="text" name="prezimePrez" placeholder="Unesite svoje prezime" require>
								</div>
							</div>
							<div class="form-control" id="formControl">
								<div class="kec">
									<label for="ime">Mejl:</label><br>
									<input type="text" name="mejlPrez" placeholder="Unesite svoju mejl adresu" require>
								</div>
								<div class="dvojka">
									<label for="prezime">Telefon:</label><br>
									<input type="text" name="telPrez" placeholder="Unesite svoj broj telefona" require>
								</div>
							</div>
						</div>
						<input type="submit" id="btnClassicPoruci" name="submitC" value="Zakaži besplatnu prezentaciju" />
					</form>
				</div>
			</div>
		</section>
		<!-- Prezentacija kraj -->

		<?php


		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			if (isset($_POST['submitC'])) {
				$ime = $_POST['imePrez'];
				$prezime = $_POST['prezimePrez'];
				$mejl = $_POST['mejlPrez'];
				$telefon = $_POST['telPrez'];
				$to = 'korpa.prezentacije@gmail.com'; // njegov mejl
				$headers = "From: " . $mejl;
				$msg = "Ime i prezime: " . $ime . ' ' . $prezime . "\nMejl: " . $mejl . "\nBroj telefona: " . $telefon . "Tip: PREZENTACIJA";
				// mail(to,subject,message,headers,parameters);
				if (mail($to, "PREZENTACIJA", $msg, $headers)) {
					echo "<script>alert('Uspesno ste se prijavili za prezentaciju!')</script>";
					header('refresh:0;url=./index.php');
					exit();
				} else {
					echo "<script>alert('Doslo je do greske, kontaktirajte nas putem telefona!')</script>";
					header('refresh:0;url=./index.php');
					exit();
				}
			}
		}
		?>

		<!-- ======= O nama ======= -->
		<section id="book-a-table" class="book-a-table">
			<div class="container" data-aos="fade-up">

				<div class="section-header">
					<p style="font-weight: bold;">O nama</p>
				</div>

				<div class="row g-0">
					<p style="font-size: 20px; align-items: center; align-content: center;">
						Naš cilj je da Vam pomognemo da uživate u pićima na najbolji mogući način. Verujemo da je posluživanje pića umetnost i da svako piće zaslužuje posebnu pažnju i negu. Zbog toga smo se posvetili razvoju inovativnih proizvoda koji će Vam pomoći da unapredite Vaše iskustvo sa pićima. Pored toga, mi smo tu da Vam pružimo podršku u korišćenju naših proizvoda i da Vam pomognemo u ostvarivanju Vaših ciljeva. Verujemo da svako piće može biti posebno iskustvo i da je naša uloga da Vam omogućimo da to iskustvo osetite na najbolji mogući način.
					</p>
				</div>

			</div>
		</section><!-- O nama kraj -->

		<!-- ======= Kontakt ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-header">
					<p style="font-weight: bold;">Kontaktirajte nas</p>
				</div>

				<div class="item2">
					<div class="info-item">
						<i class="icon bi bi-telephone flex-shrink-0"></i>
						<div>
							<h2>Telefon: 064/510-1000</h2>
						</div>
					</div>
				</div><!-- End Info Item -->


				<div class="item2">
					<div class="info-item ">
						<i class="icon bi bi-mailbox flex-shrink-0"></i>
						<div>
							<h2>Mail: icepress.info@gmail.com</h2>
						</div>
					</div>
				</div><!-- End Info Item -->

				<div class="item2">
					<div class="info-item ">
						<i class="icon bi bi-instagram flex-shrink-0"></i>
						<div>
							<h2>Instagram: @icepress.rs</h2>
						</div>
					</div>
				</div><!-- End Info Item -->

				<div class="item2">
					<div class="info-item ">
						<i class="icon bi bi-tiktok flex-shrink-0"></i>
						<div>
							<h2>Tiktok: icepress.rs</h2>
						</div>
					</div>
				</div><!-- End Info Item -->

				<div class="item2">
					<div class="info-item ">
						<i class="icon bi bi-youtube flex-shrink-0"></i>
						<div>
							<h2>YouTube: Ice press Srbija</h2>
						</div>
					</div>
				</div><!-- End Info Item -->

			</div>
		</section><!-- Kontakt kraj -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer>
		<div class="kontejner">
			<div class="red">
				<p style="font-family: Arial, Helvetica, sans-serif;">Zapratite nas</p>
				<ul>
					<li><a href="https://www.instagram.com/icepress.rs/" class="bi-instagram"></a></li>
					<li><a href="https://www.tiktok.com/@icepress.rs" class="bi-tiktok"></a></li>
					<li><a href="https://www.youtube.com/@IcePress" class="bi-youtube"></a></li>
					<li><a href="mailto:icepress.info@gmail.com" class="bi-mailbox"></a></li>
				</ul>
			</div>
			<hr>
			<div class="red" style="font-size: 16px;">
				&copy; Copyright <strong><span>ICEPRESS</span></strong> All Rights Reserved
				Designed by <a href="https://www.instagram.com/thewolfgraphics/">Thewolfgraphics</a>
			</div>
		</div>
	</footer>
	<!-- Footer kraj -->

	<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<div id="preloader"></div>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js">

	</script>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

	<script src="assets/js/index.js"></script>

</body>

</html>