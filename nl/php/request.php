<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thank you</title>
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
            <a href="../index.html">
                <img src="../img/logo.jpg" alt="Logo" />
            </a>
        </div>
         <!-- NAVBAR -->
        <div class="lang-switch">
            <a class="lang-switch__link" href="../../de/index.php">DE</a> /
            <a class="lang-switch__link" href="../../index.php">EN</a> /
            <span><b>NL</b></span>
        </div>
        <div class="navbar">
            <ul>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="whyUBT.html">Waarom UBT</a></li>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="WhyEmmenWhyNetherlands.html">Waarom Emmen</a></li>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="business.html">Zakelijk</a></li>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="technology.html">Technologie</a></li>
                <li class="navbar__link-nl"><a class="navbar__link--a" href="contact.html">Contact</a></li>
                <li class="navbar__link--enroll-nl"><a class="navbar__link--a" href="enroll-now.html">Inschrijven</a></li>
            </ul>
        </div>
    </header>

    <!-- REPLACE THE IMAGE PATH -->
    <div class="title-image">
        <img src="../../img/header-alumni.jpg" alt="Header Image">
    </div>

    <!-- Content -->
    <div class="content__wrapper">
        <div class="request__content">
            <?php 
        if (isset($_POST['submit']))
        {
                $name = $_POST['name'];
                $email = $_POST['email'];
    
            echo "<p>Beste " . $name . " Een lid van de studentenadministratie van UBT neemt contact met u op " . $email . " zo snel mogelijk.</p>";
            echo "<p>Bedankt voor uw geduld. " . $name . "</p>";
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