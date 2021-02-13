<style type="text/css">
	.table-color, th, td {
    border: 1px solid #4d4d4d;
    font-size: 13px;
	}
	th{
		width: 500px;
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Point of Score</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Set Point of Score</li>
								</ol>
							</nav>
						</div>
				
				<!-- Medium modal -->
					<div class="col-md-6 col-sm-12 text-left">
						<div class="action-header clearfix ">
          					<ul class='actions pull-right'>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button">

								<button class="btn btn-primary waves-effect waves-light m-t-10" data-toggle="modal" data-target="#Medium-modal"><li class='ion-plus'>  Point Score</button> </li>
							</a>
							<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">

										<?php echo form_open( 'teacher/Setpointscore/savePointOfScore' ); ?>
											<div class="modal-header">
												<h4 class="modal-title" id="myLargeModalLabel">Set Point of Score</h4>
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											</div>

											<div class="modal-body">
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
														<label>Subject:</label>	
														</div>
														<div class="col-md-9">
															<select class="form-control" id="ws" data-live-search="true" name="class_subject_IDclassSubject" required="true">
																<?php foreach ($subjects as $row) { ?>
																	<option value="<?php echo $row['IDclassSubject']; ?>"><?php echo $row['subjectCode'] . ' - ' . $row['subjectDesc']; ?></option>
																<?php } ?>
															</select>
														</div>
													</div>                  
												</div>
												<div class="form-group" style="margin-top: 20px;">
													<div class="row">
														<div class="col-md-8">
															<label>Type</label>	
														</div>
														<div class="col-md-4">
															<label>Points</label>
														</div>
													</div>                  
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-8">
															<input class="form-control" type="" value="WRITTEN WORKS" name="" readonly="" style="background: transparent;">
														</div>
														<div class="col-md-4">
															<input class="form-control" type="" name="writtenworks">
														</div>
													</div>                  
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-8">
															<input class="form-control" type="" value="PERFORMANCE TASK" name="" readonly="" style="background: transparent;">
														</div>
														<div class="col-md-4">
															<input class="form-control" type="" name="performancetask">
														</div>
													</div>                  
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-8">
															<input class="form-control" type="" value="QUARTERLY ASSESSMENT" name="" readonly="" style="background: transparent;">
														</div>
														<div class="col-md-4">
															<input class="form-control" type="" name="quarterlyassessment">
														</div>
													</div>                  
												</div>
													
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										<?php echo form_close(); ?>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
	<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
		<div class="col-md-6 col-sm-12 text-left">
			<div class="action-header clearfix ">
          		
					 <div id="con-close-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    
                                                    <h4 class="modal-title">Edit Point of Score</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="form-group">
											 	<div class="row">
											 		<div class="col-md-3">
											 		 <label>Subject:</label>	
											 		</div>
											 		<div class="col-md-9">
											 			  <select class="form-control" id="ws" data-live-search="true" name="ws" required="true">
                                                        
                                            			
                                                        <option value='1'>Math 1</option>
                                                    
                                                        <option value='2'>Eng 1</option>
                                                    
                                                        <option value='3'>Fil 1</option>
                                                                                </select>
											 		</div>
											 	</div>                  
                                            </div>
                                            <div class="form-group" style="margin-top: 20px;">
											 	<div class="row">
											 		<div class="col-md-8">
											 			<label>Type</label>	
											 		</div>
											 		<div class="col-md-4">
											 			<label>Points</label>
											 		</div>
											 	</div>                  
                                            </div>
                                            <div class="form-group">
											 	<div class="row">
											 		<div class="col-md-8">
											 			<input class="form-control" type="" value="WRITTEN WORKS" name="" readonly="" style="background: transparent;">
											 		</div>
											 		<div class="col-md-4">
											 			<input class="form-control" type="" value="30%" name="">
											 		</div>
											 	</div>                  
                                            </div>
                                             <div class="form-group">
											 	<div class="row">
											 		<div class="col-md-8">
											 			<input class="form-control" type="" value="PERFORMANCE TASK" name="" readonly="" style="background: transparent;">
											 		</div>
											 		<div class="col-md-4">
											 			<input class="form-control" type="" value="50%" name="">
											 		</div>
											 	</div>                  
                                            </div>
                                             <div class="form-group">
											 	<div class="row">
											 		<div class="col-md-8">
											 			<input class="form-control" type="" value="QUARTERLY ASSESSMENT" name="" readonly="" style="background: transparent;">
											 		</div>
											 		<div class="col-md-4">
											 			<input class="form-control" type="" value="20%" name="">
											 		</div>
											 	</div>                  
                                            </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-info waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                               
                            </div>
                        </div>

					
					<div class="row">
						<table class="table-color">
							<thead>
								<tr>
									<th rowspan="3" style="text-align: center;">Subject</th>
									<th colspan="3" style="text-align: center;">Type</th>
									<th rowspan="3" style="text-align: center;">Action</th>
								</tr>
								<tr>
									<th style="text-align: center;">WRITTEN WORKS</th>
									<th style="text-align: center;">PERFORMANCE TASK</th>
									<th style="text-align: center;">QUARTERLY ASSESSMENT</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($subjects as $row) { ?>
									<tr>
										<td style="text-align: center;"><?php echo $row['subjectCode'] . ' - ' . $row['subjectDesc']; ?></td>
										<td style="text-align: center;"></td>
										<td style="text-align: center;"></td>
										<td style="text-align: center;"></td>
										<td style="text-align: center;">
											<div class="btn-group">
												<button type="button" class="btn" data-toggle="modal" aria-expanded="false"data-target ="#con-close-modal1"  style="background: #00cc7a; color: white;"><i class="icon-copy ion-edit"></i>Edit</button>
											</div>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>