<!DOCTYPE html>
<html lang="nl">

<head>


    <meta name="description" content="Webbureau - Your best option">
    <meta name="author" content="Adnane Chentouf, Pieter Janssen, Jo Naulaerts">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulierverwerking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">
    <link rel="stylesheet" href="css/verwerking.css">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic">


    <!--favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/html5/uitdaging-1/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/html5/uitdaging-1/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/html5/uitdaging-1/favicon/favicon-16x16.png">
    <link rel="manifest" href="/html5/uitdaging-1/favicon/site.webmanifest">
    <link rel="mask-icon" href="/html5/uitdaging-1/favicon/safari-pinned-tab.svg" color="#00aba9">
    <link rel="shortcut icon" href="/html5/uitdaging-1/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="/html5/uitdaging-1/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
<a class="menu-toggle rounded" href="#">
    <i class="fas fa-bars"></i>
</a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a class="js-scroll-trigger" href="index.html#page-top">Your best Option</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#welkomswoord">Welkomswoord</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#wie_zijn_wij">Maak kennis met ons team</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#recente_projecten">Recente projecten</a>
        </li>
        <li class="sidebar-nav-item">
            <a class="js-scroll-trigger" href="index.html#contact">Contact</a>
        </li>
    </ul>
</nav>

<header>
    <div class="container text-center my-auto">
        <h1 class="mb-1">
            <img src="img/logo-ybo-blauw-3.svg" alt="Logo YBO" title="YBO - Your Best Option" class="img-fluid">
        </h1>
        <h3 class="mb-5">Formulierverwerking</h3>
        <p class="beschrijving">Hieronder wordt al de verkregen informatie getoont.</p>
    </div>
    <div class="overlay"></div>
</header>


<div class="centreer">
<section >
<?php
if (isset($_POST["Inputnaam"]) && $_POST["Inputnaam"] != "") {
    echo "<p> Welkom, " . $_POST["Inputnaam"] . "</p>\n";
} else {
    echo "<p> Gebruikersnaam werd niet ingevuld </p>\n";
}

if (isset($_POST["InputEmail"]) && $_POST["InputEmail"] != "") {
    echo "<p> Ingevuld bij email: " . $_POST["InputEmail"] . "</p>\n";
} else {
    echo "<p> Email werd niet ingevuld </p>\n";
}


if (isset($_POST["bericht"]) && $_POST["bericht"] != "") {
    echo "<p> Ingevuld bij bericht: " . $_POST["bericht"] . "</p>\n";
} else {
    echo "<p> Er werd geen bericht achter gelaten </p>\n";
}

if (isset($_POST["aanraden"]) && $_POST["aanraden"] != "") {
    echo "<p> Ingevuld bij aan te raden? : " . $_POST["aanraden"] . "</p>\n";
} else {
    echo "<p> Er werd geen recentie gegeven </p>\n";
}


?>
</section>
</div>

<!-- Footer -->
<footer class="footer text-center bg-white">
    <div class="container">
        <h3>Je kan ons ook nog vinden op Github  <i class="icon-social-github"></i></h3>
        <h5>Klik op de foto's!</h5>
        <a href="https://github.com/adnanechentouf">
            <img class="rounded-circle scaleimg" src="img/foto_adnane_klein.jpg" alt="Foto Adnane"
                 title="Link naar Github Adnane">
        </a>
        <a href="https://github.com/JoNaulaerts">
            <img class="rounded-circle scaleimg" src="img/foto_jo_klein.jpg" alt="Foto Jo"
                 title="Link naar Github Jo">
        </a>
        <a href="https://github.com/Pieter-janssen">
            <img class="rounded-circle scaleimg" src="img/foto_pieter_klein.jpg" alt="Foto Pieter"
                 title="Link naar Github Pieter">
        </a>
        <div class="copyright">
            <p class="text-muted text-secondary small mb-0">Copyright &copy; Your best option - Webdesign</p>
            <p class="text-muted text-secondary small mb-0"><a href="https://www.thomasmore.be/">Thomas more</a></p>
        </div>
    </div>
</footer>

</body>

</html>