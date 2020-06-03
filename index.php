<!-- Sans le require, la page ne s'ouvre pas -->
<?php require_once("head.php");?>
<?php include_once("menu.php");?>

<?php include_once("carousel.php");?>
<main>
    <section class="container py-2">
        <?php include_once("breadcrumb.php");?>
        <div class="row">
            <div class="col-md-3">
                <!-- Côté gauche -->
            </div>
            <div class="col-md-9">
                <!-- Côté droit -->
                <?php 


                function alert($msg = "Tu as affiché ce message", $typeAlert = "success") {
                $typeMsg = "Félicitations";

            if ($typeAlert === "success") {
                    $cssType = "success";
            } elseif ($typeAlert === "warning") {
                   $cssType = "warning";
            } elseif ($typeAlert === "danger") {
                $cssType = "danger";
            }

                // affichage du message
                ?>
                <div class="alert alert-<?=$cssType?> alert-dismissible fade show" role="alert">
                    <strong><?= $typeMsg ?></strong> <?= $msg ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="far fa-times-circle" aria-hidden="true"></i>
                    </button>
                </div>
                <?php }

                // affichage du message en fonction des paramètres de la fonction alert :
                alert("ça marche");
                alert("ça marche pas","warning");
                alert("ça marche pas du touuuuuut","danger");
                ?>

            </div>
        </div>
    </section>
</main>
<?php include_once("end.php");?>