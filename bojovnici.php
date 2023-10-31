<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moderní webová stránka</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <img src="finallogo.png" id="logo">
    <br>
    <?php
        include "include.php";
    ?>

    <main>
        <section id="hero">
       
        <div class="karta">
            <h2>Pan Červenka</h2>
            <img src="cer.png">
            <ul>
                <li>Health = <?php echo 5;?> HP</li>
                <li>IQ = <?php echo "infinity";?></li>
                <li>DAMAGE = <?php echo 100;?></li></li>
                <li></li>

            </ul>




        </div>

        
    

        </section>

        <section id="about">
            
        </section>

    </main>
    <footer>
        <p>&copy; Clash of the Palach 2023/2024</p>
    </footer>
    
</body>
</html>