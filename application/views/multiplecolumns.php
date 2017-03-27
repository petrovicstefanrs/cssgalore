	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Multiple Columns</h2>
			    			<span class="notice">Note: Extreme values may break in the preview.</span>
			    			<span class="notice">Note: Negatve values are not allowed.</span>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col l4 s12">
							<input id="num_of_columns" type="text" name="num_of_columns">
							<label for="num_of_columns"># of Columns</label>
						</div>
						<div class="input-field col l4 s12">
							<input id="column_gap" type="text" name="column_gap">
							<label for="column_gap">Column Gap (px)</label>
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
		                        		<p class="multiple_columns_preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultrices velit molestie urna cursus, vitae condimentum sapien consectetur. Aliquam tincidunt volutpat lorem, nec ultricies ex scelerisque ac. Nam porttitor tempus risus, at interdum elit sollicitudin id. Maecenas est magna, fermentum id quam at, pharetra aliquet ipsum. Nam tristique enim et quam vestibulum tempor. Fusce fermentum porta ornare. Sed volutpat velit in bibendum dapibus. Donec aliquam urna ut sapien placerat, nec mattis eros sagittis. Maecenas sagittis elementum odio mollis gravida.Integer et turpis laoreet, lobortis ipsum a, malesuada tellus. Duis eget magna risus. Nullam at libero vel dui iaculis luctus sed et ligula. Vestibulum a tortor erat. Aliquam suscipit, orci nec eleifend luctus, nibh orci pretium nunc, vel porta leo sapien at orci. Donec ullamcorper vulputate sem, ut condimentum magna posuere vel. Pellentesque euismod tempus ligula sed efficitur. Vivamus pellentesque lorem id urna consectetur, non lobortis ligula accumsan. Curabitur accumsan vehicula feugiat. Aliquam sollicitudin tortor in risus rutrum, imperdiet mollis diam cursus. Nam magna purus, vehicula vel tincidunt at, sagittis id ipsum. Cras ultricies, arcu ac iaculis efficitur, arcu felis elementum tellus, vitae faucibus ex mauris hendrerit leo.</p>
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