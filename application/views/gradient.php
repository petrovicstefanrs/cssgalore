	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Gradient</h2>
			    			<!-- <span class="notice">Note: Decimal values are allowed.</span></br> -->
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col s12">
							<select id="gradient_style">
								<option value="linear" selected>Linear</option>
								<option value="radial">Radial</option>
							</select>
							<label for="gradient_style">Gradient Style</label>
						</div>
					</div>
					<div id="gradient_fields">

						<!-- Linear Gradient -->

						<div class="row" id="gradient_field_linear">
							<div class="input-field col l3 s6">
								<input id="gradient_start_color_linear" class="jscolor {hash:true, borderWidth:0, borderRadius:0}" type="text" name="gradient_start_color_linear" value="#ffffff">
								<label for="gradient_start_color_linear">Start Color</label>
							</div>

							<div class="input-field col l3 s6">
								<input id="gradient_end_color_linear" class="jscolor {hash:true, borderWidth:0, borderRadius:0}" type="text" name="gradient_end_color_linear" value="#3F51B5">
								<label for="gradient_end_color_linear">End Color</label>
							</div>
							<div class="col l6 s12">
								<p class="range-field">
									<label for="gradient_angle">Gradient Angle</label>
							    	<input type="range" id="gradient_angle" min="0" max="360" value="0" />
							    </p>
							</div>
						</div>


						<!-- Radial Gradient -->

						<div class="row" id="gradient_field_radial">
							<div class="input-field col l3 s12">
								<input id="gradient_start_color_radial" class="jscolor {hash:true, borderWidth:0, borderRadius:0}" type="text" name="gradient_start_color_radial" value="#ffffff">
								<label for="gradient_start_color_radial">Start Color</label>
							</div>
							<div class="col l3 s12">
								<p class="range-field">
									<label for="gradient_start_size">Start Color Size</label>
							    	<input type="range" id="gradient_start_size" min="0" max="100" value="0" />
							    </p>
							</div>

							<div class="input-field col l3 s12">
								<input id="gradient_end_color_radial" class="jscolor {hash:true, borderWidth:0, borderRadius:0}" type="text" name="gradient_end_color_radial" value="#3F51B5">
								<label for="gradient_end_color_radial">End Color</label>
							</div>
							<div class="col l3 s12">
								<p class="range-field">
									<label for="gradient_end_size">End Color Size</label>
							    	<input type="range" id="gradient_end_size" min="0" max="100" value="100" />
							    </p>
							</div>
							
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
		                    <div id="site-layout-example-right" class="col s12 gradient_preview">
		                      <div class="container">

		                        <div class="row">
		                        	<!-- <div class="col s12 ">
		                        		<div class="gradient_preview"></div>
		                        	</div> -->
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