<header>

	<nav class="navbar navbar-id navbar-trans navbar-expand-md fixed-top display-none" id="mainNav">
		<div class="container">
			<a class="navbar-brand" href="<?= site_url(''); ?>">PORTFOLIO</a>
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
					aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
				<ul class="navbar-nav">

					<li class="nav-item">
						<a class="nav-link js-scroll active" href="<?= site_url(''); ?>"><i class="fa fa-home"></i> </a>
					</li>
					<?php
					if ($_SERVER['REQUEST_URI'] == "/php_codeIgniter_portfolio/home" || $_SERVER['REQUEST_URI'] == "/php_codeIgniter_portfolio/"){ ?>
						<li class="nav-item">
						<a class="nav-link js-scroll " href="#MonXP">Parcours</a>
					</li>
					<?php }

					?>

					<li class="nav-item">
						<a class="nav-link js-scroll" href="<?= site_url('contact'); ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll " href="#about">Stage</a>
					</li>

					<li class="nav-item">
						<a class="nav-link js-scroll" href="#work">Événements</a>
					</li>


				</ul>
				<ul class="navbar-nav">


					<?php if ($this->logged){ ?>
						<li class="nav-item <?php echo (current_url() == site_url("profil")) ? "active" : "" ?>">
							<a class="nav-link" href="<?= site_url('profil'); ?>">Bonjour, <?= $this->appli_user->use_pseudo ?></a>
						</li>

					<?php } ?>

					<li class="nav-item">
						<?php if($this->logged){ ?>
							<a class="nav-link" href="<?= site_url('logout'); ?>"><i class="fa fa-sign-out-alt"></i> </a>
						<?php } else { ?>
							<a class="nav-link" href="<?= site_url('auth/login'); ?>">Connexion</a>
						<?php } ?>

					</li>
				</ul>

			</div>
		</div>
	</nav>


</header>
