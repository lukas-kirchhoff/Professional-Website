<!DOCTYPE html >
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="description" content="Professional Website">
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
</head>

<body>
    <header id="header">
        <div class="logo__wrapper">
            <a href="index.php">
                <img src="../img/logo.jpg" alt="Logo" />
            </a>
        </div>
        <!-- NAVBAR -->
        <div class="lang-switch">
            <a class="lang-switch__link" href="../index.php">EN</a> /
            <a class="lang-switch__link" href="../nl/index.php">NL</a> /
            <span><b>DE</b></span>
        </div>
        <div class="navbar">
            <ul>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/warum-ubt.html">Warum UBT</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/warum-emmen.html">Warum Emmen</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/geschaeft.html">Wirtschaft</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/technologie.html">Technologie</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="html/kontakt.html">Kontakt</a></li>
                <li class="navbar__link--enroll-de"><a class="navbar__link--a" href="html/jetzt-einschreiben.html">Einschreiben!</a></li>
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
                    <p>Die Versicherung schützt Menschen aus allen wirtschaftlichen Bereichen vor Verlusten und Formen des Risikomanagements.</p>
                    <a class="main__button" href="html/versicherungen.html">
                        Mehr Lesen
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
                    <p>Die Luft- und Raumfahrttechnik befasst sich mit der Entwicklung von Flugzeugen und Raumfahrzeugen aller Art.</p>
                    <a class="main__button" href="html/luftfahrt.html">
                        Mehr Lesen
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
                    <p>Das Bankwesen ist eine Branche, die Bargeld, Kredite und andere Finanztransaktionen abwickelt.</p>
                    <a class="main__button" href="html/bankwesen.html">
                        Mehr Lesen
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
                    <p>Marine Engineering umfasst das Engineering von Booten, Schiffen, Bohrinseln und anderen Marine-Schiffen</p>
                    <a class="main__button" href="html/marine.html">
                        Mehr Lesen
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
                    Erwägen Sie ein Studium in den Niederlanden? In diesem Fall sollte die UBT-Fachhochschule ganz oben
                    auf Ihrer Liste stehen. Wir sind eine international anerkannte Einrichtung, die akkreditierte
                    Abschlüsse vergibt. Wir haben bereits Tausende von internationalen Studenten mit unseren
                    englischsprachigen Bachelor- und Master-Programmen in verschiedenen Fachgebieten erfolgreich
                    ausgebildet. Diese reichen von Versicherungen über Schiffsbau bis hin zu Luft- und
                    Raumfahrttechnik.
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
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBok-t-HFWmzhsrYhpcEWY7xOTdEAC7Shk&callback=initMap">
        </script>
    </div>
    <footer id="footer">
        <div class="footer__wrapper">
            <div class="footer__left">
                <a href="html/privacy_policy.html">Privacy Statement</a>&nbsp;|&nbsp;<a href="html/cookie_policy">Cookie Policy</a>&nbsp;|&nbsp;<a
                    href="html/disclaimer.html">Disclaimer</a>
            </div>
            <div class="footer__right">
                <p>University of Applied Sciences for Business and Technology Emmen</p>
            </div>
        </div>
    </footer>
</body>

</html>