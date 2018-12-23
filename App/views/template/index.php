<?php
/* Base Template Back End Calon*/
/*
*
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $TITLE;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/');?>vendor/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript">
		var base_url = '<?php echo base_url();?>';
	</script>
</head>
<body>
	<?php echo $MENU;?>
	<div id="dinamic-content">
		<?php echo $CONTENT;?>
	</div>
	<script type="text/javascript" src="<?php echo base_url('asset/');?>vendor/jquery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/');?>vendor/popper/popper.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/');?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/');?>js/jquery.blockUI.js"></script>
	<script type="text/javascript" src="<?php echo base_url('asset/');?>js/function.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			<?php echo $JS;?>
		});
	</script>
</body>
</html>