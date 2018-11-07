<!DOCTYPE html >
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="description" content="Professional Website">
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="../css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header id="header">
        <div class="logo__wrapper">
            <a href="index.html">
                <img src="img/logo.jpg" alt="Logo" />
            </a>
        </div>
         <!-- NAVBAR -->
        <div class="lang-switch">
            <a class="lang-switch__link" href="../de/index.php">DE</a> /
            <a class="lang-switch__link" href="../index.php">EN</a> /
            <span><b>NL</b></span>
        </div>
        <div class="navbar">
            <ul>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="html/whyUBT.html">Waarom UBT</a></li>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="html/WhyEmmenWhyNetherlands.html">Waarom Emmen</a></li>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="html/business.html">Zakelijk</a></li>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="html/technology.html">Technologie</a></li>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="html/contact.html">Contact</a></li>
                <li class="navbar__link--enroll-nl"><a class="navbar__link--a" href="html/enroll-now.html">Inschrijven</a></li>
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
                    <h3>Verzekering</h3>
                    <p>Verzekering beschermt mensen van elk economisch niveau tegen verliezen en vormen van risicobeheer.</p>
                    <a class="main__button" href="html/insurance.html">
                        Meer Informatie
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
                    <h3>Lucht- en ruimtevaarttechniek</h3>
                    <p>Luchtvaart- en Ruimtevaarttechniek houdt zich bezig met de ontwikkeling van allerlei soorten vliegtuigen en ruimtevaartuigen.</p>
					<a class="main__button" href="html/aerospace.html">
                        Meer Informatie
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
                    <h3>Bankieren</h3>
                    <p>Bankieren is een sector die contant geld, kredieten en andere financiële transacties verwerkt.</p>
                    <a class="main__button" href="html/banking.html">
                        Meer Informatie
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
                    <h3>Maritieme techniek</h3>
                    <p>Scheepsbouw omvat de engineering van boten, schepen, boorplatforms en elk ander zeeschip</p>
                    <a class="main__button" href="html/marine.html">
                        Meer Informatie
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content__seperator">
        <div class="content__wrapper">
            <div class="content__leftside--30">
                <h2>Waarom UBT?</h2>
                <p>
                   <p>
                    Overweeg je om in Nederland te studeren?
					Dan zou UBT University of Applied Sciences boven aan je lijst staan.
					Wij zijn een
					internationaal erkende instelling die geaccrediteerde diplomas toekent
					We zijn hebben al 
					duizenden internationale studenten  succesvol opgeleid met onze Engelstalige bachelor
					en masterprogramma's in verschillende vakgebieden.
					Deze variëren van verzekering tot scheepsbouw en ruimtevaarttechniek.</p><br>
					<p><strong>Wat is Design based learning?</strong></p>
					In Design-Based Learning (DBL), werken groepen van 7 tot 8 studenten aan het oplossen van realistische problemen,
					de zogenaamde cases. Elke groep wordt begeleid door een tutor, die de voortgang van het groepsproces bewaakt.
                </p>
            </div>
            <div class="content__rightside">
                <img src="../img/university.jpg" alt="Image" />
            </div>
        </div>
    </div>
    <div class="content__wrapper">
        <div class="content__leftside">
            <h2>Neem contact op</h2>
            <form class="main-form" action="php/thanks.php" method="POST">
                <input class="input_text" required type="text" placeholder="E-Mail" name="email" />
                <input class="input_text" required type="text" placeholder="Naam" name="name" />
                <textarea class="input_textarea" placeholder="Bericht" name="message"></textarea>
                <select class="input_select" required name="interest">
                    <option selected disabled>Wat voor informatie heeft uw nodig?</option>
                    <option value="marine">Maritieme techniek</option>
                    <option value="insurance">Verzekering</option>
                    <option value="aerospace">Lucht- en Ruimtevaarttechniek</option>
                    <option value="banking">Bankieren</option>
                </select>
                <input class="main__button" type="submit" name="submit" value="Submit">
            </form>
        </div>
        <div class="content__rightside--35">
            <?php include_once "php/weather.php"; ?>
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
                <a href="html/privacy_policy.html">Privacy Statement</a>&nbsp;|&nbsp;<a href="html/cookie_policy.html">Cookie Policy</a>&nbsp;|&nbsp;<a
                    href="html/disclaimer.html">Disclaimer</a>
            </div>
            <div class="footer__right">
                <p>University of Applied Sciences for Business and Technology Emmen</p>
            </div>
        </div>
    </footer>
</body>

</html>