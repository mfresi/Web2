<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exo_2_fonction</title>
    <h1>Exo_2_fonction</h1>
</head>
<body>
<?php Function tableau($colonne1,$colonne2){?>
       
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

   <?php echo tableau($colonne1,$colonne2); ?>
   
   <a href="http://192.168.65.195/ProjetBTS/Mattei/Exercice%20PHP/Exo%20fonction%20php/">Retour</a><br>
    
</body>
</html>