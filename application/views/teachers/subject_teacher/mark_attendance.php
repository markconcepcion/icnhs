
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
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/my_class");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Student's Attendance</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">	
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-6">
							<ul>
								<li>
									<span style="font-weight: bold;">Strand:</span>
									Stem
								</li>
								<li>
									<span style="font-weight: bold;">Grade & Section:</span>
									11-A
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<li>
									<span style="font-weight: bold;">Subject:</span>
									Math
								</li>
								<li>
									<span style="font-weight: bold;">Schedule:</span>
									Mon 10:00-11:00am
								</li>
							</ul>
						</div>
					</div>	
					<form>
						<div class="row">
							<div class="col-md-9">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Set Date:</label>
									<div class="col-sm-12 col-md-10">
										<input type="date" name="" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<button class="btn btn-primary">Set</button>
							</div>
						</div>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Status</th>
									<th>Remark</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Example list</td>
									<td>
										<div class="row">
											<div class="custom-control custom-radio mb-5 col-md-4" style="margin-left: 5px;">
												<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio1">Present</label>
											</div>
											<div class="custom-control custom-radio mb-5 col-md-4" style="margin-left: 5px;">
												<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio2">Excuse</label>
											</div>
											<div class="custom-control custom-radio mb-5 col-md-3" style="margin-left: 5px;">
												<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
												<label class="custom-control-label" for="customRadio3">Absent</label>
											</div>
										</div>
									</td>
									<td><input type="" class="form-control" name=""></td>
								</tr>
							</tbody>
						</table>
						<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
							<button class="btn btn-secondary" type="submit">Cancel</button>
							<button class="btn btn-primary" type="submit">Save</button>
						</div>
					</form>
				</div>
			</div>

