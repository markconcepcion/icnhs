
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add Class Schedule</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/dashboard/view_students");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Class Schedule</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">		
					<form>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-4 col-form-label">Grade:</label>
									<div class="col-sm-12 col-md-8">
										<select class="form-control">
											<option>11</option>
											<option>12</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-3 col-form-label">Section:</label>
									<div class="col-sm-12 col-md-9">
										<select class="form-control">
											<option>A</option>
											<option>B</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">STRAND:</label>
							<div class="col-sm-12 col-md-10">
								<select class="form-control">
									<option>STEM</option>
									<option>GAS</option>
									<option>TVL</option>
								</select>
							</div>
						</div>
						
						<div class="row" style="margin-top: 50px;">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Subject</label>
									<select class="form-control">
										<option>Math1</option>
										<option>English1</option>
										<option>Science1</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Instructor</label>
									<select class="form-control">
										<option>Kathryn Bernardo</option>
										<option>Daniel Padilla</option>
									</select>
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<label>Day</label>
									<select class="form-control">
										<option>Mon</option>
										<option>Tue</option>
										<option>Wed</option>
										<option>Thu</option>
										<option>Fri</option>
										<option>Sat</option>
										<option>Sun</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Time</label>
									<input type="time" class="form-control">
								</div>
							</div>	
							<div class="col-md-1 col-sm-12">
								<div class="form-group">
									<label></label>
									<button class="btn btn-primary" type="submit">Next</button>
								</div>
							</div>	
						</div>
					</form>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="margin-top: 40px; border-style: solid; border-width: thin; border-color: darkgrey;">
					<div class="clearfix mb-20">
						<div class="text-center">
							<h5 class="text-blue" style="letter-spacing: 15px;">Class Schedule</h5>
						</div>
					</div>
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-sm-12 col-md-6">
						<ul>
							<li>
								<span style="font-weight: bold;">School Year & Semister:</span>
								
							</li>
							<li>
								<span style="font-weight: bold;">Strand:</span>
							</li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-6">
						<ul>
							<li>
								<span style="font-weight: bold;">Grade & Section:</span>
							</li>
							<li>
								<span style="font-weight: bold;">Adviser:</span>
							</li>
						</ul>
					</div>
					</div>
					<div class="row">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Subject</th>
									<th>Teacher</th>
									<th>Day</th>
									<th>Time</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">Math</td>
									<td>Enrique Gil</td>
									<td>Mon</td>
									<td>01:30pm-3:00pm</td>
									<td>
										<a class="btn btn-info" data-toggle="modal" data-target="#bd-example-modal-lg" type="button" style="color: white;"> Edit </a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
								<button class="btn btn-secondary" type="submit">Cancel</button>
								<button class="btn btn-primary" type="submit">Save</button>
								<a class="btn btn-success" href="<?php echo base_url("guidance/dashboard/print_classschedule");?>" role="button" style="color: white;">
											Save&Print</a>
						</div>
				</div>
				<!-- Form grid End -->
			</div>

	<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Edit Schedule</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
										<div class="row" style="margin-top: 50px;">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Subject</label>
									<select class="form-control">
										<option>Math1</option>
										<option>English1</option>
										<option>Science1</option>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Instructor</label>
									<select class="form-control">
										<option>Kathryn Bernardo</option>
										<option>Daniel Padilla</option>
									</select>
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group">
									<label>Day</label>
									<select class="form-control">
										<option>Mon</option>
										<option>Tue</option>
										<option>Wed</option>
										<option>Thu</option>
										<option>Fri</option>
										<option>Sat</option>
										<option>Sun</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Time</label>
									<input type="time" class="form-control">
								</div>
							</div>	
							
						</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>