<style>
	.pdl-0{ padding-left:0 !important }
	.pdl-10{ padding-left:10px !important }
	.pdl-20{ padding-left:20px !important }
	.pdr-10{ padding-right:10px !important }
	#DataTables_Table_0_wrapper{ padding: 0; }
	#DataTables_Table_1_wrapper{ padding: 0; }
	#DataTables_Table_2_wrapper{ padding: 0; }
	.dataTables_length, .dataTables_filter, .dataTables_info, .dataTables_paginate {
		padding: 0 20px; 
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>School Year Information</h4>
							</div>
						</div>
					</div>
				</div>

				<!-- Form grid Start -->
				<div class="mb-30">
					<div class="bg-white border-radius-4 box-shadow">
						<div class="tab">
							<div class="row clearfix">

								<div class="col-md-2 col-sm-12 pd-mdr-0">
									<ul class="nav flex-column nav-pills vtabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#home7" role="tab" aria-selected="true">
												<i class="fa fa-home"></i> 
												Subject
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#profile7" role="tab" aria-selected="false">
												<i class="fa fa-users"></i> 
												Strand
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#contact7" role="tab" aria-selected="false">
												<i class="fa fa-calendar"></i> 
												Timeline
											</a>
										</li>
									</ul>
								</div>

								<div class="col-md-10 col-sm-12 pd-mdl-0 pd-15">
									<div class="tab-content">
										<div class="tab-pane fade show active" id="home7" role="tabpanel">

											<!-- SUBJECT FORM -->
											<h5 class="text-center text-info pd-vr-20">Add Subject Form</h5>

											<?php echo form_open('guidance/settings/saveSubject'); ?>
												<div class="form-group pdl-20 pdr-10 row">
													<input hidden id="IDsubject" name="IDsubject">

													<label class="col-sm-12 col-md-1 col-form-label">Code:</label>
													<div class="col-sm-12 col-md-2">
														<input required class="form-control" type="text" id="subjectCode" name="subjectCode">
													</div>

													<label class="col-sm-12 col-md-1 col-form-label">Desc:</label>
													<div class="col-sm-12 col-md-5">
															<input required class="form-control" type="text" id="subjectDesc" name="subjectDesc">
													</div>

													<div class="col-sm-12 col-md-3">
														<button class="btn btn-info" type="submit" data-toggle="tooltip" title="Save Strand">
															<i class="fa fa-save" aria-hidden="true"></i>
															Save
														</button>
														<button class="EditSub btn btn-secondary" type="button" id="clear" data-toggle="tooltip" title="Refresh Form">
															<i class="fa fa-refresh" aria-hidden="true"></i>
															Clear
														</button>
													</div>
												</div>
											</form>

											<!-- SUBJECT LIST -->
											<h5 class="text-center text-info pd-vr-20">List of Subjects</h5>

											<table class="data-table stripe hover nowrap">
												<thead>
													<tr>
														<th class="table-plus">Subject Code</th>
														<th>Subject Description</th>
														<th class="datatable-nosort"></th>
													</tr>
												</thead>

												<tbody>
													<?php foreach( $sub_list as $sub ){ ?>
													<tr>
														<td width="35%" class="table-plus"><?php echo $sub['subjectCode'] ?></td>
														<td width="55%"><?php echo $sub['subjectDesc'] ?></td>
														<td width="10%">
															<button class="EditSub btn btn-info" id="<?php echo $sub['IDsubject'].'-'.$sub['subjectCode'].'-'.$sub['subjectDesc']; ?>">
																<i class="fa fa-edit" aria-hidden="true"></i>
																Edit
															</button>
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>

										</div>

										<div class="tab-pane fade" id="profile7" role="tabpanel">

											<!-- SUBJECT FORM -->
											<h5 class="text-center text-info pd-vr-20">Add Strand Form</h5>
											
											<?php echo form_open( 'guidance/settings/saveStrand' ); ?>
												<div class="form-group pdl-20 pdr-10 row">
													<input hidden id="IDstrand" name="IDstrand">

													<label class="col-sm-12 col-md-1 col-form-label">Code:</label>
													<div class="col-sm-12 col-md-2">
														<input required class="form-control" type="text" id="strandCode" name="strandCode">
													</div>

													<label class="col-sm-12 col-md-1 col-form-label">Name:</label>
													<div class="col-sm-12 col-md-5">
														<input required class="form-control" type="text" id="strandName" name="strandName">
													</div>

													<div class="col-sm-12 col-md-3">
														<button class="btn btn-info" type="submit">
															<i class="fa fa-save" aria-hidden="true"></i>
															Save
														</button>
														<button class="EditSub btn btn-secondary" type="button" id="clear">
															<i class="fa fa-refresh" aria-hidden="true"></i>
															Clear
														</button>
													</div>
												</div>
											</form>

											<!-- STRAND LIST -->
											<h5 class="text-center text-info pd-vr-20">List of Strands</h5>

											<table class="data-table stripe hover nowrap">
												<thead>
													<tr>
														<th class="table-plus">Strand Code</th>
														<th>Strand Name</th>
														<th class="datatable-nosort"></th>
													</tr>
												</thead>
												<tbody>
													<?php foreach( $str_list as $str ){ ?>
													<tr>
														<td width="35%" class="table-plus"><?php echo $str['strandCode'] ?></td>
														<td width="55%"><?php echo $str['strandName'] ?></td>
														<td width="10%">
															<button class="EditStrand btn btn-info" id="<?php echo $str['IDstrand'].'-'.$str['strandCode'].'-'.$str['strandName']; ?>">
																<i class="fa fa-edit" aria-hidden="true"></i>
																Edit
															</button>
														</td>
													</tr>
													<?php } ?>
												</tbody>
											</table>

										</div>

										<div class="tab-pane fade" id="contact7" role="tabpanel">

											<!-- TIMELINE FORM -->
											<h5 class="text-center text-info pd-vr-20">Add Timeline Form</h5>
											
											<?php echo form_open( 'guidance/settings/saveTimeline' ); ?>
												
												<div class="form-group pdl-20 pdr-10 row">

													<div class="row col-sm-12 col-md-5">
														<label class="col-sm-12 col-md-3 col-form-label">Type:</label>
														<div class="col-sm-12 col-md-9 mb-10">
															<select class="form-control" id="timelineType" name="timelineType" required>
																<option value="SY">School Year</option>
																<option value="Semester">Semester</option>
																<option value="Quarterly">Quarter</option>
															</select>
														</div>
														
														<label class="col-sm-12 col-md-3 col-form-label">SY:</label>
														<div class="col-sm-12 col-md-9">
															<select class="form-control" id="IDtimeline" name="IDtimeline" disabled>
																<?php foreach( $tml_list as $tml ){ 
																	if( $tml['timelineType'] == 'SY' ) { 
																?>
																	<option></option>
																	<option value="<?php echo $tml['IDtimeline'] ?>">
																		<?php echo date( 'Y', strtotime( $tml['startDate'] ) ).'-'.date( 'Y', strtotime( $tml['endDate'] ) ); ?>
																	</option>
																<?php } } ?>
															</select>
														</div>
													</div>

													<div class="row col-sm-12 col-md-7">
														<label class="col-sm-12 col-md-1 col-form-label mb-10">Date:</label>
														<div class="col-sm-12 col-md-5">
															<input required class="form-control date-picker" type="text" id="startDate" name="startDate">
														</div>

														<label class="col-sm-12 col-md-1 col-form-label">End:</label>
														<div class="col-sm-12 col-md-5">
															<input required class="form-control date-picker" type="text" id="endDate" name="endDate">
														</div>

														<div class="col-sm-12 col-md-12 text-right">
															<button class="btn btn-info" type="submit">
																<i class="fa fa-save" aria-hidden="true"></i>
																Save
															</button>
															<button class="EditStrand btn btn-secondary" type="button" id="clear">
																<i class="fa fa-refresh" aria-hidden="true"></i>
																Clear
															</button>
														</div>
													</div>

												</div>

											</form>

											<!-- TIMELINE LIST -->
											<h5 class="text-center text-info pd-vr-20">List of Timelines</h5>

											<table class="data-table stripe hover nowrap">
												<thead>
													<tr>
														<th>Type</th>
														<th>Description</th>
														<th>Date Start</th>
														<th>Date End</th>
														<th class="datatable-nosort"></th>
													</tr>
												</thead>
												<tbody>
													<?php foreach( $tml_list as $tml ){ 
														$format = ( $tml['timelineType'] == 'SY' )? 'Y':'M d, Y'; 
														$startDate = ( $tml['startDate'] == '' )? '':date( $format, strtotime( $tml['startDate'] ) ); 
														$endDate = ( $tml['endDate'] == '' )? '':date( $format, strtotime( $tml['endDate'] ) ); 
													?> <tr>
														<td class="pdl-10"><?php echo $tml['timelineType'] ?></td>
														<td class="pdl-10"><?php echo $tml['timelineDesc'] ?></td>
														<td class="pdl-10"><?php echo $startDate ?></td>
														<td class="pdl-10"><?php echo $endDate ?></td>
														<td width="5%">
															<button class="EditStrand btn btn-primary btn-sm" data-toggle="tooltip" title="Edit Timeline"
																id="<?php echo $tml['IDtimeline'].'-'.$tml['timelineType'].'-'.$tml['timelineDesc'].'-'.$tml['startDate'].'-'.$tml['endDate']; ?>">
																<i class="fa fa-edit" aria-hidden="true"></i>
															</button>
															<button class="btn btn-warning btn-sm" data-toggle="tooltip" title="End <?php echo $tml['timelineType']?>" id="<?php echo $tml['IDtimeline'] ?>">
																<i class="fa fa-calendar-times-o" aria-hidden="true"></i>
															</button>
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
					</div>
				</div>
				<!-- Form grid End -->
			</div>


<!-- 
	<button class="btn btn-success" data-toggle="modal" data-target="#Medium-modal" type="button">Edit</button>
	<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-green" id="myLargeModalLabel" style="letter-spacing: 5px; align-content: center;">Edit School Year</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<form>
				<div class="modal-body">
					<div class="form-group row">
						<label class="col-sm-12 col-md-3 col-form-label">School Year:</label>
						<div class="col-sm-12 col-md-9">
							<input type="text" class="form-control" name="">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-12 col-md-3 col-form-label">Semister:</label>
						<div class="col-sm-12 col-md-9">
							<select class="form-control">
								<option>1st</option>
								<option>2nd</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>	 -->
