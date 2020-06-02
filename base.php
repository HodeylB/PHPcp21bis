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

    <?php 
        // tableau association

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

    <form action="action.php" method="post" class="input-group form-group">
        <p class="input-group-prepend input-group-text">
            Votre prenom : <input type="text" name="prenom" required /></p>
        <p class="input-group-prepend input-group-text">Votre nom : <input type="text" name="nom" required /></p>
        <p class="input-group-prepend input-group-text">Votre âge : <input type="text" name="age" required /></p>
        <p class="input-group-prepend input-group-text">L'écart souhaité : <input type="text" name="ecart" required />
        </p>
        <p><input type="submit" value="OK" class="btn btn-primary"></p>
    </form>



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