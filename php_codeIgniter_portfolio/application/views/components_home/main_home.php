<!DOCTYPE html>
<html lang="fr">

<?php $this->load->view('components_home/head', $css) ?>

<body class="landing-page bg-light">

<?php $this->load->view('components_home/header') ?>

<?php $this->load->view($subview) ?>


<?php $this->load->view('components_home/footer') ?>


<?php $this->load->view('components_home/script_js', $js) ?>



</body>

</html>
