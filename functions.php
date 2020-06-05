<?php 


function alert($msg = "Tu as affiché ce message", $typeAlert = "success") {
// conditions pour changer la couleur du message 
if ($typeAlert == "success") {
        $typeMsg = "Réussi.";
        
} elseif ($typeAlert == "warning") {
        $typeMsg = "Attention";
        
} elseif ($typeAlert == "danger") {
        $typeMsg = "Stop";
        
}

// exemple de condition ternaire : 

// $typeMsg = $typeAlert == "warning ? "Attention :" : "Félicitiations !";

// affichage du message
    ?>
<div class="alert alert-<?=$typeAlert?> alert-dismissible fade show" role="alert">
    <strong><?= $typeMsg ?></strong> <?= $msg ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="far fa-times-circle" aria-hidden="true"></i>
    </button>
</div>
<?php }

/**
 * par convention on ne ferme pas la balise php, ce fichier est fait pour ne contenir que du php
*/

/**
 * Connexion à la base de données :
 */


function coDB($dns = 'mysql:dbname=cp21bis;host=localhost', $user = 'root', $password = 'root'){
    try {
        // connexion à la base via la class `PDO`
       $db = new PDO($dns, $user, $password);
       return $db;
    } catch (PDOException $e) {
        // si échec afficher message danger
        alert($e->getMessage(),"warning");
   }
}

/**
 *@param string $dsn [description]
 *@param string $user [description]
 *@param string $password [description]
 *@return [type] [description]

*/

function select($table, $colonnes="*",$where="") {
    $sql = "SELECT $colonnes FROM `$table`".($where != "" ? "WHERE $where" : "");
    return coDB()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // retourner toute la liste de users et toutes ses colonnes
}


function insert($table, $colonnes="*"){
    var_dump($_POST);
    if(!empty($_POST["mail"]) && $_POST["mail"] == $_POST["mail2"]){
        alert("Vous avez écrit le même mail !");
        // création du pattern de l'email / --- \ pour échapper les caractères - et . 
        // le ? après le [] permet de ne pas obliger à mettre tous les caractères du pattern
        // le #^ ^# marque le début et la fin du pattern
        $regex = preg_match("#^[a-z0-9_\-\.]{1,20}@[a-z0-9_\-\.]{1,20}\.[a-z\.]{2,9}^#");
    }else {
        alert("Vous n'avez pas correctement rempli le formulaire", "danger");
    }
}

insert ("users");


// !empty() = si n'est pas vide
// !== = le ! signifie inverse 'n'est pas'

// reqûete executée dans la base de données :
// $sql = "SELECT * FROM `users`";

// Stocker les infos que retourne SQL et retourner les données d'un tableau complet :
//$users = coDB()->query($sql)->fetchAll();


// $add = "INSERT INTO `users` (`id`, `pseudo`, `email`, `password`, `created`, `updated`, `deleted`) 
        // VALUES (NULL, 'TESTEUR', '', '', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, NULL);";

// $db->exec($add);