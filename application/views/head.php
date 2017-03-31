<!DOCTYPE html>
<html>
<head>

	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-96348429-1', 'auto');
	  ga('send', 'pageview');

	</script>

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

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()?>images/favicon.png">

	<!-- Meta Tags -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
    <meta name="description" content="CSS Galore is a collection of CSS3 code generator tools built to satisfy all your CSS needs. CSS Galore includes Div and Text styling generators with more on the way!">
   
    <meta name="keywords" content="css, css3, html, html5, generator, cssgalore, galore, box, shadow, div, text, style, tools, border, radius, outline, transform, translate, tool, columns, stylesheet, generate, effect, effects, animate, animation, css galore, css generator, css tools, css generators, css3 generator, css3 generators, div outline, outline generator, div style, div css, div generator, div shadow, shadow generator, div border, div radius, border radius, translate generator, transform generator, css transform, css translate, text css, text shadow ">
   
    <meta name="author" content="Stefan Petrović">

	<title>CSS Galore | CSS3 Code Generator</title>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

	<!-- FB meta tags -->
	<meta property="og:type"          content="website" />
	<meta property="og:url"           content="http://cssgalore.petrovicstefan.rs" />
	<meta property="og:title"         content="CSS Galore | CSS3 Generator" />
	<meta property="og:description"   content="CSS Galore is a collection of CSS3 code generator tools built to satisfy all your CSS needs." />
	<meta property="og:image"         content="<?php echo base_url()?>images/fbpreview.png" />

	<!-- Twiter meta tags -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@stefanpetr_dpi" />
	<meta name="twitter:title" content="CSS Galore | CSS3 Generator" />
	<meta name="twitter:description" content="CSS Galore is a collection of CSS3 code generator tools built to satisfy all your CSS needs." />
	<meta name="twitter:image" content="<?php echo base_url()?>images/fbpreview.png" />

</head>
<body>
<!-- FACEBOOK SCRIPT -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>