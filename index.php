<!DOCTYPE html >
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>
    <meta name="description" content="Professional Website">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header id="header">
        <div class="logo__wrapper">
            <a href="index.php">
                <img src="img/logo.jpg" alt="Logo" />
            </a>
        </div>
        <!-- NAVBAR -->
        <div class="lang-switch">
            <a class="lang-switch__link" href="de/index.php">DE</a> /
            <a class="lang-switch__link" href="nl/index.php">NL</a> /
            <span><b>EN</b></span>
        </div>
        <div class="navbar">
            <ul>
                <li class="navbar__link"><a class="navbar__link--a" href="html/whyUBT.html">Why UBT</a></li>
                <li class="navbar__link"><a class="navbar__link--a" href="html/WhyEmmenWhyNetherlands.html">Why Emmen</a></li>
                <li class="navbar__link"><a class="navbar__link--a" href="html/business.html">Business</a></li>
                <li class="navbar__link"><a class="navbar__link--a" href="html/technology.html">Technology</a></li>
                <li class="navbar__link"><a class="navbar__link--a" href="html/contact.html">Contact</a></li>
                <li class="navbar__link--enroll"><a class="navbar__link--a" href="html/enroll-now.html">Enroll now!</a></li>
            </ul>
        </div>
    </header>

    <!-- REPLACE THE IMAGE PATH -->
    <div class="title-image">
        <img src="img/header-alumni.jpg" alt="Header Image">
    </div>

    <!-- Content -->
    <div class="content__wrapper">
        <!-- Place your code inhere -->
        <div class="content__wrapper--boxes">
            <div class="content-boxes">
                <div class="content-boxes__header">
                    <img src="img/icons/document.svg" alt="insurance icon"/>
                </div>
                <div class="hr__wrapper">
                    <hr />
                </div>
                <div class="content__main">
                    <h3>Insurance</h3>
                    <p>Insurance protects people from every economic level from losses and forms of risk management.</p>
                    <a class="main__button" href="html/insurance.html">
                        More Information
                    </a>
                </div>
            </div>
            <div class="content-boxes">
                <div class="content-boxes__header">
                    <img src="img/icons/plane.svg" alt="Aerospace Icon"/>
                </div>
                <div class="hr__wrapper">
                    <hr />
                </div>
                <div class="content__main">
                    <h3>Aerospace</h3>
                    <p>Aerospace engineering is concerned with the development of all kinds aircraft and spacecraft.</p>
                    <a class="main__button" href="html/aerospace.html">
                        <!-- TODO Add Link to Aerospace -->
                        More Information
                    </a>
                </div>
            </div>
            <div class="content-boxes">
                <div class="content-boxes__header">
                    <img src="img/icons/pay.svg" alt="Banking icon" />
                </div>
                <div class="hr__wrapper">
                    <hr />
                </div>
                <div class="content__main">
                    <h3>Banking</h3>
                    <p>Banking is an industry that handles cash, credit, and other financial transactions.</p>
                    <a class="main__button" href="html/banking.html">
                        More Information
                    </a>
                </div>
            </div>
            <div class="content-boxes">
                <div class="content-boxes__header">
                    <img src="img/icons/cruise.svg" alt="Marine Engineering icon" />
                </div>
                <div class="hr__wrapper">
                    <hr />
                </div>
                <div class="content__main">
                    <h3>Marine</h3>
                    <p>Marine engineering includes the engineering of boats, ships, oil rigs and any other marine vessel</p>
                    <a class="main__button" href="html/marine.html">
                        <!-- TODO Add Link to Marine -->
                        More Information
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content__seperator">
        <div class="content__wrapper">
            <div class="content__leftside--30">
                <h2>Why UBT?</h2>
                <p>
                    Are you considering studying in the Netherlands?
                    If so, UBT University of Applied Sciences should
                    be right at the top of your list. We are an
                    internationally recognised institution that awards
                    accredited degrees. We have already successfully educated
                    thousands of international students with our English-language bachelor
                    and master programmes in a variety of subject areas.
                    These range from Insurance to Marine engeneering to Aerospace engeneering.</p><br>
                <p><strong>What is Design based learning?</strong></p>
                <p>
                    In Design-Based Learning (DBL), groups of 7 to 8 students work on solving realistic problems,
                    the so-called cases. Each group is supervised by a tutor, who monitors the progress of the group process.
                </p>
            </div>
            <div class="content__rightside">
                <img src="img/university.jpg" alt="Image" />
            </div>
        </div>
    </div>
    <div class="content__wrapper">
        <div class="content__leftside">
            <h2>Contact</h2>
            <form class="main-form" action="php/thanks.php" method="POST">
                <input class="input_text" required type="text" placeholder="E-Mail" name="email" />
                <input class="input_text" required type="text" placeholder="Name" name="name" />
                <textarea class="input_textarea" placeholder="Message" name="message"></textarea>
                <select class="input_select" required name="interest">
                    <option selected disabled>What Information do you need?</option>
                    <option value="marine">Marine</option>
                    <option value="insurance">Insurance</option>
                    <option value="aerospace">Aerospace</option>
                    <option value="banking">Banking</option>
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
                <a href="html/privacy_policy.html">Privacy Statement</a>&nbsp;|&nbsp;<a href="html/cookie_policy">Cookie Policy</a>&nbsp;|&nbsp;<a href="html/disclaimer.html">Disclaimer</a>
            </div>
            <div class="footer__right">
                <p>University of Applied Sciences for Business and Technology Emmen</p>
            </div>
        </div>
    </footer>
</body>

</html>
