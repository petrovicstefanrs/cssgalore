	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Border Radius</h2>
			    			<span class="notice">Note: Decimal values are allowed.</span>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col l4 s12">
							<input id="top_left_radius" type="number" name="top_left_radius" class="validate" step="any" min="0">
							<label for="top_left_radius" data-error="You must enter a positive number">Top Left (px)</label>
						</div>
						<div class="input-field col l4 s12">
							<input id="top_right_radius" type="number" name="top_right_radius" class="validate" step="any" min="0">
							<label for="top_right_radius" data-error="You must enter a positive number">Top Right (px)</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col l4 s12">
							<input id="bottom_right_radius" type="number" name="bottom_right_radius" class="validate" step="any" min="0">
							<label for="bottom_right_radius" data-error="You must enter a positive number">Bottom Right (px)</label>
						</div>
						<div class="input-field col l4 s12">
							<input id="bottom_left_radius" type="number" name="bottom_left_radius" class="validate" step="any" min="0">
							<label for="bottom_left_radius" data-error="You must enter a positive number">Bottom Left (px)</label>
						</div>
					</div>
					<div class="row"></div>

					<!-- Browser preview -->
					<div class="row">
		            <div class="col s12">
		              <div class="browser-window">
		                <div class="top-bar">
		                  <div class="circles">
		                     <div id="close-circle" class="circle"></div>
		                     <div id="minimize-circle" class="circle"></div>
		                     <div id="maximize-circle" class="circle"></div>
		                  </div>
		                </div>
		                <div class="content">
		                  <div class="row">

		                    <div id="site-layout-example-top" class="col s12">
		                      <!-- <p class="flat-text-logo"></p> -->
		                    </div>
		                    <div id="site-layout-example-right" class="col s12">
		                      <div class="container">

		                        <div class="row">
		                        	<div class="col s12 ">
		                        		<div class="border_radius_preview">Border Radius - Preview Div</div>
		                        	</div>
		                        </div>

		                        <div class="row"></div>

		                        <div class="row">
		                        	<div class="col s12 center-align">

										<!-- Modal Trigger -->
										<a class="modal-trigger waves-effect waves-light btn generate_button" href="#modal1">Generate Code</a>

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
		                    </div>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>

			    </form>
			  </div>			
		</div>
	</main>