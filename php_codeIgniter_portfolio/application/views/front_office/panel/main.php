<div class="d-flex row no-margin">

	<ul class="d-flex flex-column bg-dark sidebar">

		<li class="top25">
			<a class="nav-link row text-white" href="#">
				<i class="fas fa-male text-white"></i>
				<span>Utilisateur</span>
			</a>
		</li>

		<li class="top26">
			<a class="nav-link row text-white" href="#">
				<i class="fas fa-check text-white"></i>
				<span>Recommandation</span>
			</a>
		</li>

	</ul>

	<div class="d-flex flex-column po85">

		<?php $this->load->view('components_home/header_logged') ?>
		<div class="container-fluid mt-5">

			<div class="mb-4">

				<h1 class="h3 mb-0 ">Tableau de bord</h1>

			</div>

			<div class="row w-100">

				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="font-weight-bold text-primary text-uppercase mb-1">Utilisateur</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $nbUsers->users ?></div>

								</div>

								<div class="col-auto">
									<i class="fas fa-male"></i>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="font-weight-bold text-primary text-uppercase mb-1">Recommandation</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $nbRecommandations->recommandations ?></div>

								</div>

								<div class="col-auto">
									<i class="fas fa-check"></i>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-md-6 mb-4">
					<div class="card shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="font-weight-bold text-primary text-uppercase mb-1">Messages</div>
									<div class="h5 mb-0 font-weight-bold"><?php echo $nbMessages->messages ?></div>

								</div>

								<div class="col-auto">
									<i class="fas fa-envelope"></i>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div> <!-- Fin ligne statistiques -->

			<div class="row">

				<div class="col-xl-8 col-lg-7">
					<div class="card shadow mb-4">

						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

							<h6 class="m-0 font-weight-bold text-primary">Liste des utilisateurs</h6>

						</div>

						<div class="card-body">
							<div class="row">
								<div class="col-12 ml-1">
									<div class="table-responsive">

										<table class="table table-hover table-grey-dark-plus">
											<thead>
												<tr>
													<th scope="col">id</th>
													<th scope="col">Pseudo</th>
													<th scope="col">Email</th>
													<th scope="col">Créé le</th>
													<th scope="col">Màj</th>
													<th scope="col">Action</th>
												</tr>
											</thead>

											<tbody>
											<?php if($users){ foreach ($users as $user) { ?>
												<tr id="div-user-<?php echo $user->id ?>" style="font-size: 18px;">

													<th scope="row"><?= $user->id ?></th>
													<td class="align-middle"><?= $user->use_pseudo ?></td>
													<td class="align-middle"><?= $user->use_email ?></td>
													<td class="align-middle"><?= $user->created_at ?></td>
													<td class="align-middle"><?= $user->updated_at ?></td>
													<td class="align-middle">

													<button type="button" class="btn btn-dark btn-show-user-edit" data-user="<?php echo $user->id; ?>">
														<i class="fas fa-user-cog"></i>
													</button>

													<button type="button" class="btn btn-dark btn-show-user-delete" data-user="<?php echo $user->id; ?>">
														<i class="far fa-trash-alt"></i>
													</button>
													</td>
												</tr>
											<?php }
											} ?>
											</tbody>

										</table>

									</div>
								</div>
							</div>

							<div class="modal fade" id="modal-user-edit">
								<div class="modal-dialog">
									<div class="modal-content">

									</div>
								</div>
							</div>
							<div class="modal fade" id="modal-user-delete">
								<div class="modal-dialog">
									<div class="modal-content">

									</div>
								</div>
							</div>

						</div> <!-- Fin card-body -->

					</div>
				</div>

				<div class="col-xl-8 col-lg-7">
					<div class="card shadow mb-4">

						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

							<h6 class="m-0 font-weight-bold text-primary">Liste des messages</h6>

						</div>

						<div class="card-body">
							<div class="row">
								<div class="col-12 ml-1">
									<div class="table-responsive">
										<table class="table table-hover table-grey-dark-plus">

											<thead>

											<tr>
												<th scope="col">id</th>
												<th scope="col">Contact</th>
												<th scope="col">Contenu</th>

												<th scope="col">Màj</th>
											</tr>

											</thead>

											<tbody>
											<?php if($messages){ foreach ($messages as $message) { ?>
												<th scope="row"><?= $message->id ?></th>
												<td class="align-middle"><?= $message->id_contact ?></td>
												<td class="align-middle"><?= $message->contenu ?></td>

												<td class="align-middle"><?= $message->updated_at ?></td>
												</tr>
											<?php }
											} ?>
											</tbody>

										</table>

									</div>
								</div>
							</div>

							<div class="modal fade" id="modal-user-edit">
								<div class="modal-dialog">
									<div class="modal-content">

									</div>
								</div>
							</div>
							<div class="modal fade" id="modal-user-delete">
								<div class="modal-dialog">
									<div class="modal-content">

									</div>
								</div>
							</div>

						</div> <!-- Fin card-body -->

					</div>
				</div>

				<div class="col-xl-8 col-lg-7">
					<div class="card shadow mb-4">

						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

							<h6 class="m-0 font-weight-bold text-primary">Recommandations à valider</h6>

						</div>

						<div class="card-body">
							<div class="row">
								<div class="col-12 ml-1">
									<div class="table-responsive">

										<table class="table table-hover table-grey-dark-plus">

											<thead>

											<tr>
												<th scope="col">id</th>
												<th scope="col">Users</th>
												<th scope="col">Contenu</th>
												<th scope="col">Action</th>

											</tr>

											</thead>

											<tbody>

											<?php if($recommandations) { foreach ($recommandations as $recommandation) { ?>
												<tr>
													<th scope="row"><?= $recommandation->id ?></th>
													<td class="align-middle"><?= $recommandation->id_user ?></td>
													<td class="align-middle"><?= $recommandation->recommandation ?></td>
													<td class="align-middle">

														<button type="button" class="btn btn-dark recommandation-check" data-reco="<?php echo $recommandation->id; ?>">
															<i class="fas fa-check"></i>
														</button>

														<button type="button" class="btn btn-dark recommandation-delete" data-reco="<?php echo $recommandation->id; ?>">
															<i class="fas fa-times"></i>
														</button>

													</td>

												</tr>
											<?php }
											} ?>

											</tbody>

										</table>

									</div>
								</div>
							</div>

							<div class="modal fade" id="modal-user-edit">
								<div class="modal-dialog">
									<div class="modal-content">

									</div>
								</div>
							</div>
							<div class="modal fade" id="modal-user-delete">
								<div class="modal-dialog">
									<div class="modal-content">

									</div>
								</div>
							</div>

						</div> <!-- Fin card-body -->

					</div>
				</div>

			</div> <!-- Fin du bloc row -->


		</div> <!-- Fin du bloc container => dashboard -->

	</div>

</div> <!-- Fin bloc main -->
