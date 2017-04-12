<main class="full_height">
		<div class="container content_container">
			<div class="row">
			    <form class="col s12">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Lorem Ipsum</h2>
			    			<span class="notice">Note: For most cases Paragraph Lengths Short and Medium are optimal. </span></br>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
				        <div class="input-field col l4 s12">
							<div class="row">
								<div class="input-field col s12">
									<input id="num_of_paragraphs" type="number" required name="num_of_paragraphs" class="validate" min="0">
									<label for="num_of_paragraphs" data-error="Decimal values are not allowed."># of Paragraph</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<select id="len_of_paragraphs">
										<option value="50" selected>Short</option>
										<option value="100">Medium</option>
										<option value="150">Long</option>
										<option value="200">Extra Long</option>
									</select>
									<label for="len_of_paragraphs">Paragraph length</label>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<button class="btn waves-effect waves-light btn_loremipsum" id="gen_loremipsum" type="button" name="gen_loremipsum">Generate
										<i class="material-icons right">send</i>
									</button>
								</div>
							</div>
				        </div>

				        <div class="input-field col l8 s12">
							<textarea id="output_loremipsum" class="materialize-textarea lorem_textarea" name="output_loremipsum"></textarea>
							<label for="output_loremipsum">Generated Lorem Ipsum</label>

							<button class="btn waves-effect waves-light btn_loremipsum copybtn" id="btn_loremipsum" type="button" name="btn_loremipsum" data-clipboard-target="#output_loremipsum">Copy
								<i class="material-icons right">content_copy</i>
							</button>
				        </div>
					</div>
					<div class="row"></div>
			    </form>
			  </div>			
		</div>
	</main>



