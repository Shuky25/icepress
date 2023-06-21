<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ICEPRESS.rs</title>
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
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header" style="padding: 10px 0 0 0;">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="assets/img/logo.jpg" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="./index.html">Vrati se na početnu stranicu</a></li>
                </ul>
            </nav><!-- .navbar -->
            <div class="quote_btn-container  d-flex justify-content-center">
                <a href="./korpa.php">
                    <img src="assets/img/kolica.png" alt="">
                </a>
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div>
    </header><!-- Header kraj -->

    <main id="main">
        <?php
        $ime = $_POST['imePrez'];
        $prezime = $_POST['prezimePrez'];
        $mejl = $_POST['mejlPrez'];
        $telefon = $_POST['telPrez'];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (isset($_POST['submitC'])) {
                $to = 'vojinsundovic@gmail.com'; // njegov mejl
                $headers = "From: " . $mejl;
                $msg = "Ime i prezime: " . $ime . ' ' . $prezime . "\nMejl: " . $mejl . "\nBroj telefona: " . $telefon . "Tip: PREZENTACIJA";
                // mail(to,subject,message,headers,parameters);
                if (mail($to, "PREZENTACIJA", $msg, $headers))
                    $naslov = "USPESNO STE SE PRIJAVILI ZA PREZENTACIJU";
                else
                    $naslov = "DOSLO JE DO GRESKE PRILIKOM PRIJAVE";
            }
        }

        echo "<h1 style='text-align: center;'>" . $naslov . "</h1>";
        ?>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer style="position: absolute; bottom: 0; width: 100%; left: 0;">
        <div class="kontejner">
            <div class="red">
                <p style="font-family: Arial, Helvetica, sans-serif;">Zapratite nas</p>
                <ul>
                    <li><a href="" class="bi-instagram"></a></li>
                    <li><a href="" class="bi-tiktok"></a></li>
                    <li><a href="" class="bi-youtube"></a></li>
                    <li><a href="" class="bi-mailbox"></a></li>
                </ul>
            </div>
            <hr>
            <div class="red">
                &copy; Copyright <strong><span>ICEPRESS</span></strong> All Rights Reserved
                Designed by <a href="https://bootstrapmade.com/">Thewolfgraphics</a>
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