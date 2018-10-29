<!DOCTYPE html >
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="description" content="Professional Website">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
</head>

<body>
    <header id="header">
        <div class="logo__wrapper">
            <a href="index.html">
                <img src="../img/logo.jpg" alt="Logo" />
            </a>
        </div>
        <!-- NAVBAR -->
        <div class="lang-switch">
            <a class="lang-switch__link" href="../index.php">EN</a> /
            <span><b>DE</b></span>
        </div>
        <div class="navbar">
            <ul>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/warum-ubt.html">Warum UBT</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/warum-emmen.html">Warum Emmen</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/geschaeft.html">Geschäft</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/technologie.html">Technologie</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/kontakt.html">Kontakt</a></li>
                <li class="navbar__link--enroll-de"><a class="navbar__link--a" href="html/jetzt-einschreiben.html">Jetzt einschreiben!</a></li>
            </ul>
        </div>
    </header>

    <!-- REPLACE THE IMAGE PATH -->
    <div class="title-image">
        <img src="../img/header-alumni.jpg" alt="Header Image">
    </div>

    <!-- Content -->
    <div class="content__wrapper">
        <!-- Place your code inhere -->
        <div class="content__wrapper--boxes">
            <div class="content-boxes">
                <div class="content-boxes__header">
                    <img src="../img/icons/document.svg" />
                </div>
                <div class="hr__wrapper">
                    <hr />
                </div>
                <div class="content__main">
                    <h3>Versicherungen</h3>
                    <p>massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget</p>
                    <a class="main__button" href="html/insurance.html">
                        more Information
                    </a>
                </div>
            </div>
            <div class="content-boxes">
                <div class="content-boxes__header">
                    <img src="../img/icons/plane.svg" />
                </div>
                <div class="hr__wrapper">
                    <hr />
                </div>
                <div class="content__main">
                    <h3>Luftfahrt</h3>
                    <p>massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget</p>
                    <a class="main__button" href="#">
                        <!-- TODO Add Link to Aerospace -->
                        more Information
                    </a>
                </div>
            </div>
            <div class="content-boxes">
                <div class="content-boxes__header">
                    <img src="../img/icons/pay.svg" />
                </div>
                <div class="hr__wrapper">
                    <hr />
                </div>
                <div class="content__main">
                    <h3>Bankwesen</h3>
                    <p>massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget</p>
                    <a class="main__button" href="html/banking.html">
                        more Information
                    </a>
                </div>
            </div>
            <div class="content-boxes">
                <div class="content-boxes__header">
                    <img src="../img/icons/cruise.svg" />
                </div>
                <div class="hr__wrapper">
                    <hr />
                </div>
                <div class="content__main">
                    <h3>Marine</h3>
                    <p>massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget</p>
                    <a class="main__button" href="#">
                        <!-- TODO Add Link to Marine -->
                        more Information
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content__seperator">
        <div class="content__wrapper">
            <div class="content__leftside--30">
                <h2>Warum UBT?</h2>
                <p>
                    pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla
                    vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                    justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                    elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat
                    vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imp
                </p>
            </div>
            <div class="content__rightside">
                <img src="../img/university.jpg" alt="Image" />
            </div>
        </div>
    </div>
    <div class="content__wrapper">
        <div class="content__leftside">
            <h2>Kontakt</h2>
            <form class="main-form" action="php/danke.php" method="POST">
                <input class="input_text" required type="text" placeholder="E-Mail" name="email" />
                <input class="input_text" required type="text" placeholder="Name" name="name" />
                <textarea class="input_textarea" placeholder="Message" name="message"></textarea>
                <select class="input_select" required name="interest">
                    <option selected disabled>Brauchen Sie noch mehr Informationen?</option>
                    <option value="marine">Marine</option>
                    <option value="versicherungen">Versicherungen</option>
                    <option value="luftfahrt">Luftfahrt</option>
                    <option value="bankwesen">Bankwesen</option>
                </select>
                <input class="main__button" type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div class="content__rightside--35">
            <?php include_once "php/wetter.php"; ?>
        </div>
    </div>
    <div class="content__seperator">
        <div id="map"></div>
        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                var uluru = {
                    lat: 52.779068,
                    lng: 6.901070
                };
                // The map, centered at Uluru
                var map = new google.maps.Map(
                    document.getElementById('map'), {
                        zoom: 8,
                        center: uluru
                    });
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }

        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKxBpWQcfRVmM4NBQ_rDIzIzAU7qgEqNE&callback=initMap">
        </script>
    </div>
    <footer id="footer">
        <div class="footer__wrapper">
            <div class="footer__left">
                <a href="html/privacy_policy.html">Privacy Statement</a>&nbsp;|&nbsp;<a href="#">Cookie Policy</a>&nbsp;|&nbsp;<a href="html/disclaimer.html">Disclaimer</a>
            </div>
            <div class="footer__right">
                <p>University of Applied Sciences for Business and Technology Emmen</p>
            </div>
        </div>
    </footer>
</body>

</html>
