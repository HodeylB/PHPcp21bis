<?php 


function alert($msg = "Tu as affiché ce message", $typeAlert = "success") {
// conditions pour changer la couleur du message 
if ($typeAlert == "success") {
        $typeMsg = "Réussi.";
        $msg = "Bravo !";
} elseif ($typeAlert == "warning") {
        $typeMsg = "Attention";
        $msg = "Faites attention";
} elseif ($typeAlert == "danger") {
        $typeMsg = "Stop";
        $msg = "C'est chaud là";
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

$dns = 'mysql:dbname=cp21bis;host=localhost';
$user = 'root';
$password = 'root';
try {
    $db = new PDO($dns, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}