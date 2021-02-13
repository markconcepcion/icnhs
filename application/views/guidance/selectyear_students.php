
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Submit Grade</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/teacher");?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Final Grade of Students</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<form>
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
									<label class="col-sm-12 col-md-3 col-form-label">Grade:</label>
									<div class="col-sm-12 col-md-9">
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
						<div class="row" style="margin-bottom: 10px;">
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
						</div>
						<div class="btn-list" style="justify-content: center; display: flex; align-items: center; margin-bottom: 10px;">
												<button class="btn btn-primary" type="submit" style=" padding: 8px 470px; letter-spacing: 5px; font-size: 20px;">View</button>
											</div>
						<div class="tab-content" style="border-style: ridge; border-color: aquamarine; margin-bottom: 10px;">
									<div class="tab-pane fade show active" id="home6" role="tabpanel">
										<div class="pd-20">
											<table class="table table-bordered">
											  <thead>
											    <tr>
											      <th scope="col">No.</th>
											      <th scope="col">Student</th>
											      <th scope="col">Quarter 1</th>
											      <th scope="col">Quarter 2</th>
											      <th scope="col">Semester Final Grade</th>
											    </tr>
											  </thead>
											  <tbody>
											    <tr>
											    	<td>1</td>
											    	<td>Acruz, Azel</td>
											    	<td>82</td>
											    	<td>84</td>
											    	<td>83</td>
											    </tr>
											  </tbody>
											</table>
										</div>
										<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
											<a class="btn btn-success" href="<?php echo base_url("teacher/view_finalgrade");?>" role="button" style="color: white;">
											Print Grade</a>
											<button class="btn btn-primary" data-toggle="modal" data-target="#small-modal" type="button">Submit Grade</button>
										</div>
									</div>	
								</div>
						</div>
					</div>
				</div>
			</div>

				<div class="modal fade" id="small-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Submit Grade to</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<select class="form-control">
												<option>Daniel Padilla</option>
												<option>Kathryn Bernardo</option>
											</select>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
										</div>
									</div>
								</div>
							</div>