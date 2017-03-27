	<header>
		<!-- Facebook and twitter button scripts -->

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<script>window.twttr = (function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0],
		    t = window.twttr || {};
		  if (d.getElementById(id)) return t;
		  js = d.createElement(s);
		  js.id = id;
		  js.src = "https://platform.twitter.com/widgets.js";
		  fjs.parentNode.insertBefore(js, fjs);

		  t._e = [];
		  t.ready = function(f) {
		    t._e.push(f);
		  };

		  return t;
		}(document, "script", "twitter-wjs"));</script>
		
		<!-- FB AND TWITTER SCRIPTS END -->
		<nav class="top-nav z-depth-0">
			<div class="nav-wrapper">
				<div class="col s12 location_bread">
				    <a href="<?php echo base_url();?>" class="breadcrumb">CSSGALORE</a>
				    <?php 
				    	if (isset($presection)) {
				    		?>
				    			<a href="#!" class="breadcrumb"><?php echo $presection?></a>
				    		<?php
				    	}
				    ?>
				    <a href="#!" class="breadcrumb"><?php echo $section?></a>
				    <!--<a href="#!" class="breadcrumb">Third</a>-->
				</div>
		      	<h3 class="page_title"><?php echo $section?></h3>
		    </div>
		</nav>