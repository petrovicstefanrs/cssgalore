<main class="full_height">
		<div class="container content_container">
			<div class="row"></div>
			    <?php 
		    		function sitemapRecursive($offset,$len,$elements,$subelements){
		    			echo '<div class="row">';
		    			for ($i=$offset; $i < $len; $i++) { 
		    				if ($i<count($elements)) {
		    				?>
	    						<div class="col l4 s12">
		    						<div class="row">
		    							<div class="col s12">
		    							<?php 
		    								if ($elements[$i]['section_url']=="") {
		    									?>
		    										<a href="#!" class="sitemap_section waves-effect waves-light btn orange darken-3"><?php echo $elements[$i]['section_name']; ?></a>
		    									<?php
		    								}
		    								else{
		    									?>
		    										<a href="<?php echo base_url().$elements[$i]['section_url']; ?>" class="sitemap_section waves-effect waves-light btn orange darken-3"><?php echo $elements[$i]['section_name']; ?></a>
		    									<?php
		    								}
		    							?>
		    							</div>
		    						</div>
		    						<?php 
		    							for ($j=0; $j < count($subelements); $j++) { 
		    								if ($subelements[$j]['section_id']==$elements[$i]['section_id']) {
		    									?>
		    										<div class="row">
		    											<div class="col s12">	
		    												<a href="<?php echo base_url().$subelements[$j]['subsection_url']; ?>" class="sitemap_subsection btn"><?php echo $subelements[$j]['subsection_name']; ?></a>
						    							</div>
		    										</div>
		    									<?php
		    								}
		    							}
		    						?>
		    					</div>
	    					<?php
		    				}
		    				else{
		    					echo "</div>";
		    					return;
		    				}
		    			}
		    			echo "</div>";
		    			sitemapRecursive($offset+3,$len+3,$elements,$subelements);
		    		}

		    		sitemapRecursive(0,3,$sections,$subsections);
		    	?>
		</div>
	</main>

	