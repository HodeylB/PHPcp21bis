<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="XXX">
    <meta name="copyright" content="© copyright by XXX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Première approche</title>
    <!-- FontAwesome ==> C'est une police de caratères qui affiche des icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Bootstrap ==> C'est un framework (html, css et javascript) facilitant la mise en page (responsive) d'une page web -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <?php require_once("menu.php");?>

    <!-- Vérification du chemin du fichier -->

    <?=__FILE__ ?>

    <hr class="my-5">

    <?php include_once("functions.php");?>

    <?php alert() ?>

    <hr class="my-5">

    <?php 
        // tableau associatif

        $identity = [

            "prenom" => "Alpha", 
            "age" => 7.23 // pour mettre des chiffres avec virgule il faut utiliser le point

        ];

        var_dump($identity); // return du contenu et infos tableau identity

        // empacter les résultats du tableau associatifs dans des variables pour les afficher :
        $prenom = $identity["prenom"];
        $age = $identity["age"];
        $ecart = 12;

        ?>

    <hr class="my-5">

    <h1> <?= "Hello $prenom : la \"fétarde\" d'aujourd'hui <br>"; ?> </h1>

    <?php 

    // méthode pour appeler la variable prénom :
        
        echo "Comment ça va $prenom ? <br> ";

        // méthode pour appeler directement la donnée directement depuis tableau associatif : 

        echo "Comment ça va {$identity["prenom"]} ? <br> ";

        echo " Tu as quel âge ? $age ans <br> ";

        echo "Dans ".($ecart)." ans, tu seras âgé de ".($age + 8). " ans.  <br> ";
        
        ?>

    <hr class="my-5">

    <!-- Formulaire avec méthode POST -->

    <form action="action.php" method="post" class="input-group form-group modifForm">
        <p class="input-group-prepend input-group-text">
            Votre prenom : <input type="text" name="prenom" required /></p>
        <p class="input-group-prepend input-group-text">Votre nom : <input type="text" name="nom" required /></p>
        <p class="input-group-prepend input-group-text">Votre âge : <input type="text" name="age" required /></p>
        <p class="input-group-prepend input-group-text">L'écart souhaité : <input type="text" name="ecart" required />
        </p>
        <p><input type="submit" value="OK" class="btn btn-primary"></p>
    </form>

    <!-- Pour avoir les réponses sur la même page, il faut supprimer l'attribut action="action.php" et supprimer ce commentaire

        <p> Bonjour, <?= ($_POST['prenom']); ?> </p>

<p>Tu as <?= (int)$_POST['age']; ?> ans.</p>
<p><?= "Dans ".(int)$_POST['ecart']." ans, tu seras âgé de ".((int)$_POST['age'] + (int)$_POST['ecart']). " ans.  <br> "; ?>
</p>

-->
    <!-- Afficher formulaire si il n'est pas vide -->

    <hr class="my-5">

    <?php 

if(!empty($_POST)):
    var_dump($GLOBALS);
    $anneeEcart = 8; ?>
    <h1>Salut <?=ucfirst($_POST["firstName"]); ?></h1>
    <p>Tu as <?=$_POST["old"];?> ans et dans <?=$anneeEcart?> ans tu seras âgé de <?=$_POST["old"]+$anneeEcart;?> </p>
    <?php else: ?>
    <form action="" method="post" class="input-group form-group modifForm">
        <p class="input-group-prepend input-group-text">Votre nom : <input type="text" name="firstName" required /></p>
        <p class="input-group-prepend input-group-text">Votre âge : <input type="text" name="old" required /></p>
        </p>
        <p><input type="submit" value="OK" class="btn btn-primary"></p>
    </form>

    <?php endif;

?>
<hr class="my-5">

<?php

$bjr = "Bonjour";
$max = 3;

for ($i = 0 ; $i < $max ; $i++) {
$bjr .= $i +1 . ($i < ($max - 1) ? ", " : ".");
} 
echo $bjr;

?>

<hr class="my-5">

<img src="capture-boucles.png" alt="" class="capture">
    <!-- CSS Additionnel pour centrer les formulaires -->

    <style>
        .modifForm {
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            width: 50%;
            text-align: center;
        }

        p input {
            margin: 0 auto;
        }

        .capture {
            width: 50%;
            height: 50%;
        }
    </style>

<hr class="my-5">

<?php
$articles = array(
"Article de fou",
"Du PHP..encore..",
"article de malade"
);
$descriptions = array(
    "Truc de ouf wesh",
    "a quand je JS ?",
    "Truc de malade wesh"
    );
var_dump($articles);
for ($i=0; $i < 3; $i++):?>
<div class="card mb-3">
    <div class="card-body py-0 pt-3">
        <h1><?=$articles[$i]?></h1>
        <p><?= $descriptions[$i]?></p>
    </div>
</div>

<?php endfor;
?>

<hr class="my-5">

        <?php

        $articles = array(
        [
        "titre" => "Article de fou", 
        "descriptif" => "truc de fou wesh",
        "prix" => "8,99€"
        ],[
        "titre" => "du PHP..encore..",
        "descriptif" => "A quand le JS ?",
        "prix" => "8,99€"
        ],[
        "titre" => "article de malade",
        "descriptif" => "truc de malade wesh",
        "prix" => "8,99€"
        ]
        );
        var_dump($articles);

        foreach ($articles as $article):?>

                <div class="card mb-3">
            <div class="card-body py-0 pt-3">
                <h1><?=$article["titre"] ?></h1>
                <p><?=$article["descriptif"] ?></p>
                <p><?=$article["prix"] ?></p>
            </div>
        </div>
        <?php endforeach;
        ?> 




    <!-- Bootstrap ==> C'est un framework (html, css et javascript) facilitant la mise en page (responsive) d'une page web -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>