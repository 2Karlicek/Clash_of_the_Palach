<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderní webová stránka</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        include "include.php";
    ?>

    <main>
        <section id="hero">
        <b id="result"><script>
    function timecount() {
  var currentDate = new Date();

  // Pevně dané datum (30.10.2023) a přidání 10 hodin
  var specificDate = new Date(2023, 9, 30);
  specificDate.setHours(specificDate.getHours() + 10);

  // Výpočet rozdílu mezi aktuálním datem a pevným datem
  var timeDifference = specificDate - currentDate;

  // Převod milisekund na dny, hodiny a minuty
  var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
  var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));

  // Vypsání výsledku do elementu s ID "result"
  document.getElementById('result').innerHTML = 'Rozdíl: ' + days + ' dní, ' + hours + ' hodin, ' + minutes + ' minut';
  
  // Vracíme aktuální rozdíl pro použití při volání setTimeout
  return timeDifference;
}

// Spuštění funkce timecount ihned a poté každou minutu, dokud rozdíl není 0
function runTimecount() {
  var remainingDifference = timecount();

  // Pokud je rozdíl stále větší než 0, spusťte setTimeout znovu
  if (remainingDifference > 0) {
    // Nastavíme setTimeout na 60000 milisekund (1 minutu) a poté spustíme runTimecount znovu
    setTimeout(function () {
      runTimecount();
    }, 60000);
  } else {
    console.log('Interval byl zastaven, protože rozdíl dosáhl nuly.');
  }
}

// Spuštění
runTimecount();
 
          


</script></b>
    



            
           
        </section>

        <section id="about">
            
        </section>

    </main>
    <footer>
        <p>&copy; Clash of the Palach 2023/2024</p>
    </footer>
    
</body>
</html>