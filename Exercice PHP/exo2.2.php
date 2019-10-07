<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 2.2</title>
    <h2> Exercice 2.2 </h2>
</head>
<body>
<table border="1">
<?php $tableau = array('Nom' => 'Fresi','Prenom' => 'Mattei','MDP' => 18);
?>
<tr>
    <td>
<?php echo $tableau['Nom'];?>
    </td>
    <td>

<?php echo $tableau['Prenom'];?>
    </td>
    <td>
<?php echo $tableau['MDP'];?>
    </td>
</tr>

</table>

<a href="http://192.168.65.195/ProjetBTS/Mattei/Exercice%20PHP/">Retour</a><br>
</body>
</html>