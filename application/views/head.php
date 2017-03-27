<!DOCTYPE html>
<html>
<head>
	<!--JQuery CDN-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script type="text/javascript">
		base_url = '<?php echo base_url() ?>';
		<?php
			if (isset($section)) {
				?>
					var section = '<?php echo $section?>';
				<?php
			}
			if (isset($presection)) {
				?>
					var presection = '<?php echo $presection?>';
				<?php
			}
		?>
	</script>

	<!-- Font Awesome CDN-->
	<script src="https://use.fontawesome.com/11fc9055ad.js"></script>

	<!-- StyleSheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/normalize.css">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()?>images/favicon.png">

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    <meta name="description" content="SET DESCRIPTION HERE">
   
    <meta name="keywords" content=" KEYWORDS HERE ">
   
    <meta name="author" content="Stefan Petrović">

	<title>CSS Galore | CSS3 Generator</title>

	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.min.css"  media="screen,projection"/>

	<!--Import materialize.js-->
	<script type="text/javascript" src="<?php echo base_url(); ?>js/materialize.min.js"></script>

	<!--Clipboardjs-->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/clipboardjs/dist/clipboard.min.js"></script>

	<!--Jscolor-->
	<script type="text/javascript" src="<?php echo base_url(); ?>scripts/jscolor/jscolor.min.js"></script>

	<!-- Custom JavaScript -->
	<script type="text/javascript" src="<?php echo base_url()?>scripts/script_jquery.js"></script>

</head>
<body>