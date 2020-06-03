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


<?php alert("","success");?>
<?php alert("","warning");?>
<?php alert("","danger");?>
            </div>
        </div>
    </section>
</main>
<?php include_once("end.php");?>