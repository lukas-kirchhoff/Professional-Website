<!DOCTYPE html >
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Danke!</title>
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
            <a href="../index.php">
                <img src="../../img/logo.jpg" alt="Logo" />
            </a>
        </div>
        <!-- NAVBAR -->
        <div class="lang-switch">
        <a class="lang-switch__link" href="../de/index.php">DE</a> /
        <a class="lang-switch__link" href="../../index.php">EN</a> /
            <span><b>NL</b></span>
        </div>
        <div class="navbar">
            <ul>
                <li class="navbar__link-de"><a class="navbar__link--a" href="../html/warum-ubt.html">Warum UBT</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="../html/warum-emmen.html">Warum Emmen</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="../html/geschaeft.html">Geschäft</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="../html/technologie.html">Technologie</a></li>
                <li class="navbar__link-de"><a class="navbar__link--a" href="../html/kontakt.html">Kontakt</a></li>
                <li class="navbar__link--enroll-de"><a class="navbar__link--a" href="../html/jetzt-einschreiben.html">Jetzt einschreiben!</a></li>
            </ul>
        </div>
    </header>

    <!-- REPLACE THE IMAGE PATH -->
    <div class="title-image">
        <img src="../../img/header-alumni.jpg" alt="Header Image">
    </div>

    <!-- Content -->
    <div class="content__wrapper">
        <div class="thanks__content">
            <?php 
        if (isset($_POST['submit']))
        {
                $name = $_POST['name'];
                $interest = $_POST['interest'];
                $email = $_POST['email'];
    
            echo "<h1 class='thanks__headline'>Danke für Ihr Interesse in: " . ucfirst($interest) . "</h1>"; 
            echo "<p>" . $name . " wir senden Ihnen so schnell wie möglich mehr Informationen an: " . $email . "</p>";
            echo "<p>So lange Sie warten kannst können Sie hier mehr über " . ucfirst($interest) . " lesen</p>";
            echo "<a class='main__button' href='../html/" . $interest . ".html'>mehr Informationen</a>";
        } else {
            header('Location: ../index.php');
        }
        ?>
        </div>
    </div>

    <footer id="footer">
        <div class="footer__wrapper">
            <div class="footer__left">
                <a href="../html/privacy_policy.html">Privacy Statement</a>&nbsp;|&nbsp;<a href="../html/cookie_policy.html">Cookie Policy</a>&nbsp;|&nbsp;<a href="../html/disclaimer.html">Disclaimer</a>
            </div>
            <div class="footer__right">
                <p>University of Applied Sciences for Business and Technology Emmen</p>
            </div>
        </div>
    </footer>
</body>

</html>
