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
        <h2>Registrace</h2>
        <label for="username">Uživatelské jméno:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Heslo:</label>
        <input type="password" id="password" name="password" required>

        <label for="password2">Heslo ještě jednou:</label>
        <input type="password" id="password" name="password2" required>


        <input type="checkbox"  name="check">

        <label for="novzduch">Příjmáním těchto podmínek se vzdáváte práva na vzduch.</label>


        <input type="submit" value="Registrovat" name="submit">
    </form>
    
    
    <?php
    $users = array();
    $admin = 0;
    if(isset($_POST["submit"])){
        $usernamepost = $_POST["username"];
        $emailpost = $_POST["email"];
        $passwordpost = $_POST["password"];
        $password2post = $_POST["password2"];

        

       if ($_POST["check"] == "on"){
        if ($passwordpost == $password2post){
            $servername = "dbs.spskladno.cz";
            $username = "student12";
            $password = "spsnet";
            $dbname = "vyuka12";

            $conn = new mysqli($servername, $username, $password, $dbname);
            $hashdata = hash("sha256", $passwordpost);
            $query = "INSERT INTO cotp(username, email ,password, isadmin) VALUES('$usernamepost','$emailpost', '$hashdata', '$admin')";

            $result = mysqli_query($conn, $query);
            echo "super";
            header("Location: prihlaseni.php");

            if(!$result){
                die("bad");
            }

        }
       }
       else{

       }

        
    }

    ?>

</body>
</html>
