<html>
<head>
<style>
table, tr, td {
  border: 1px solid black;
}
h1 {
  text-align: center;
}

form {
  text-align: center;
}
.hustota {
  text-align: center;
  background-color: red;
}
</style>
</head>
<body>
<?php
echo "<table>";
for ($i = 0; $i < 10; $i++) {
  echo "<tr>";
  for ($x = $i * 10; $x <= $i * 10 + 10; $x++) {
      echo "<td>$x</td>";
  }
  echo "</tr>";
}
echo "</table>";

if(isset($_POST["sub"])){
  $mass = $_POST["mass"];
  $density = $_POST["density"];
  $size = $_POST["size"];
}else{
  $mass = "";
  $density = "";
  $size = "";
}
?>


<h1>Hustota</h1>

<form action="zk.php" method="post" >
Mass: <input type="double" name="mass" value = <?php  echo $mass;  ?>><br>
Density: <input type="double" name="density" value = <?php  echo $density;  ?>><br>
Size: <input type="double" name="size"  value = <?php  echo $size;  ?>><br> 
<input type="submit" name="sub">
</form>

<div class="hustota">
<?php

    function densitycalculation($mass, $size){
      return $mass/$size;
    }
    function sizecalculation($mass, $density){
      return $mass/$density;
    }
    function masscalculation($density, $size){
      return $density*$size;
    }
    if(isset($_POST["sub"])){
      $beznoska = array("Chyba, mladý muži", "Pane Kučiár, ty seš pro život ztracenej", "Ty seš ale blbísek", "Špatný matriál", "Ty neumíš nakreslit ani čáru!!!");
      $Bez = "Beznoska: ";

      
      if($mass && $size && !$density){
        echo densitycalculation($mass, $size);
        
      }

      elseif ($mass && $density && !$size){
       echo sizecalculation($mass, $density);
      }
      elseif ($size && $density && !$mass){
        echo masscalculation($density, $size);

      }
      else{
        $randomIndex = array_rand($beznoska);
        $randomQuote = $beznoska[$randomIndex];
        echo "<b>$Bez.$randomQuote</b>";
      }
      
   
    }
    else {
        
    }

?>
</div>


<form>
  









</body>
</html>
