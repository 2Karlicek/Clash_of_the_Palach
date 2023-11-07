<html>
    <head></head>
    <body>
        <h1>Cookies</h1>
        <?php
// Nastavení cookie
setcookie("jmeno", "John", time() + 3600, "/"); // Expirace po jedné hodině

// Čtení hodnoty cookie

$jmeno = $_COOKIE['jmeno'];

// Kontrola, zda cookie existuje
if(isset($_COOKIE['jmeno'])) {
    echo "Cookie 'jmeno' obsahuje hodnotu: " . $jmeno;
} else {
    echo "Cookie 'jmeno' není nastaveno.";
}
?>
    </body>
</html>


