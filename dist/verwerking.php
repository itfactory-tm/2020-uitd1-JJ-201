<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulierverwerking</title>
</head>

<body>
<h1>Formulierverwerking</h1>
<p>Niet alle formuliervelden worden hieronder nog eens getoond. We ontvingen wel alle informatie!</p>
<hr>
<?php
if (isset($_POST["naam"]) && $_POST["naam"] != "") {
    echo "<p> Ingevuld bij naam: " . $_POST["naam"] . "</p>\n";
} else {
    echo "<p> Gebruikersnaam werd niet ingevuld </p>\n";
}

if (isset($_POST["email"]) && $_POST["email"] != "") {
    echo "<p> Ingevuld bij email: " . $_POST["email"] . "</p>\n";
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

</body>

</html>