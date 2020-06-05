<?php require_once("head.php");?>
<?php include_once("menu.php");?>

<div>
		</nav>
		<main>
			<section class="container py-2 mt-5">
				<div class="row">
					<div class="col-md-3">
						<div class="card mb-4">
							<div class="card-header">Liste des produits</div>
							<div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="fas fa-tag mr-2"></i>Article 1
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action active">
                                        <i class="fas fa-tag mr-2"></i>Article 2
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="fas fa-tag mr-2"></i>Article 3
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <i class="fas fa-tag mr-2"></i>Article 4
                                    </a>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-md-9">
                        <div class="card mb-4">
							<div class="card-header"><i class="far fa-user mr-2"></i>Votre profil</div>
							<form method="POST" class="card-body">
                                <div class="form-group row">
                                    <label for="inputPseudo" class="col-sm-4 col-form-label"><i class="fas fa-user img-thumbnail mr-2 text-primary"></i> Pseudo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="pseudo" id="inputPseudo">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label for="inputEmail" class="col-sm-4 col-form-label"><i class="fas fa-at img-thumbnail mr-2 text-primary"></i> Adresse mail</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="mail" id="inputEmail">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail2" class="col-sm-4 col-form-label"><i class="fas fa-at img-thumbnail mr-2 text-primary"></i> Confirmation</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="mail2" id="inputEmail2">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label for="inputPassword" class="col-sm-4 col-form-label"><i class="fas fa-lock img-thumbnail mr-2 text-primary"></i> Mot de passe</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="pass" id="inputPassword">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <label for="inputPassword2" class="col-sm-4 col-form-label"><i class="fas fa-lock img-thumbnail mr-2 text-primary"></i> Confirmation</label>
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" name="pass2" id="inputPassword2">
                                    </div>
                                </div>
                                <hr>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <a class="stretched-link text-danger" data-toggle="modal" data-target="#DeleteModal">Supprimer le produit</a>
                                    </div>
                                    <div class="col text-right">
                                        <button type="refresh" class="btn btn-outline-secondary mr-3">Annuler</button>
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </div>
                            </form>
						</div>
					</div>
				</div>
			</section>
		</main>
		<div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="POST" class="modal-content">
					<div class="modal-header bg-light">
						<h5 class="modal-title" id="exampleModalLabel">Supprimer un profil</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="far fa-times-circle" aria-hidden="true"></i>
						</button>
					</div>
					<div class="modal-body">
						<input type="hidden" name="deleteUser" value="">
                        <div class="alert alert-danger mb-0">
                            Attention, vous aller supprimer ce profil. L'action est irréversible.
                        </div>
					</div>
					<div class="modal-footer bg-light">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
						<button type="submit" class="btn btn-danger">Supprimer</button>
					</div>
				</form>
			</div>
		</div>

<?php include_once("end.php");?>