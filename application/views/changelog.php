
	<main class="full_height">
		<div class="container content_container">
				<div class="section">
					<ul class="collapsible" data-collapsible="accordion">							
							<?php 
								foreach ($logs as $log) {
									?>
									<li>
										<div class="collapsible-header"><?php echo $log->changelog_date." | ".$log->changelog_title." - Version: ".$log->changelog_version; ?></div>
										<div class="collapsible-body">
										<?php
											foreach ($logs_info as $log_info) {
												if ($log->changelog_id==$log_info->changelog_id) {
													echo "<span class='changelog_line'><span class='changelog_status'>".$log_info->changelog_info_status.":</span><span> ".$log_info->changelog_info_desc."</span></span></br>";
												}
											}
										?>
										</div>
									</li>
								<?php
								}
							?>   
					</ul>
				</div>				
		</div>
	</main>
	
	
	