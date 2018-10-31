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
        <div class="navbar">
            <ul>
                <li class="navbar__link"><a class="navbar__link--a" href="../html/whyUBT.html">Why UBT</a></li>
                <li class="navbar__link"><a class="navbar__link--a" href="../html/WhyEmmenWhyNetherlands.html">Why
                        Emmen</a></li>
                <li class="navbar__link"><a class="navbar__link--a" href="../html/business.html">Business</a></li>
                <li class="navbar__link"><a class="navbar__link--a" href="../html/technology.html">Technology</a></li>
                <li class="navbar__link"><a class="navbar__link--a" href="../html/contact.html">Contact</a></li>
                <li class="navbar__link--enroll"><a class="navbar__link--a" href="../html/enroll-now.html">Enroll now!</a></li>
            </ul>
        </div>
    </header>

    <!-- REPLACE THE IMAGE PATH -->
    <div class="title-image">
        <img src="../img/header-alumni.jpg" alt="Header Image">
    </div>

    <!-- Content -->
    <div class="content__wrapper">
        <div class="request__content">
            <?php 
        if (isset($_POST['submit']))
        {
                $name = $_POST['name'];
                $email = $_POST['email'];
    
            echo "<p>Dear " . $name . " A member of the UBT Student Administration will be contacting you on " . $email . " as soon as possible.</p>";
            echo "<p>Thank you for your patience. " . $name . "</p>";
        } else {
            header('Location: ../index.html');
        }
        ?>
        </div>
    </div>

    <footer id="footer">
        <div class="footer__wrapper">
            <div class="footer__left">
                <a href="#">Imprint</a>&nbsp;|&nbsp;<a href="#">Datasecurity</a>&nbsp;|&nbsp;<a href="#">Disclaimer</a>
            </div>
            <div class="footer__right">
                <p>University of Applied Sciences for Business and Technology Emmen</p>
            </div>
        </div>
    </footer>
</body>

</html>