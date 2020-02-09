<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="<?= base_url(); ?>">HOME</a>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">

				<li class="nav-item <?php echo (current_url() == base_url("")) ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url(''); ?>"><i class="fa fa-home"></i> </a>
				</li>

				<li class="nav-item <?php echo (current_url() == base_url("")) ? "active" : "" ?>">
					<a class="nav-link" href="<?= base_url(''); ?>">Stage</a>
				</li>

				<li class="nav-item <?php echo (current_url() == base_url("")) ? "active" : "" ?>">
					<a class="nav-link" href="<?= base_url(''); ?>">Événements</a>
				</li>

				<li class="nav-item <?php echo (current_url() == base_url("")) ? "active" : "" ?>">
					<a class="nav-link" href="<?= base_url(''); ?>">Contact</a>
				</li>

				<li class="nav-item <?php echo (current_url() == base_url("")) ? "active" : "" ?>">
					<a class="nav-link" rel="noopener" href="https://www.linkedin.com/in/th%C3%A9o-deniaud-528b28149/" target="_blank"><i class="fab fa-linkedin"></i></a>

				</li>




			</ul>
			<ul class="navbar-nav">
				<li class="nav-item <?php echo (current_url() == site_url("")) ? "active" : "" ?>">
					<a class="nav-link d-lg-inline-block  ml-md-auto" href="<?= site_url(''); ?>">Se connecter</a>
				</li>
			</ul>


		</div>
	</nav>
</header>
