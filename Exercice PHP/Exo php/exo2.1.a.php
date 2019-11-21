<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 2.1</title>
    <h2> Exercice 2.1.a </h2>
</head>
<body>
<table border="1">
    <tr>
<?php
    $MonTableauDeChiffre = array(12,132,13,65,474);
    //i++ reviens a $i=$i+1
    for ($i=0; $i < 5; $i++) {
        ?><td><?php echo $MonTableauDeChiffre[$i]; ?></td>
    <?php
    }

?>
    </tr>
</table>

<xmp>
    
    <tr>
    $MonTableauDeChiffre = array(12,132,13,65,474);
    //i++ reviens a $i=$i+1
    for ($i=0; $i < 5; $i++) {
        ?><td> echo $MonTableauDeChiffre[$i]; ?></td>
    
    }


    </tr>
</xmp>

<a href="http://192.168.65.195/ProjetBTS/Mattei/Exercice%20PHP/">Retour</a><br>
    
</body>
</html>