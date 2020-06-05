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
                <?php alert() ?>
                <?php alert("","warning") ?>
                <?php alert("","danger") ?>
                <div class="text-right">

                    <span class="mr-3">
                        
                        <?php 
                        $products = 12; 

                    // si quantite n'est pas défini alors afficher nombre de produits de la variable global $products

                        $max = isset($_GET["quantite"]) ? $_GET["quantite"] : $products;
                        for ($i = 0 ; $i < 4 ; $i++) :
                            // global $products;
                            $result = ($i+1) * $products;
                            // si max est egal à result alors ça change le css
                            $color = $result == $max ? "primary" : "light";
                            ?>
                        <a class="badge badge-<?= $color?>" href="?quantite=<?=$result?>"><?=$result?></a>
                        <?php endfor;
                        ?>
                    </span>
                    <label for="customSwitch1" class="mb-0">
                        <i class="fas fa-list"></i>
                        <span class="custom-control custom-switch d-inline-block ml-1">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1"></label>
                        </span>
                        <i class="fas fa-th-large"></i>
                    </label>
                </div>
                <hr class="mt-2 mb-4">

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                    <?php

                    for ($i = 0 ; $i < $max ; $i++) {
                    include "product.php";
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include_once("end.php");?>