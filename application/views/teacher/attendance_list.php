
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add Attendance</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/add_attendance");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add attendance</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">		
					<form>
						<div class="form-group row" style="margin-top: 25px;">
							<label class="col-sm-12 col-md-3 col-form-label">Name of the Student:</label>
							<div class="col-sm-12 col-md-9">	
								<select class="form-control">
									<option>kathryn Bernardo</option>
									<option>Daniel Padilla</option>
								</select>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Date</label>
									<input type="date" class="form-control" name="">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Status</label>
									<select class="form-control">
										<option>Present</option>
										<option>Absent</option>
										<option>Excuse</option>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Remark</label>
									<input type="text" class="form-control" name="">
								</div>
							</div>
						</div>
						<div class="btn-list pull-right">
								<button class="btn btn-secondary" type="submit">Cancel</button>
								<button class="btn btn-primary" type="submit">Next</button>
						</div>
					</form>
					<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="margin-top: 70px; border-style: solid; border-width: thin; border-color: darkgrey;">
					<div class="clearfix mb-20">
						<div class="text-center">
							<h5 class="text-blue" style="letter-spacing: 15px;">Attendance Sheet</h5>
						</div>
					</div>
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-sm-12 col-md-6">
						<ul>
							<li>
								<span style="color: grey;">Grade & Section:</span>
								
							</li>
							<li>
								<span style="color: grey;">Strand:</span>
							</li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-6">
						<ul>
							<li>
								<span style="color: grey;">Subject:</span>
							</li>
							<li>
								<span style="color: grey;">Schedule:</span>
							</li>
						</ul>
					</div>
					</div>
					<div class="row">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Date</th>
									<th>Name</th>
									<th>Status</th>
									<th>Remark</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>01-11-2020</td>
									<td>Enrique Gil</td>
									<td>Present</td>
									<td></td>
								</tr>
							
							</tbody>
						</table>
					</div>
				</div>
				<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
								<button class="btn btn-primary" type="submit">Save</button>
						</div>
				</div>
				<!-- Form grid End -->
			</div>

