	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Box Shadow</h2>
			    			<span class="notice">Note: Negative values are allowed for spread, horizontal & vertical length.</span></br>
			    			<span class="notice">Note: Negative values are not allowed for blur radius.</span>
			    			<span class="notice">Note: Opacity must be in 0-1 range.</span>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col l4 s12">
							<input id="box_shadow_horizontal_length" type="text" name="box_shadow_horizontal_length">
							<label for="box_shadow_horizontal_length">Horizontal Length (px)</label>
						</div>
						<div class="input-field col l4 s12">
							<input id="box_shadow_vertical_length" type="text" name="box_shadow_vertical_length">
							<label for="box_shadow_vertical_length">Vertical Length (px)</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col l4 s12">
							<input id="box_shadow_blur_radius" type="text" name="box_shadow_blur_radius">
							<label for="box_shadow_blur_radius">Blur Radius (px)</label>
						</div>
						<div class="input-field col l4 s12">
							<input id="box_shadow_spread" type="text" name="box_shadow_spread">
							<label for="box_shadow_spread">Spread (px)</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col l2 s12">
							<select id="box_shadow_position">
								<option value="outset" selected>Outset</option>
								<option value="inset">Inset</option>
							</select>
							<label for="box_shadow_position">Inset/Outset</label>
						</div>
						<div class="input-field col l2 s12">
							<input id="box_shadow_color" class="jscolor {hash:true, borderWidth:0, borderRadius:0}" type="text" name="box_shadow_color" value="#272727">
							<label for="box_shadow_color">Shadow Color</label>
						</div>
						<div class="input-field col l2 s12">
							<select id="box_shadow_color_type">
								<option value="hex" selected>HEX</option>
								<option value="rgb">RGBA</option>
							</select>
							<label for="box_shadow_color_type">Color Type</label>
						</div>
						<div class="input-field col l2 s12">
							<input id="box_shadow_opacity" type="text" value=1 name="box_shadow_opacity" disabled>
							<label for="box_shadow_opacity">Opacity (0-1)</label>
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
		                        		<div class="box_shadow_preview">Box Shadow - Preview Div</div>
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