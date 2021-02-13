
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
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/teacher");?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Select Grade and Section</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">		
					<form>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-3 col-form-label">Grade:</label>
									<div class="col-sm-12 col-md-9">
										<select class="form-control">
											<option>11</option>
											<option>12</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
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
							<div class="col-md-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-3 col-form-label">Strand:</label>
									<div class="col-sm-12 col-md-9">
										<select class="form-control">
											<option>STEM</option>
											<option>GAS</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-3 col-form-label">School Year:</label>
									<div class="col-sm-12 col-md-9">
										<select class="form-control">
											<option>2010-2011</option>
											<option>2011-2012</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
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
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-3 col-form-label">Subject:</label>
									<div class="col-sm-12 col-md-9">
										<select class="form-control">
											<option>Math</option>
											<option>English</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-3 col-form-label">Schedule:</label>
									<div class="col-sm-12 col-md-9">
										<select class="form-control">
											<option>Mon 1:30-3:00pm</option>
											<option>Tue 8:00-10:00pm</option>
										</select>
									</div>
								</div>
							</div>
						</div>
							<div class="btn-list" style="justify-content: center; display: flex; align-items: center; margin-bottom: 10px;">
												<a class="btn btn-primary" href="<?php echo base_url("teacher/attendance_list");?>" role="button" style=" padding: 8px 400px; letter-spacing: 5px; font-size: 20px;">
											View Students</a>
											</div>
					</form>
				<!-- Form grid End -->
			</div>

