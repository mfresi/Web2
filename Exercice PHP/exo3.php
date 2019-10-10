<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 3</title>
    <h2>Exercice 3</h2>
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
<xmp>
<tr>
      $tab[0] = array("nom"=> "Fresi","Prenom"=>"Mattei","motDePasse"=>"1234");
      $tab[1] = array("nom"=> "Omeluck","Prenom"=>"Sylvie","motDePasse"=>"4567");
      $tab[2] = array("nom"=> "Hameau","Prenom"=>"Eliott","motDePasse"=>"8910");

 for ($i=0;$i<3;$i++){
     foreach ($tab[$i] as $Key=>$Value)
    {
    
        <tr><td> echo $Key;</td>
        <td> echo $Value;</td></tr>
        
    }
}

</tr>
</xmp>

<a href="http://192.168.65.195/ProjetBTS/Mattei/Exercice%20PHP/">Retour</a><br>   
</body>
</html>