<?php
/* Form Registrasi Calon */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/');?>vendor/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript">
		var base_url = '<?php echo base_url();?>';
	</script>
</head>
<body>
	<div>
		<h2>Session Expired</h2>
		<blockquote>
			Session telah habis, silahkan login kembali.
			<br>
			Redirect...
		</blockquote>
	</div>
	<script type="text/javascript" src="<?php echo base_url('asset/');?>vendor/jquery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/');?>vendor/popper/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/');?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			setTimeout(function () {
				window.location = base_url;
			}, 1500);
		});
	</script>
</body>
</html>