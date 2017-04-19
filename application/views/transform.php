	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Transform</h2>
			    			<span class="notice">Note: Decimal values are allowed.</span></br>
			    			<span class="notice">Note: Negative values are allowed.</span></br>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col l3 s6">
							<input id="transform_scale_x" type="number" name="transform_scale_x" class="validate" step="any">
							<label for="transform_scale_x" data-error="You must enter a number">ScaleX</label>
						</div>
						<div class="input-field col l3 s6">
							<input id="transform_scale_y" type="number" name="transform_scale_y" class="validate" step="any">
							<label for="transform_scale_y" data-error="You must enter a number">ScaleY</label>
						</div>

						<div class="input-field col l3 s6">
							<input id="transform_translate_x" type="number" name="transform_translate_x" class="validate" step="any">
							<label for="transform_translate_x" data-error="You must enter a number">TranslateX (px)</label>
						</div>
						<div class="input-field col l3 s6">
							<input id="transform_translate_y" type="number" name="transform_translate_y" class="validate" step="any">
							<label for="transform_translate_y" data-error="You must enter a number">TranslateY (px)</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col l4 s4">
							<input id="transform_skew_x" type="number" name="transform_skew_x" class="validate" step="any">
							<label for="transform_skew_x" data-error="You must enter a number">SkewX (deg)</label>
						</div>
						<div class="input-field col l4 s4">
							<input id="transform_skew_y" type="number" name="transform_skew_y" class="validate" step="any">
							<label for="transform_skew_y" data-error="You must enter a number">SkewY (deg)</label>
						</div>

						<div class="input-field col l4 s4">
							<input id="transform_rotate" type="number" name="transform_rotate" class="validate" step="any">
							<label for="transform_rotate" data-error="You must enter a number">Rotate (deg)</label>
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
		                        		<div class="transform_preview"></div>
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