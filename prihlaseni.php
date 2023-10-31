<?php  
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="flex">
    <?php
        include "include.php";
    ?>
    <br>
    
    <form method="post">
        <h2>Přihlášení</h2>
        <label for="username">Uživatelské jméno:</label>
        <input type="text" id="username" name="username" required>

        

        <label for="password">Heslo:</label>
        <input type="password" id="password" name="password" required>

        

        <input type="submit" value="Přihlásit" name="submit">
    </form>
    
    
    <?php
    if(isset($_POST["submit"])){
    $usernamepost = $_POST["username"];
    $passwordpost = $_POST["password"];

    $servername = "dbs.spskladno.cz";
    $username = "student12";
    $password = "spsnet";
    $dbname = "vyuka12";



    $conn = new mysqli($servername, $username, $password, $dbname);
    $hashdata = hash("sha256", $passwordpost);

    $sql = "SELECT * FROM cotp WHERE username = '$usernamepost' AND password = '$hashdata'";
    $result = $conn->query($sql);

    // Zkontrolování, zda byly nalezeny shodné přihlašovací údaje v databázi
    if ($result->num_rows > 0) {
        echo "přihlášen";
        $pole = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($pole as $radek) {
            $isadmin = $radek["isadmin"];
            
        }
        $_SESSION['uzivatel'] = $usernamepost;
        $_SESSION['heslo'] = $hashdata;
        $_SESSION['isadmin'] = $isadmin;
        echo $isadmin;
                        
        
       
       
     
        
        exit();
        
    } else {
        // Přihlašovací údaje nejsou platné, zobrazíme chybovou zprávu uživateli
        echo "Chybné přihlašovací údaje!";
    }

    // Uzavření spojení s databází
    $conn->close();
}
    ?>

</body>
</html>
