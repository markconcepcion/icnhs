<style type="text/css">
	.text-field{
		background: transparent;
		border: 0px;
		border-bottom: 1px solid #4d4d4d;
		padding-left: 15px;
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add Score</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/my_class");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Student's Score</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="row" style="margin-bottom: 20px;">
								<div class="col-md-4">
									<ul>
										<li>
											<span>Grade:</span>
											<input type="" class="text-field" value="11" name="">
										</li>
										
										<li>
											<span>Semister:</span>
											<input type="" class="text-field" value="1" name="">
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul>
										<li>
											<span>Section:</span>
											<input type="" class="text-field" value="A" name="">
										</li>
										<li>
											<span>Quarter:</span>
											<input type="" class="text-field" value="1" name="">
										</li>
									</ul>
								</div>
								<div class="col-md-4">
									<ul>
										<li>
											<span>Strand:</span>
											<input type="" class="text-field" value="STEM" name="">
										</li>
										<li>
											<span>Subject:</span>
											<input type="" class=" text-field" value="Math" name="">
										</li>
									</ul>
								</div>
							</div>
							<div class="tab">
								<ul class="nav nav-tabs customtab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">Written Work</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-selected="false">Performance Task</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#contact2" role="tab" aria-selected="false">Quarterly Assessment</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home2" role="tabpanel">
										<div class="pd-20">
											<form>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Type:</label>
													<div class="col-sm-12 col-md-10">
														<select class="form-control">
															<option>Long Quiz</option>
															<option>Formal Theme</option>
															<option>Summative</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Date Taken:</label>
													<div class="col-sm-12 col-md-10">
														<input type="date" name="" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Highest Score:</label>
													<div class="col-sm-12 col-md-10">
														<input type="" name="" class="form-control">
													</div>
												</div>
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>Name</th>
															<th>Score</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>kath Bernardo</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
														<tr>
															<td>Daniel Padilla</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
														<tr>
															<td>James Reid</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
													</tbody>
												</table>
												<div class="btn-list" style="text-align: center;">
													<button class="btn btn-secondary">Cancel</button>
													<button class="btn btn-primary">Save</button>
												</div>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="profile2" role="tabpanel">
										<div class="pd-20">
											<form>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Type:</label>
													<div class="col-sm-12 col-md-10">
														<select class="form-control">
															<option>Oral</option>
															<option>Short Quiz</option>
															<option>Seatwork</option>
															<option>Reporting</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Date Taken:</label>
													<div class="col-sm-12 col-md-10">
														<input type="date" name="" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Highest Score:</label>
													<div class="col-sm-12 col-md-10">
														<input type="" name="" class="form-control">
													</div>
												</div>
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>Name</th>
															<th>Score</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>kath Bernardo</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
														<tr>
															<td>Daniel Padilla</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
														<tr>
															<td>James Reid</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
													</tbody>
												</table>
												<div class="btn-list" style="text-align: center;">
													<button class="btn btn-secondary">Cancel</button>
													<button class="btn btn-primary">Save</button>
												</div>
											</form>
										</div>
									</div>
									<div class="tab-pane fade" id="contact2" role="tabpanel">
										<div class="pd-20">
											<form>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Date Taken:</label>
													<div class="col-sm-12 col-md-10">
														<input type="date" name="" class="form-control">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-12 col-md-2 col-form-label">Highest Score:</label>
													<div class="col-sm-12 col-md-10">
														<input type="" name="" class="form-control">
													</div>
												</div>
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>Name</th>
															<th>Score</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>kath Bernardo</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
														<tr>
															<td>Daniel Padilla</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
														<tr>
															<td>James Reid</td>
															<td><input type="" class="form-control" name=""></td>
														</tr>
													</tbody>
												</table>
												<div class="btn-list" style="text-align: center;">
													<button class="btn btn-secondary">Cancel</button>
													<button class="btn btn-primary">Save</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		



