<?php
/*default variable*/
$TEMPLATE_URL = base_url($this->config->item('template_asset'));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404 Error Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo $TEMPLATE_URL?>dist/css/skins/_all-skins.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>

	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				404 Error Page
			</h1>
			<ol class="breadcrumb">
			<li><a href="<?php echo base_url();?>"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">404 error</li>
			</ol>
		</section>

		<section class="content">
			<div class="error-page">
				<h2 class="headline text-yellow"> 404</h2>

				<div class="error-content">
					<h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>

					<p>
						We could not find the page you were looking for.
						Meanwhile, you may <a href="<?php echo base_url();?>">return to homepage</a> or try using the search form.
					</p>

					<form class="search-form" action="#">
						<div class="input-group">
							<input type="text" name="search" class="form-control" placeholder="Search">

							<div class="input-group-btn">
								<button type="submit" onclick="return false;" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>
	</div>

    <!-- jQuery 3 -->
    <script src="<?php echo $TEMPLATE_URL?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo $TEMPLATE_URL?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo $TEMPLATE_URL?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo $TEMPLATE_URL?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $TEMPLATE_URL?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo $TEMPLATE_URL?>dist/js/demo.js"></script>
</body>
</html>