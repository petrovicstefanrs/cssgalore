	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Transition</h2>
			    			<span class="notice">Note: Decimal values are allowed.</span></br>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col s12">
							<select id="transition_transition_property">
								<option value="height" selected>Height</option>
								<option value="width">Width</option>
								<option value="bgcolor">Background Color</option>
								<option value="opacity">Opacity</option>
							</select>
							<label for="transition_transition_property">Transition Property</label>
						</div>
					</div>
					<div id="transition_fields">

						<!--Height Transition-->

						<div class="row" id="transition_field_height">
							<div class="input-field col l3 s6">
								<select id="transition_height_timing">
									<option value="linear" selected>Linear</option>
									<option value="ease">Ease</option>
									<option value="ease-in">Ease In</option>
									<option value="ease-out">Ease Out</option>
									<option value="ease-in-out">Ease In-Out</option>
								</select>
								<label for="transition_height_timing">Timing Function</label>
							</div>

							<div class="input-field col l3 s6">
								<input id="transition_height_height" type="number" name="transition_height_height" class="validate" step="any" min="0">
								<label for="transition_height_height" data-error="You must enter a number">Height (px)</label>
							</div>
							<div class="input-field col l3 s6">
								<input id="transition_height_duration" type="number" name="transition_height_duration" class="validate" step="any" min="0">
								<label for="transition_height_duration" data-error="You must enter a number">Duration (seconds)</label>
							</div>
							<div class="input-field col l3 s6">
								<input id="transition_height_delay" type="number" name="transition_height_delay" class="validate" step="any" min="0">
								<label for="transition_height_delay" data-error="You must enter a number">Delay (seconds)</label>
							</div>
						</div>


						<!--Width Transition-->

						<div class="row" id="transition_field_width">
							<div class="input-field col l3 s6">
								<select id="transition_width_timing">
									<option value="linear" selected>Linear</option>
									<option value="ease">Ease</option>
									<option value="ease-in">Ease In</option>
									<option value="ease-out">Ease Out</option>
									<option value="ease-in-out">Ease In-Out</option>
								</select>
								<label for="transition_width_timing">Timing Function</label>
							</div>

							<div class="input-field col l3 s6">
								<input id="transition_width_width" type="number" name="transition_width_width" class="validate" step="any" min="0">
								<label for="transition_width_width" data-error="You must enter a number">Width (px)</label>
							</div>
							<div class="input-field col l3 s6">
								<input id="transition_width_duration" type="number" name="transition_width_duration" class="validate" step="any" min="0">
								<label for="transition_width_duration" data-error="You must enter a number">Duration (seconds)</label>
							</div>
							<div class="input-field col l3 s6">
								<input id="transition_width_delay" type="number" name="transition_width_delay" class="validate" step="any" min="0">
								<label for="transition_width_delay" data-error="You must enter a number">Delay (seconds)</label>
							</div>
						</div>

						<!--Background Color-->

						<div class="row" id="transition_field_bgcolor">
							<div class="input-field col l3 s6">
								<select id="transition_bgcolor_timing">
									<option value="linear" selected>Linear</option>
									<option value="ease">Ease</option>
									<option value="ease-in">Ease In</option>
									<option value="ease-out">Ease Out</option>
									<option value="ease-in-out">Ease In-Out</option>
								</select>
								<label for="transition_bgcolor_timing">Timing Function</label>
							</div>

							<div class="input-field col l3 s6">
								<input id="transition_bgcolor_color" class="jscolor {hash:true, borderWidth:0, borderRadius:0}" type="text" name="transition_bgcolor_color" value="#272727">
								<label for="transition_bgcolor_color">Background Color</label>
							</div>
							<div class="input-field col l3 s6">
								<input id="transition_bgcolor_duration" type="number" name="transition_bgcolor_duration" class="validate" step="any" min="0">
								<label for="transition_bgcolor_duration" data-error="You must enter a number">Duration (seconds)</label>
							</div>
							<div class="input-field col l3 s6">
								<input id="transition_bgcolor_delay" type="number" name="transition_bgcolor_delay" class="validate" step="any" min="0">
								<label for="transition_bgcolor_delay" data-error="You must enter a number">Delay (seconds)</label>
							</div>
						</div>

						<!--Opacity Transition-->

						<div class="row" id="transition_field_opacity">
							<div class="input-field col l3 s6">
								<select id="transition_opacity_timing">
									<option value="linear" selected>Linear</option>
									<option value="ease">Ease</option>
									<option value="ease-in">Ease In</option>
									<option value="ease-out">Ease Out</option>
									<option value="ease-in-out">Ease In-Out</option>
								</select>
								<label for="transition_opacity_timing">Timing Function</label>
							</div>

							<div class="input-field col l3 s6">
								<input id="transition_opacity_opacity" type="number" name="transition_opacity_opacity" class="validate" step="any" min="0" max="1">
								<label for="transition_opacity_opacity" data-error="You must enter a number between 0 and 1">Opacity (0-1)</label>
							</div>
							<div class="input-field col l3 s6">
								<input id="transition_opacity_duration" type="number" name="transition_opacity_duration" class="validate" step="any" min="0">
								<label for="transition_opacity_duration" data-error="You must enter a number">Duration (seconds)</label>
							</div>
							<div class="input-field col l3 s6">
								<input id="transition_opacity_delay" type="number" name="transition_opacity_delay" class="validate" step="any" min="0">
								<label for="transition_opacity_delay" data-error="You must enter a number">Delay (seconds)</label>
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
		                    <div id="site-layout-example-right" class="col s12">
		                      <div class="container">

		                        <div class="row">
		                        	<div class="col s12 ">
		                        		<div class="transition_preview">HOVER ME</div>
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