<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ICEPRESS.rs - Korpa</title>
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
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <img src="assets/img/logo.jpg" alt="">
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="index.html">Povratak na početnu stranu</a></li>
                </ul>
            </nav><!-- .navbar -->
            <!-- <div class="quote_btn-container  d-flex justify-content-center">
                <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
                <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

            </div> -->
    </header><!-- Header kraj -->
    <section id="proizvodi">
        <div class="container3">
            <div class="item">
                <a href="proizvod1.html" class="logo d-flex align-items-center me-auto me-lg-0">
                    <img src="assets/img/classic.jpg" alt="">
                </a>
                <h2>IcePress Classic</h2>
                <button class="poruciclassic">Poruci Classic</button>

                <!-- Modal classic -->
                <div id="modalClassic" class="modal">
                    <!-- Modal content -->
                    <div class="modalC-content">
                        <span class="close">&times;</span>
                        <h2>Poručite IcePress Classic</h2>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-control" id="formControl">
                                <div class="kec">
                                    <label for="ime">Ime:</label><br>
                                    <input type="text" name="imeC" placeholder="Unesite svoje ime" require>
                                </div>
                                <div class="dvojka">
                                    <label for="prezime">Prezime:</label><br>
                                    <input type="text" name="prezimeC" placeholder="Unesite svoje prezime" require>
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="mejl">Mejl:</label><br>
                                <input type="email" name="emailC" placeholder="Unesite vaš email" require>
                            </div>
                            <div class="form-control" id="formControl">
                                <div class="kec">
                                    <label for="ulica">Grad, ulica i broj: </label><br>
                                    <input type="text" name="ulicaC" placeholder="Unesite grad, ulicu i broj" require>
                                </div>
                                <div class="dvojka">
                                    <label for="postanskibr">Poštanski broj: </label><br>
                                    <input type="text" name="postanskiC" placeholder="Unesite poštanski broj" require>
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="brojtelefona">Broj telefona:</label><br>
                                <input type="text" name="brojtelefonaC" placeholder="Unesite broj telefona" require>
                            </div><br>
                            <input id="checkC" name="check" type="checkbox" /><label for="check">Politika privatnosti </label><span id="politikaprivC">...</span><br>

                            <p id="politikaC">Hvala vam što posecujete našu veb stranicu i iskazujete interesovanje za naše proizvode. U našem poslovanju posvećeni smo zaštiti vaše privatnosti i sigurnosti vaših ličnih podataka. Ova politika privatnosti objašnjava kako prikupljamo, koristimo, otkrivamo i čuvamo vaše podatke prilikom korišćenja naše web stranice.

                                Prikupljanje ličnih podataka: Prilikom naručivanja proizvoda sa naše veb stranice, možemo prikupiti određene lične podatke kao što su vaše ime, adresa e-pošte, adresa za dostavu i kontakt telefonski broj. Ovi podaci će se koristiti isključivo za obradu i isporuku vaše narudžbine.

                                Korišćenje ličnih podataka: Vaše lične podatke koristimo isključivo u svrhu pružanja usluga koje ste zatražili. To uključuje obradu i isporuku narudžbina, pružanje informacija o statusu narudžbine i rešavanje bilo kakvih pitanja ili pritužbi koje imate.

                                Deljenje ličnih podataka: Vaše lične podatke nećemo deliti, prodavati, iznajmljivati ili otkrivati trećim stranama osim u slučajevima kada je to neophodno za ispunjenje vaše narudžbine (npr. dostavna služba). Uvek ćemo preduzeti razumne mere kako bismo osigurali da treće strane koje imaju pristup vašim podacima postupaju u skladu sa zakonom i pružaju odgovarajuću zaštitu podataka.

                                Bezbednost podataka: Vaše lične podatke čuvamo sigurno i primenjujemo odgovarajuće tehničke i organizacione mere kako bismo sprečili neovlašćen pristup, gubitak ili krađu podataka. Takođe koristimo sigurne veze prilikom prenosa podataka kako bismo osigurali da se vaši podaci štite tokom komunikacije sa našom veb stranicom.

                                Prava korisnika: Vi imate pravo da pristupite, ispravite ili izbrišete svoje lične podatke koje smo prikupili, kao i da povučete svoju saglasnost za njihovu obradu. Takođe možete zatražiti prenos vaših podataka na drugu stranu. Ako imate bilo kakva pitanja ili zahteve u vezi sa vašim ličnim podacima, molimo vas da nas kontaktirate putem informacija za kontakt navedenih na našoj veb stranici.</p>
                            <input type="submit" id="btnClassicPoruci" name="submitC" value="Poruci Classic" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="item">
                <a href="proizvod2.html" class="logo d-flex align-items-center me-auto me-lg-0">
                    <img src="assets/img/pro.jpg" alt="">
                </a>
                <h2>IcePress PRO</h2>
                <button class="porucipro">Poruci PRO</button>
                <!-- Modal pro -->
                <div id="modalPro" class="modal">
                    <!-- Modal content -->
                    <div class="modalC-content">
                        <span class="close">&times;</span>
                        <h2>Poručite IcePress Pro</h2>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="form-control" id="formControl">
                                <div class="kec">
                                    <label for="ime">Ime:</label><br>
                                    <input type="text" name="imeP" placeholder="Unesite svoje ime" require>
                                </div>
                                <div class="dvojka">
                                    <label for="prezime">Prezime:</label><br>
                                    <input type="text" name="prezimeP" placeholder="Unesite svoje prezime" require>
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="mejl">Mejl:</label><br>
                                <input type="email" name="emailP" placeholder="Unesite vaš email" require>
                            </div>
                            <div class="form-control" id="formControl">
                                <div class="kec">
                                    <label for="ulica">Grad, ulica i broj: </label><br>
                                    <input type="text" name="ulicaP" placeholder="Unesite grad, ulicu i broj" require>
                                </div>
                                <div class="dvojka">
                                    <label for="postanskibr">Poštanski broj: </label><br>
                                    <input type="text" name="postanskiP" placeholder="Unesite poštanski broj" require>
                                </div>
                            </div>
                            <div class="form-control">
                                <label for="brojtelefona">Broj telefona:</label><br>
                                <input type="text" name="brojtelefonaP" placeholder="Unesite broj telefona" require>
                            </div><br>
                            <input id="checkP" name="check" type="checkbox" /><label for="check">Politika privatnosti </label><span id="politikaprivP">...</span><br>

                            <p id="politikaP">Hvala vam što posecujete našu veb stranicu i iskazujete interesovanje za naše proizvode. U našem poslovanju posvećeni smo zaštiti vaše privatnosti i sigurnosti vaših ličnih podataka. Ova politika privatnosti objašnjava kako prikupljamo, koristimo, otkrivamo i čuvamo vaše podatke prilikom korišćenja naše web stranice.

                                Prikupljanje ličnih podataka: Prilikom naručivanja proizvoda sa naše veb stranice, možemo prikupiti određene lične podatke kao što su vaše ime, adresa e-pošte, adresa za dostavu i kontakt telefonski broj. Ovi podaci će se koristiti isključivo za obradu i isporuku vaše narudžbine.

                                Korišćenje ličnih podataka: Vaše lične podatke koristimo isključivo u svrhu pružanja usluga koje ste zatražili. To uključuje obradu i isporuku narudžbina, pružanje informacija o statusu narudžbine i rešavanje bilo kakvih pitanja ili pritužbi koje imate.

                                Deljenje ličnih podataka: Vaše lične podatke nećemo deliti, prodavati, iznajmljivati ili otkrivati trećim stranama osim u slučajevima kada je to neophodno za ispunjenje vaše narudžbine (npr. dostavna služba). Uvek ćemo preduzeti razumne mere kako bismo osigurali da treće strane koje imaju pristup vašim podacima postupaju u skladu sa zakonom i pružaju odgovarajuću zaštitu podataka.

                                Bezbednost podataka: Vaše lične podatke čuvamo sigurno i primenjujemo odgovarajuće tehničke i organizacione mere kako bismo sprečili neovlašćen pristup, gubitak ili krađu podataka. Takođe koristimo sigurne veze prilikom prenosa podataka kako bismo osigurali da se vaši podaci štite tokom komunikacije sa našom veb stranicom.

                                Prava korisnika: Vi imate pravo da pristupite, ispravite ili izbrišete svoje lične podatke koje smo prikupili, kao i da povučete svoju saglasnost za njihovu obradu. Takođe možete zatražiti prenos vaših podataka na drugu stranu. Ako imate bilo kakva pitanja ili zahteve u vezi sa vašim ličnim podacima, molimo vas da nas kontaktirate putem informacija za kontakt navedenih na našoj veb stranici.</p>
                            <input type="submit" id="btnProPoruci" name="submitP" value="Poruci Pro" />
                        </form>
                    </div>
                </div>
            </div>
            <?php


            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (isset($_POST['submitC'])) {
                    $to = 'vojinsundovic@gmail.com'; // njegov mejl
                    $ime = $_POST['imeC'];
                    $prezime = $_POST['prezimeC'];
                    $mejl = $_POST['emailC'];
                    $postanskiBroj = $_POST['postanskiC'];
                    $brojTelefona = $_POST['brojtelefonaC'];
                    $headers = "From: " . $_POST['emailC'];
                    $msg = "Ime i prezime: " . $ime . ' ' . $prezime . "\nMejl: " . $mejl . "\nGrad, ulica i broj: " . $postanskiBroj . "\nBroj telefona: " . $brojTelefona . "\nTip: CLASSIC";
                    // mail(to,subject,message,headers,parameters);
                    if (mail($to, "CLASSIC", $msg, $headers))
                        echo '<script>alert("Mejl uspesno poslat");</script>';
                    else
                        echo '<script>alert("Doslo je do greske prilikom slanja mejla, kontaktiraj nas putem telefona!");</script>';
                }
                if (isset($_POST['submitP'])) {
                    $to = 'vojinsundovic@gmail.com'; // njegov mejl
                    $ime = $_POST['imeP'];
                    $prezime = $_POST['prezimeP'];
                    $mejl = $_POST['emailP'];
                    $postanskiBroj = $_POST['postanskiP'];
                    $brojTelefona = $_POST['brojtelefonaP'];
                    $headers = "From: " . $_POST['emailP'];
                    $msg = "Ime i prezime: " . $ime . ' ' . $prezime . "\nMejl: " . $mejl . "\nGrad, ulica i broj: " . $postanskiBroj . "\nBroj telefona: " . $brojTelefona . "\nTip: CLASSIC";
                    // mail(to,subject,message,headers,parameters);
                    if (mail($to, "PRO", $msg, $headers))
                        echo '<script>alert("Mejl uspesno poslat");</script>';
                    else
                        echo '<script>alert("Doslo je do greske prilikom slanja mejla, kontaktiraj nas putem telefona!");</script>';
                }
            }


            ?>
        </div>
    </section>
    <script src="assets/js/modal.js"></script>
    <script src="assets/js/mailer.js"></script>
</body>

</html>