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
            <a href="../index.php">
                <img src="../img/logo.jpg" alt="Logo" />
            </a>
        </div>
        <!-- NAVBAR -->
        <div class="lang-switch">
            <a class="lang-switch__link" href="../de/index.php">DE</a> /
            <a class="lang-switch__link" href="../nl/index.php">NL</a> /
            <span><b>EN</b></span>
        </div>
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
        <div class="thanks__content">
            <?php 
        if (isset($_POST['submit']))
        {
                $name = $_POST['name'];
                $interest = $_POST['interest'];
                $email = $_POST['email'];
    
            echo "<h1 class='thanks__headline'>Thank you for your interest in " . ucfirst($interest) . "</h1>"; 
            echo "<p>Dear " . $name . " we will send you some more information to " . $email . " as soon as possible</p>";
            echo "<p>As long as you are waiting you can click this link to see more about " . ucfirst($interest) . "</p>";
            echo "<a class='main__button' href='../html/" . $interest . ".html'>more Information</a>";
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