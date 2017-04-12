	<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">PX-EM Converter</h2>
			    			<span class="notice">Note: Decimal values are allowed.</span></br>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col l4 s12">
							<input id="base_size" type="number" name="base_size" class="validate" min="0" step="any">
							<label for="base_size" data-error="Decimal and negative values are not allowed.">Base size in pixels (px)</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col l4 s6">
							<input id="pixel_size" type="number" name="pixel_size" class="validate" min="0" step="any">
							<label for="pixel_size" data-error="Decimal values are not allowed.">Pixels to convert (px)</label>
						</div>
						<div class="input-field col l4 s6">
							<input id="em_size" type="number" name="em_size" class="validate" min="0" step="any">
							<label for="em_size" data-error="Decimal values are not allowed.">EM to convert (em)</label>
						</div>
					</div>
					<div class="row">
						<div class="col l4 s12">
							<button class="btn waves-effect waves-light btn_loremipsum" id="conv_pxem" type="button" name="conv_pxem">Convert
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
					<div class="row"></div>

			    </form>
			  </div>			
		</div>
	</main>