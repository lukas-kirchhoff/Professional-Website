<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thank you</title>
    <meta name="description" content="Professional Website">
    <link rel="stylesheet" type="text/css" href="../css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
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
<<<<<<< HEAD
                <li class="navbar__link"><a class="navbar__link--a" href="../html/WhyEmmenWhyNetherlands.html">Why
                        Emmen</a></li>
=======
                <li class="navbar__link"><a class="navbar__link--a" href="../html/WhyEmmenWhyNetherlands.html">Why Emmen</a></li>
>>>>>>> d65f5156133e08fa712c685d4639ae846e903a45
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
<<<<<<< HEAD
            <?php 
=======
        <?php 
>>>>>>> d65f5156133e08fa712c685d4639ae846e903a45
        if (isset($_POST['submit']))
        {
                $name = $_POST['name'];
                $interest = $_POST['interest'];
                $email = $_POST['email'];
    
<<<<<<< HEAD
            echo "<h1 class='thanks__headline'>Thank you for your interest in " . ucfirst($interest)^ . "</h1>"; 
            echo "<p>Dear " . $name . " we will send you some more information to " . $email . " as soon as possible</p>";
            echo "<p>As long as you are waiting you can click this link to see more about " . $interest . "</p>";
            echo "<a class='main__button' href='../html/" . $interest . ".html'>more Information</a>";
        } else {
            header('Location: ../index.html');
        }
        ?>
        </div>
=======
            echo "<h1 class='thanks__headline'>Thank you for your interest in " . $interest . "</h1>"; 
            echo "<p>Dear " . $name . " we will send you some more information to " . $email . " as soon as possible</p>";
            echo "<p>As long as you are waiting you can click this link to see more about " . $interest . "</p>";
            echo "<a class='main__button' href='../html/" . $interest . ".html'>more Information</a>";
        } ?>
    </div>
>>>>>>> d65f5156133e08fa712c685d4639ae846e903a45
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