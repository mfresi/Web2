<!DOCTYPE html>
<html lang="en">
<?php Function tableau(){?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Exo_1_fonction.css">
    <title>Ecercice 1 fonction</title>
    <h1> Exercice 1 fonction</h1>
</head>
<body>
   
        
        <table border="1">
<tr>
<?php $tab[0] = array("nom"=> "Fresi","Prenom"=>"Mattei","motDePasse"=>"1234");
      $tab[1] = array("nom"=> "Omeluck","Prenom"=>"Sylvie","motDePasse"=>"4567");
      $tab[2] = array("nom"=> "Hameau","Prenom"=>"Eliott","motDePasse"=>"8910");

 for ($i=0;$i<3;$i++){
     foreach ($tab[$i] as $Key=>$Value)
    {
    ?>
        <tr><td><?php echo $Key;?></td>
        <td><?php echo $Value;?></td></tr>
        <?php
    }
}
?>
</tr>
</table>


    <?php    
    }

    ?>

    <?php echo tableau(); ?>
    <div class="tableaubas">
        <?php echo tableau(); ?>
    </div>

    
</body>
</html>