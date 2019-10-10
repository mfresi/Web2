<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 4</title>
    <h2>Exercice 4</h2>
</head>
<body>
<?php

  function racines($A, $B, $C) {
    echo "Recherche des solutions de l'équation $A x² + $B x + $C<br>";
    $delta = $B*$B - (4 * $A * $C);
    if ($delta < 0)
      echo "Cette équation n'a pas de solution.";
    if ($delta == 0)
      echo "Cette équation a une racine double égale à ".-$b/(2*$A);
    if ($delta > 0){
      $racine1 = (-$B - sqrt($delta))/(2*$A);
      $racine2 = (-$B + sqrt($delta))/(2*$A);
      echo "Cette équation a deux racines : $racine1 et $racine2";
    }
  }
  racines(3, 5, 1);
?><br>
<xmp>
function racines($A, $B, $C) {
    echo "Recherche des solutions de l'équation $A x² + $B x + $C<br>";
    $delta = $B*$B - (4 * $A * $C);
    if ($delta < 0)
      echo "Cette équation n'a pas de solution.";
    if ($delta == 0)
      echo "Cette équation a une racine double égale à ".-$b/(2*$A);
    if ($delta > 0){
      $racine1 = (-$B - sqrt($delta))/(2*$A);
      $racine2 = (-$B + sqrt($delta))/(2*$A);
      echo "Cette équation a deux racines : $racine1 et $racine2";
    }
  }
  racines(3, 5, 1);
<br>
</xmp>
<a href="http://192.168.65.195/ProjetBTS/Mattei/Exercice%20PHP/">Retour</a><br>    
</body>
</html>