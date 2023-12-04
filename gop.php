<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderní webová stránka</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* CSS pro formátování textu */
        #uzivatel-jmeno {
            font-size: 24px; /* Velikost písma */
            text-align: center; /* Zarovnání textu na střed */
            margin-top: 50px; /* Vertikální odsazení textu od horního okraje */
            font-weight: bold; /* Tučné písmo */
        }

        body {
            background: linear-gradient(to bottom, blue, purple); /* Lineární přechod z modré do fialové */
            height: 100vh; /* Nastavení výšky stránky na celou výšku viewportu */
            margin: 0; /* Resetování okrajů */
        }

    </style>
</head>
<body>        
    <?php

        include "include.php";
    ?>
    <br>

    <main>
        <section id="hero">
            <h1>Clash of the Palach</h1>
          
            <p></p>
            <a href="#" class="cta-button">Zjistit více</a>
        </section>

        <section id="about">
            <h2>O Clash of the Palach</h2>
            <p>CLash of the Palach byl tytvořen </p>
        </section>

        <section id="services">
            <h2>Naše služby</h2>
            <ul>
                <li>Webový design</li>
                <li>E-commerce řešení</li>
                <li>Digitální marketing</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Naše Společnost</p>
        
    </footer>
</br>
<?php
// Zkontrolujeme, zda relace ještě není aktivní
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['odhlasit'])) {
    unset($_SESSION["uzivatel"]);
    unset($_SESSION["heslo"]);
    session_destroy();
}

// Ověříme, zda je uživatel přihlášen
if (isset($_SESSION['uzivatel']) && isset($_SESSION['heslo'])) {
    echo "<div id='uzivatel-jmeno'>" . strtoupper($_SESSION["uzivatel"]) . "</div>";
    ;
} else {
    echo "<div id='uzivatel-jmeno'>Nepřihlášen</div>";
}
?>

   
</body>
</html>