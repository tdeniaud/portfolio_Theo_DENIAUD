<!DOCTYPE html>
<html lang="fr" id="top_page">

<?php $this->load->view('components_home/head', $css) ?>

<body class="landing-page bg-light">

<div id="loader-wrapper">
	<div id="loader"></div>

	<div class="loader-section section-left"></div>
	<div class="loader-section section-right"></div>

</div>


<?php $this->load->view($subview) ?>



<?php $this->load->view('components_home/script_js', $js) ?>



</body>

</html>
