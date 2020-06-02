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

        $prenom = "Imene";
        $age = 15;
        $ecart = 12;

        ?>

    <h1> <?php echo "Hello $prenom : la \"fétarde\" d'aujourd'hui <br>"; ?> </h1>

    <?php 
        
        echo "Comment ça va $prenom ? <br> ";

        echo " Tu as quel âge ? $age ans <br> ";

        echo "Dans ".($ecart)." ans, tu seras âgé de ".($age + 8). " ans.  <br> ";

        echo "<br><br><br><br>";
        
        ?>
    <!-- Formulaire avec méthode GET -->

    <form action="action.php" method="get" class="form-group">

        <p>Votre prenom : <input type="text" name="prenom" required class="form-group" /></p>
        <p>Votre nom : <input type="text" name="nom" required /></p>
        <p>Votre âge : <input type="text" name="age" required /></p>

        <p>L'écart souhaité : <input type="text" name="ecart" required /></p>

        <p><input type="submit" value="OK"></p>
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