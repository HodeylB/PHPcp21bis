<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30"
                class="d-inline-block align-top" alt="" loading="lazy">
            Bootstrap
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mr-auto my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <a class="btn btn-outline-primary mr-2" href="#exampleModal">Sign in</a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Log in
            </button>
        </div>
    </div>
</nav>

<!-- POP-IN MODAL / Login -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form class="modal-content">
					<div class="modal-header bg-light">
						<h5 class="modal-title" id="exampleModalLabel">Espace de connexion</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="far fa-times-circle" aria-hidden="true"></i>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label"><i class="fas fa-at img-thumbnail mr-2 text-primary"></i> Adresse mail</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail3">
							</div>
						</div>
						<div class="form-group row mb-0">
							<label for="inputPassword3" class="col-sm-4 col-form-label"><i class="fas fa-lock img-thumbnail mr-2 text-primary"></i> Mot de passe</label>
							<div class="col-sm-8">
								<input type="password" class="form-control" id="inputPassword3">
							</div>
						</div>
					</div>
					<div class="modal-footer bg-light">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
						<button type="submit" class="btn btn-primary">Valider</button>
					</div>
				</form>
			</div>
		</div>