<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="<?= site_url(); ?>">HOME</a>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

				<li class="nav-item <?php echo (current_url() == site_url("")) ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url(''); ?>"><i class="fa fa-home"></i> </a>
				</li>

				<li class="nav-item <?php echo (current_url() == site_url("")) ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url(''); ?>">page 1</a>
				</li>

				<li class="nav-item <?php echo (current_url() == site_url("")) ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url(''); ?>">page 2</a>
				</li>

				<li class="nav-item <?php echo (current_url() == site_url("")) ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url(''); ?>">Événements</a>
				</li>



			</ul>


		</div>
	</nav>
</header>
