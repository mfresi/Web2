<html>
    <head>
    <link href="stylephp.css" rel="steelsheet">
    <title>Entrainement PHP</title>
    </head>
    <body>
        <h1>
        <?php echo "Serveur Fresi"; ?>
        </h1>
        <h2>
            test 1
        </h2>
        <div class="rouge">
            <div>
        <?php 
            $VariableTest =  "Je suis une variable";
            ?> <?php echo $VariableTest; 
        ?>
            
            </div>
        </div>

        <h2>Test formulaire </h2>
    <?php
    // Test de la variable Get LeChiffre
    if (isset($_GET['LeChiffre'])){
        echo "Ma valeur est :".$_GET['LeChiffre'];
    }else{
        echo "Formulaire non saisie";
        ?>
        <form action="exo_exemple.php" method="GET">
            <label>votre chiffre </label> 
            
            <input type="text" name="LeChiffre"  />

            <input type="submit" name="Valider" value="Cliquer pour valider"  />
        </form> 
        <?php
    }

    ?>




<a href="http://192.168.65.195/ProjetBTS/Mattei/">Retour</a>




    </body>
</html>

