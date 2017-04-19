	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Gradient Collection</h2>
			    			<span class="notice">Note: Most of the gradients were taken from the phenomenal <a href="https://uigradients.com/" target="_blank">uiGradients</a>.</span></br>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>

			    	<?php 
			    		function gradientRecursive($offset,$len,$elements){
			    			echo '<div class="row">';
			    			for ($i=$offset; $i < $len; $i++) { 
			    				if ($i<count($elements)) {
			    				?>
		    						<div class="col l4 s12">
			    						<div class="gradient_card " data-s-color="<?php echo $elements[$i]['gradient_s_color']; ?>" data-e-color="<?php echo $elements[$i]['gradient_e_color']; ?>">
			    							<p class="gradient_card_name"><?php echo $elements[$i]['gradient_name']; ?></p>
			    							<div class="gradient_buttons">
			    								<a class="modal-trigger waves-effect waves-light btn generate_button generate_button_gradient" href="#modal1">Generate Code</a>
			    							</div>
			    						</div>
			    					</div>
		    					<?php
			    				}
			    				else{
			    					echo "</div>";
			    					return;
			    				}
			    			}
			    			echo "</div>";
			    			gradientRecursive($offset+3,$len+3,$elements);
			    		}

			    		gradientRecursive(0,3,$gradients);
			    	?>

			    </form>
			</div>	
			<div class="row">
				<div class="col s12 center-align">
					<?php 
						echo $pagination;
					?>
				</div>
			</div>	
			<div class="row">
				<div class="col s12 center-align">

					<!-- Modal Trigger -->
					<!-- <a class="modal-trigger waves-effect waves-light btn generate_button" href="#modal1">Generate Code</a> -->

					<!-- Modal Structure -->
					<div id="modal1" class="modal">
						<div class="modal-content">
							<h4>Generated code:</h4>
							<p id="generated_code_text">There is no generated code.</p>
						</div>
						<div class="modal-footer">
							<a href="#!" class="modal-action waves-effect waves-green btn-flat copybtn" data-clipboard-target="#generated_code_text">Copy</a>
							<a href="#!" id="saveasgist" class="modal-action waves-effect waves-green btn-flat copybtn">Save CSS as GIST&nbsp<i class="fa fa-github" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</main>

