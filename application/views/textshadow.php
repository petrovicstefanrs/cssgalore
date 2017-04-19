	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Text Shadow</h2>
			    			<span class="notice">Note: Negative values are not allowed for Blur Radius.</span>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col l4 s12">
							<input id="text_shadow_hlength" type="number" name="text_shadow_hlength" class="validate" step="any">
							<label for="num_of_columns">Horizontal Length (px)</label>
						</div>
						<div class="input-field col l4 s12">
							<input id="text_shadow_vlength" type="number" name="text_shadow_vlength" class="validate" step="any">
							<label for="column_gap">Vertical Length (px)</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col l4 s12">
							<input id="text_shadow_blur" type="number" name="text_shadow_blur" class="validate" min="0" step="any">
							<label for="num_of_columns">Blur Radius (px)</label>
						</div>
						<div class="input-field col l4 s12">
							<input id="text_shadow_color" class="jscolor {hash:true, borderWidth:0, borderRadius:0}" type="text" name="text_shadow_color" value="#272727">
							<label for="column_gap">Shadow Color</label>
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
		                        		<p class="text_shadow_preview">TEXT SHADOW</p>
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