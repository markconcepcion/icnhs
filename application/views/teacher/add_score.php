
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Add Student Score</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/teacher");?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Record Score</li>
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
							<div class="col-md-4 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-5 col-form-label">School Year:</label>
									<div class="col-sm-12 col-md-7">
										<select class="form-control">
											<option>2010-2011</option>
											<option>2011-2012</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-5 col-form-label">Semister:</label>
									<div class="col-sm-12 col-md-7">
										<select class="form-control">
											<option>1st</option>
											<option>2nd</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-5 col-form-label">Quarter:</label>
									<div class="col-sm-12 col-md-7">
										<select class="form-control">
											<option>1st</option>
											<option>2nd</option>
											<option>3rd</option>
											<option>4th</option>
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
					
							<div class="tab">
								<ul class="nav nav-pills justify-content-end" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home6" role="tab" aria-selected="true">Written Work</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile6" role="tab" aria-selected="false">Performance Task</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact6" role="tab" aria-selected="false">Quarterly Assessment</a>
									</li>
								</ul>
								<div class="tab-content" style="border-style: ridge; border-color: skyblue; margin-top: -3px;">
									<div class="tab-pane fade show active" id="home6" role="tabpanel">
										<div class="pd-20">
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Name of Student:</label>
												<div class="col-sm-12 col-md-9">
													<select class="form-control">
														<option>Daniel Padilla</option>
														<option>Kathryn Bernardo</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Date:</label>
												<div class="col-sm-12 col-md-9">
													<input type="date" name="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Highest Score:</label>
												<div class="col-sm-12 col-md-9">
													<input type="" name="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Student Score:</label>
												<div class="col-sm-12 col-md-9">
													<input type="" name="" class="form-control">
												</div>
											</div>
											<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
												<button class="btn btn-secondary" type="submit">Cancel</button>
												<button class="btn btn-primary" type="submit">Save</button>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="profile6" role="tabpanel">
										<div class="pd-20">
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Name of Student:</label>
												<div class="col-sm-12 col-md-9">
													<select class="form-control">
														<option>Daniel Padilla</option>
														<option>Kathryn Bernardo</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Date:</label>
												<div class="col-sm-12 col-md-9">
													<input type="date" name="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Highest Score:</label>
												<div class="col-sm-12 col-md-9">
													<input type="" name="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Student Score:</label>
												<div class="col-sm-12 col-md-9">
													<input type="" name="" class="form-control">
												</div>
											</div>
											<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
												<button class="btn btn-secondary" type="submit">Cancel</button>
												<button class="btn btn-primary" type="submit">Save</button>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="contact6" role="tabpanel">
										<div class="pd-20">
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Name of Student:</label>
												<div class="col-sm-12 col-md-9">
													<select class="form-control">
														<option>Daniel Padilla</option>
														<option>Kathryn Bernardo</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Date:</label>
												<div class="col-sm-12 col-md-9">
													<input type="date" name="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Highest Score:</label>
												<div class="col-sm-12 col-md-9">
													<input type="" name="" class="form-control">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label">Student Score:</label>
												<div class="col-sm-12 col-md-9">
													<input type="" name="" class="form-control">
												</div>
											</div>
											<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
												<button class="btn btn-secondary" type="submit">Cancel</button>
												<button class="btn btn-primary" type="submit">Save</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>