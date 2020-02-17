<!-- Main Javascript -->
<script type="text/javascript">
	var site_url = '<?= base_url() ?>';
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="assets/plugins/typed/typed.js"></script>
<script src="assets/plugins/lazysizes.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<?php
	foreach ($js as $j) {
		echo $j;
	}
?>


