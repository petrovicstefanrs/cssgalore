	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Filters</h2>
			    			<span class="notice">Note: Percentage input fields can have values over 100%.</span></br>
			    			<span class="notice">Note: Drop Shadow Filter fields can have negative and decimal values.</span></br>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row valign-wrapper wrapthatflex">
						<div class="input-field col l4 s12">
							<select id="filter_function">
								<option value="blur" selected>Blur</option>
								<option value="brightness">Brightness</option>
								<option value="contrast">Contrast</option>
								<option value="drop-shadow">Drop Shadow</option>
								<option value="grayscale">Grayscale</option>
								<option value="hue-rotate">HUE Rotate</option>
								<option value="invert">Invert</option>
								<option value="opacity">Opacity</option>
								<option value="saturate">Saturate</option>
								<option value="sepia">Sepia</option>
							</select>
							<label for="filter_function">Filter Function</label>
						</div>
						<div class="input-field col l6 s12">
							<input placeholder="www.your_image_url.com" id="img_url_ta" type="text" name="img_url_ta" class="validate">
							<label for="img_url_ta" data-error="You must enter a valid url">URL To Image</label>
						</div>
						<div class="col l2 s12">
							<button class="btn waves-effect waves-light btn_loremipsum" id="submit_url_filter" type="button" name="submit_url_filter">Submit
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
					<div id="filter_fields">

						<!--Blur Filter-->

						<div class="row" id="field_filter_blur">
							<div class="input-field col l6 s12">
								<input id="filter_blur_value" type="number" name="filter_blur_value" class="validate" step="any" min="0">
								<label for="filter_blur_value" data-error="You must enter a number">Blur (px)</label>
							</div>
						</div>

						<!--Brightnes Filter-->

						<div class="row" id="field_filter_brightness">
							<div class="input-field col l6 s12">
								<input id="filter_brightness_value" type="number" name="filter_brightness_value" class="validate" value="100" step="any" min="0">
								<label for="filter_brightness_value" data-error="You must enter a positive number">Brightness (%)</label>
							</div>

							<!-- <div class="col s6">
								<p class="range-field">
									<label for="filter_brightness_value">Brightness (%)</label>
							    	<input type="range" id="filter_brightness_value" min="0" max="100" value="100" />
							    </p>
							</div> -->
						</div>

						<!--Contrast Filter-->

						<div class="row" id="field_filter_contrast">
							<div class="input-field col l6 s12">
								<input id="filter_contrast_value" type="number" name="filter_contrast_value" class="validate" value="100" step="any" min="0">
								<label for="filter_contrast_value" data-error="You must enter a positive number">Contrast (%)</label>
							</div>

							<!-- <div class="col s6">
								<p class="range-field">
									<label for="filter_contrast_value">Contrast (%)</label>
							    	<input type="range" id="filter_contrast_value" min="0" max="100" value="100" />
							    </p>
							</div> -->
						</div>

						<!--Drop Shadow Filter-->

						<div class="row" id="field_filter_drop-shadow">

							<div class="input-field col s6">
								<input id="filter_drop-shadow_h" type="number" name="filter_drop-shadow_h" class="validate" value="0" step="any">
								<label for="filter_drop-shadow_h" data-error="You must enter a number">Horizontal Offset (px)</label>
							</div>

							<div class="input-field col s6">
								<input id="filter_drop-shadow_v" type="number" name="filter_drop-shadow_v" class="validate" value="0" step="any">
								<label for="filter_drop-shadow_v" data-error="You must enter a number">Vertical Offset (px)</label>
							</div>
						
							<div class="input-field col s6">
								<input id="filter_drop-shadow_blur" type="number" name="filter_drop-shadow_v" class="validate" value="0" min="0" step="any">
								<label for="filter_drop-shadow_blur" data-error="You must enter a positive number">Shadow Blur (px)</label>
							</div>

							<div class="input-field col s6">
								<input id="filter_drop-shadow_color" class="jscolor {hash:true, borderWidth:0, borderRadius:0}" type="text" name="filter_drop-shadow_color" value="#3F51B5">
								<label for="filter_drop-shadow_color">Shadow Color</label>
							</div>
							
						</div>

						<!--Grayscale Filter-->

						<div class="row" id="field_filter_grayscale">

							<div class="col l6 s12">
								<p class="range-field">
									<label for="filter_grayscale_value">Grayscale (%)</label>
							    	<input type="range" id="filter_grayscale_value" min="0" max="100" value="0" />
							    </p>
							</div>
						</div>

						<!--HUE Rotate Filter-->

						<div class="row" id="field_filter_hue-rotate">

							<div class="col l6 s12">
								<p class="range-field">
									<label for="filter_hue-rotate_value">HUE Rotate (angle)</label>
							    	<input type="range" id="filter_hue-rotate_value" min="0" max="360" value="0" />
							    </p>
							</div>
						</div>

						<!--Invert Filter-->

						<div class="row" id="field_filter_invert">

							<div class="col l6 s12">
								<p class="range-field">
									<label for="filter_invert_value">Invert (%)</label>
							    	<input type="range" id="filter_invert_value" min="0" max="100" value="0" />
							    </p>
							</div>
						</div>

						<!--Opacity Filter-->

						<div class="row" id="field_filter_opacity">

							<div class="col l6 s12">
								<p class="range-field">
									<label for="filter_opacity_value">Opacity (%)</label>
							    	<input type="range" id="filter_opacity_value" min="0" max="100" value="100" />
							    </p>
							</div>
						</div>

						<!--Saturate Filter-->

						<div class="row" id="field_filter_saturate">

							<div class="input-field col l6 s12">
								<input id="filter_saturate_value" type="number" name="filter_saturate_value" class="validate" value="100" step="any" min="0">
								<label for="filter_saturate_value" data-error="You must enter a positive number">Saturate (%)</label>
							</div>
						</div>

						<!--Sepia Filter-->

						<div class="row" id="field_filter_sepia">

							<div class="col l6 s12">
								<p class="range-field">
									<label for="filter_sepia_value">Sepia (%)</label>
							    	<input type="range" id="filter_sepia_value" min="0" max="100" value="0" />
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
		                    <div id="site-layout-example-right" class="col s12">
		                      <div class="container">

		                        <div class="row">
		                        	<div class="col s12 ">
		                        		<div class="filter_preview"><img id="filter_preview_img" src="<?php echo base_url(); ?>images/filter_preview.jpg"></div>
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