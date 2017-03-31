		<div class="container menu_mobile"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
		<ul id="nav-mobile" class="side-nav fixed">
			<li class="logo">
				<a id="logo-container" href="<?php echo base_url(); ?>" class="brand-logo">
					<div>
						<!--
						<span class="bold"><i class="fa fa-angle-left" aria-hidden="true"></i> CSS</span><span>Galore <i class="fa fa-angle-right" aria-hidden="true"></i></span>
						-->
						<span class="bold">{ CSS</span><span>Galore <span class="bold">}</span></span>
					</div>
			    </a>
			</li>

			<li class="bold" data-nav_page="about"><a href="<?php echo base_url();?>pages/about" class="waves-effect waves-blue">About</a></li>
			<li class="no-padding">
				<ul class="collapsible collapsible-accordion" data-collapsible="accordion">
			    	<li class="bold" data-nav_section="div styling">
			    		<a class="collapsible-header waves-effect waves-blue">Div Styling</a>
			    		<div id="div-generators" class="collapsible-body no-padding">
			    			<ul>
			    				<li class="bold" data-nav_page="border radius"><a href="<?php echo base_url();?>pages/borderradius" class="waves-effect waves-blue">Border Radius</a></li>
			        			<li class="bold" data-nav_page="box shadow"><a href="<?php echo base_url();?>pages/boxshadow" class="waves-effect waves-blue">Box Shadow</a></li>
			        			<li class="bold" data-nav_page="outline"><a href="<?php echo base_url();?>pages/outline" class="waves-effect waves-blue">Outline</a></li>
			        			<!-- <li class="bold" data-nav_page="transition"><a href="about.html" class="waves-effect waves-blue">Transition</a></li>-->
			        			<li class="bold" data-nav_page="transform"><a href="<?php echo base_url();?>pages/transform" class="waves-effect waves-blue">Transform</a></li> 
			    			</ul>
			    		</div>
			    	</li>
			    	<li class="bold" data-nav_section="text styling">
			    		<a class="collapsible-header waves-effect waves-blue">Text Styling</a>
			    		<div id="text-generators" class="collapsible-body no-padding">
			    			<ul>
			    				<li class="bold" data-nav_page="text shadow"><a href="<?php echo base_url();?>pages/textshadow" class="waves-effect waves-blue">Text Shadow</a></li>
			        			<li class="bold" data-nav_page="multiple columns"><a href="<?php echo base_url();?>pages/multiplecolumns" class="waves-effect waves-blue">Multiple Columns</a></li>
			    			</ul>
			    		</div>
			    	</li>
			    </ul>
			</li>
			<li class="bold" data-nav_page="change log"><a href="<?php echo base_url();?>pages/changelog" class="waves-effect waves-blue">Change Log</a></li>
			<li class="bold" data-nav_page="contact"><a href="<?php echo base_url();?>pages/contact" class="waves-effect waves-blue">Contact</a></li>
		</ul>
	</header>