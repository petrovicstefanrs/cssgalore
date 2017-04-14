<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form id="minify_form" method="post" action="<?php echo base_url();?>getminifiedcss/download" class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">CSS Minifier</h2> 
			    			<span class="notice">Note: CSS Minifier is powered by Tovic <a href="https://gist.github.com/tovic/d7b310dea3b33e4732c0" target="_blank">Minification Gist</a></span></br>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
				        <div class="input-field col l6 s12">
							<textarea id="input_css" class="materialize-textarea minify_textarea" name="input_css"></textarea>
							<label for="input_css">Input CSS</label>

							<button id="input_css_btn" class="btn waves-effect waves-light btn_minify" type="button" name="btn_contact">Minify
								<i class="material-icons right">sort</i>
							</button>
				        </div>

				        <div class="input-field col l6 s12">
							<textarea id="output_css" class="materialize-textarea minify_textarea" name="output_css" readonly></textarea>
							<label for="output_css">Minified Output</label>

							<button id="btn_copy_minify" class="btn waves-effect waves-light btn_minify copybtn disabled" type="button" name="btn_copy_minify" data-clipboard-target="#output_css">Copy
								<i class="material-icons right">content_copy</i>
							</button>

							<button id="btn_download_minify" class="btn waves-effect waves-light btn_minify disabled" type="button" name="btn_download">Download File
								<i class="material-icons right">file_download</i>
							</button>
				        </div>
					</div>
					<div class="row"></div>
			    </form>
			  </div>			
		</div>
	</main>