<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 7</title>
    <h2>Exercice 7</h2>
</head>
<body>    
    <?php session_start ();?>
    <form action="exo7.php" method="POST">
    
    <p>
    <input type="text" name="MotSaisie" />
    <input type="submit" value="Valider" />
    </p>
    </form>
    
    <?php   if (isset($_POST["MotSaisie"])) {
    $_SESSION["IndiceSession"] = $_POST["MotSaisie"];
    echo "Vous avez saisie :".$_POST["MotSaisie"];
    } 
    ?>

    <xmp>
    session_start ();
    <form action="exo7.php" method="POST">
    
    <p>
    <input type="text" name="MotSaisie" />
    <input type="submit" value="Valider" />
    </p>
    </form>
    
      if (isset($_POST["MotSaisie"])) {
    $_SESSION["IndiceSession"] = $_POST["MotSaisie"];
    echo "Vous avez saisie :".$_POST["MotSaisie"];
    } 
    
    
    </xmp>


<a href="http://192.168.65.195/ProjetBTS/Mattei/Exercice%20PHP/">Retour</a><br>    
</body>
</html>