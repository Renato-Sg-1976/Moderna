<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread();
?>

			


			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="white icon-user"></i><span class="break"></span>User</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
						  
						  
							<div class="control-group">
							  <label class="control-label" for="typeahead">Name : </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="" >
								
							  </div>
							</div>
							

							<div class="control-group">
							  <label class="control-label" for="typeahead">Username : </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="" >
								
							  </div>
							</div>
							
														
							
							<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>   
							 
							
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

		
		



<?php

	get_footer();
?>