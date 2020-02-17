<section class="text-center banniere" id="top_page">

	<div class="alpha">
		<div class="container d-flex flex-column align-items-center">

			<img id="profil" src="assets/images/profil.jpg" alt="photo profil" class="d-flex mt-5"/>
			<h1 class="heading">THEO DENIAUD</h1>
			<p><span class="text-slider-items">Etudiant en première année de Bachelor Informatique,Développeur Web,Technicien de Proximité,Futur CEO d'une SAS en robotique de service</span><strong class="text-slider"></strong></p>
			<a href="assets/CV.pdf" target="blank" class="btn download_btn my-2 btn-lg">TELECHARGER CV</a>

		</div>
	</div>



</section>

<div class="album py-5 bg-light">

	<section class="container">

		<div class="row">
			<div class="col-lg-6">

				<a class="portfolio-item" href="#MonXP">
					<span class="caption">
						<span class="caption-content">

							<h2>Mon expérience</h2>
							<p class="mb-0">Entrepreneur, animateur, adjoint administratif ... <br/>
							Chaque expérience est unique et permet de se développer personnellement et professionnellement.</p>

						</span>
					</span>

					<img class="img-fluid lazy" data-src="assets/images/back-xp.jpg" alt="Mon expérience">

				</a>
			</div>

			<div class="col-lg-6">

				<a class="portfolio-item" href="#MesCompetences">
					<span class="caption">
						<span class="caption-content">

							<h2>Mes compétences</h2>
							<p class="mb-0">Travail d'équipe, autonomie, gestion de projet ... <br/>
							La montée en compétence est quotidienne et on ne cessera jamais d'évoluer au fil des années.</p>

						</span>
					</span>

					<img class="img-fluid lazy" data-src="assets/images/back-skill.jpg" alt="Mes expériences">

				</a>
			</div>

			<div class="col-lg-6">

				<a class="portfolio-item" href="#MaFormation">
					<span class="caption">
						<span class="caption-content">

							<h2>Ma formation</h2>
							<p class="mb-0">Apprendre à apprendre, la clé de la réussite.<br/>
							L'apprentissage n'a pas de limites, à nous d'être acteur de notre formation et non spectateur de celle-ci.</p>

						</span>
					</span>

					<img class="img-fluid lazy" data-src="assets/images/back-learn.jpg" alt="Ma Formation">

				</a>
			</div>

			<div class="col-lg-6">

				<a class="portfolio-item" href="#">
					<span class="caption">
						<span class="caption-content">

							<h2>Mes projets</h2>
							<p class="mb-0">Voir toujours plus grand et ne jamais se contenter du minimum. <br/>
							L'ambition n'a de limites que celles qu'on lui fixe</p>

						</span>
					</span>

					<img class="img-fluid lazy" data-src="assets/images/back.jpg" alt="Ma Formation">

				</a>
			</div>

			<div class="col-lg-6">

				<a class="portfolio-item" href="#">
					<span class="caption">
						<span class="caption-content">

							<h2>Réseaux / BSI</h2>
							<p class="mb-0">Réfléchir à une infrastructure réseau, la mettre en place et la maintenir en état.
							Un rôle primordial que l'institution d'un BDSI pour réaliser cette tâche. </p>

						</span>
					</span>

					<img class="img-fluid lazy" data-src="assets/images/back-network.jpg" alt="Network">

				</a>
			</div>

			<div class="col-lg-6">

				<a class="portfolio-item" href="#">
					<span class="caption">
						<span class="caption-content">

							<h2>Autres</h2>
							<p class="mb-0">Pour toute autre information ... </p>

						</span>
					</span>

					<img class="img-fluid lazy" data-src="assets/images/back-other.jpg" alt="Autres">

				</a>
			</div>
		</div>

	</section>

</div>

<section class="showcase bg-light pb-5" id="CV">

	<div class="container-fluid p-0">
		<div class="row no-gutters shadow" id="MonXP">
			<img class="col-lg-6 order-lg-2" src="assets/images/back-xp.jpg"/>
				<div class="col-lg-6 order-lg-1 my-auto showcase-text">


					<?php foreach ($experiences as $experience) { ?>
					<div class="row justify-content-between align-items-center mb-3">

						<p><strong><?= $experience->annee ?> : </strong><?= htmlspecialchars($experience->contenu) ?></p>
							<img class="logo" src="<?= $experience->img_url ?>" alt="<?= $experience->img_alt ?>"/>

					</div>

					<?php } ?>


				</div>
			</div>
		</div>

		<div class="row no-gutters" id="MesCompetences">
			<img class="col-lg-6" src="assets/images/back-skill.jpg"/>
				<div class="col-lg-6 my-auto showcase-text pr-5 pl-5">

					<div class="row">
						<div class="col-md-6">

							<div class="progress-wrap">

								<h3><span class="name-left">HTML5/CSS3</span><span class="value-right">90%</span></h3>

								<div class="progress">
									<div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
									 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">

									</div>
								</div>

							</div>

							<div class="progress-wrap">

								<h3><span class="name-left">Javascript</span><span class="value-right">60%</span></h3>

								<div class="progress">
									<div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
									 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:60%">

									</div>
								</div>

							</div>

							<div class="progress-wrap">

								<h3><span class="name-left">PHP</span><span class="value-right">75%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
									 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:75%">

									</div>

								</div>
							</div>

							<div class="progress-wrap">

								<h3><span class="name-left">MySQL</span><span class="value-right">60%</span></h3>
								<div class="progress">

									<div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
									 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:60%">

									</div>

								</div>
							</div>
						</div>

						<div class="col-md-6">

							<div class="progress-wrap">

								<h3><span class="name-left">Design</span><span class="value-right">50%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
									 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:50%">

									</div>

								</div>
							</div>

							<div class="progress-wrap">

								<h3><span class="name-left">Python</span><span class="value-right">65%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
									 aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:65%">

									</div>

								</div>
							</div>

							<div class="progress-wrap">

								<h3><span class="name-left">Windows Server 2019</span><span class="value-right">40%</span></h3>
								<div class="progress">
									<div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
									 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:40%">

									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row no-gutters shadow-sm" id="MaFormation">
			<img class="col-lg-6 order-lg-2" src="assets/images/back-learn.jpg"/>
				<div class="col-lg-6 order-lg-1 my-auto showcase-text">


					<?php foreach ($formations as $formation) { ?>
						<div class="row justify-content-between align-items-center mb-3">

							<p><strong><?= $formation->annee ?> : </strong><?= htmlspecialchars($formation->contenu) ?></p>
							<img class="logo" src="<?= $formation->img_url ?>" alt="<?= $formation->img_alt ?>"/>

						</div>

					<?php } ?>


				</div>
			</div>
		</div>
	</div>

</section>







