<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulierverwerking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylish-portfolio.min.css">
    <link rel="stylesheet" href="css/verwerking.css">


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


<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">
            <img src="img/logo-ybo-blauw-3.svg" alt="Logo YBO" title="YBO - Your Best Option" class="img-fluid">
        </h1>
        <h3 class="mb-5">Formulierverwerking</h3>
        <p class="beschrijving">Hieronder wordt al de verkregen informatie getoont.</p>
    </div>
    <div class="overlay"></div>
</header>


<hr>
<section class="bg-secondary">
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
</body>

</html>