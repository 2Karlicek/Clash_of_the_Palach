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
        <h1><div id="result"><script>
    function timecount() {
  var currentDate = new Date();

  // Pevně dané datum (30.10.2023) a přidání 10 hodin
  var specificDate = new Date(2023, 11, 5);
  specificDate.setHours(specificDate.getHours() + 10);
  

  // Výpočet rozdílu mezi aktuálním datem a pevným datem
  var timeDifference = specificDate - currentDate;

  // Převod milisekund na dny, hodiny a minuty
  var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
  var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((timeDifference % (1000 * 60)) / (1000));
  // Vypsání výsledku do elementu s ID "result"
  if (days == 0){
    document.getElementById('result').innerHTML ='Další zápas za ' + hours + ' hodin, ' + minutes + ' minut, ' + seconds + " sekund";}
  else if(hours == 0){
    document.getElementById('result').innerHTML = 'Další zápas za ' + days + ' dní, ' + minutes + ' minut, ' + seconds + " sekund";
  }
  else if(minutes == 0){
    document.getElementById('result').innerHTML = 'Další zápas za ' + days + ' dní, ' + hours + ' hodin, ' + seconds + " sekund";
  }
  else{
    document.getElementById('result').innerHTML = 'Další zápas za ' + days + ' dní, ' + hours + ' hodin, ' + minutes + ' minut, ' + seconds + " sekund";
  }
  

  
  
  // Vracíme aktuální rozdíl pro použití při volání setTimeout
  return timeDifference;
}

// Spuštění funkce timecount ihned a poté každou minutu, dokud rozdíl není 0
function runTimecount() {
  var remainingDifference = timecount();
  
  var colors = ["#FF5733", "#33FF57", "#5733FF", "#FF33A1", "#33A1FF", "#A1FF33", "#FF3388", "#3388FF", "#88FF33", "#FF8833"];

// Funkce pro získání náhodné barvy z pole
  function getRandomColor() {
    var randomIndex = Math.floor(Math.random() * colors.length);
    return colors[randomIndex];
  }

// Použití funkce pro získání náhodné barvy

document.getElementById('result').style.background = getRandomColor();
  
  // Pokud je rozdíl stále větší než 0, spusťte setTimeout znovu
  if (remainingDifference > 0) {
    // Nastavíme setTimeout na 60000 milisekund (1 minutu) a poté spustíme runTimecount znovu
    setTimeout(function () {
      runTimecount();
    }, 1000);
  } else {
    console.log('Interval byl zastaven, protože rozdíl dosáhl nuly.');
  }
}

// Spuštění
runTimecount();
 
          


</script>

</div></h1>
    



            
           
        </section>

        <section id="about">
            
        </section>

    </main>
    <footer>
        <p>&copy; Clash of the Palach 2023/2024</p>
    </footer>
    
</body>
</html>