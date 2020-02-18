<div class="container h-100" id="top_page">
	<div id="login-box">
		<div class="justify-content-center text-center col-6">

			<div class="login">
				<form id="form-signin">


					<p class="field-error" data-field="error_general"></p>

					<label for="loginPseudo" class="sr-only">Pseudo</label>
					<input type="text" id="loginPseudo" name="loginPseudo" class="form-control" placeholder="Pseudo" required autofocus>
					<p class="field-error mb-2" data-field="loginPseudo"></p>
					<label for="loginPassword" class="sr-only">Mot de Passe</label>
					<input type="password" id="loginPassword" name="loginPassword" class="form-control" placeholder="Mot de Passe" required>
					<p class="field-error mb-2" data-field="loginPassword"></p>
					<button class="btn btn-lg btn-gold btn-block mt-4 mb-4" type="submit">Connexion</button>

				</form>
			</div>

			<div class="register" style="display: none">
				<form id="form-signup">

					<h1 class="h3 mb-3 font-weight-normal">Formulaire d'inscription</h1>
					<div class="form-group">
						<label for="registerPseudo" class="sr-only">Pseudo</label>
						<input type="text" id="registerPseudo" name="registerPseudo" class="form-control mb-2" placeholder="Pseudo" required autofocus>
						<p class="field-error" data-field="registerPseudo"></p>
						<label for="registerEmail" class="sr-only">Email</label>
						<input type="email" id="registerEmail" name="registerEmail" class="form-control mb-2" placeholder="Email" required autofocus>
						<p class="field-error" data-field="registerEmail"></p>
						<label for="registerPassword" class="sr-only">Mot de Passe</label>
						<input type="password" id="registerPassword" name="registerPassword" class="form-control mb-2" placeholder="Mot de Passe" required>
						<p class="field-error" data-field="registerPassword"></p>
						<label for="registerPasswordConfirm" class="sr-only">Confirmation</label>
						<input type="password" id="registerPasswordConfirm" name="registerPasswordConfirm" class="form-control" placeholder="Confirmation" required>
						<p class="field-error" data-field="registerPasswordConfirm"></p>
					</div>

					<button class="btn btn-lg btn-gold btn-block mt-4 mb-4" type="submit">Inscription</button>

				</form>
			</div>
		</div>

		<div class="justify-content-center text-center">

				<a class="links switch text-dark" href="#">S'inscrire</a>

		</div>
	</div>

</div>
