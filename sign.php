<?php require_once("head.php");?>
<?php include_once("menu.php");?>

<main>
    <section class="container py-2 mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php var_dump($_POST) ?>

<?php 

// en cliquant, si formulaire n'est pas vide,afficher alert success sinon erreur
if(!empty($_POST)){
    alert("Votre inscription est validée");
}else{
        echo "erreur";
    };

?>

                <form class="modal-content" method="POST">
                    <div class="modal-header bg-light">
                        <h5 class="modal-title" id="exampleModalLabel">Dépêche-toi de t'inscrire !</h5>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="inputPseudo" class="col-sm-4 col-form-label"><i
                                    class="fas fa-user img-thumbnail mr-2 text-primary"></i> Pseudo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pseudo" id="inputPseudo">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="inputEmail" class="col-sm-4 col-form-label"><i
                                    class="fas fa-at img-thumbnail mr-2 text-primary"></i> Adresse mail</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="mail" id="inputEmail">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail2" class="col-sm-4 col-form-label"><i
                                    class="fas fa-at img-thumbnail mr-2 text-primary"></i> Confirmation</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="mail2" id="inputEmail2">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="inputPassword" class="col-sm-4 col-form-label"><i
                                    class="fas fa-lock img-thumbnail mr-2 text-primary"></i> Mot de passe</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="pass" id="inputPassword">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <label for="inputPassword2" class="col-sm-4 col-form-label"><i
                                    class="fas fa-lock img-thumbnail mr-2 text-primary"></i> Confirmation</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="pass2" id="inputPassword2">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Continuer</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php include_once("end.php");?>