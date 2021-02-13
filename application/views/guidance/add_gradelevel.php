
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Grade Level Information</h4>
							</div>
						</div>
					</div>
				</div>

				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">	
					<div class="row">
						<div class="col-md-5 col-sm-12 pd-20 bg-white border-radius-4 box-shadow mb-30" style="border-style: ridge; margin-top: -12px;">
					<form>
						<div class="clearfix">
							<div class="text-center" style="color: aquamarine; letter-spacing: 5px;">
								<h4 class="text-green">Add Grade Level</h4>
							</div>
						</div>
						<div class="form-group row" style="margin-top: 10px;">
							<label class="col-sm-12 col-md-3 col-form-label">STRAND:</label>
							<div class="col-sm-12 col-md-9">
								<select class="form-control">
									<option>STEM</option>
									<option>GAS</option>
									<option>TVL</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 col-sm-12">
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
							<div class="col-md-7 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-3 col-form-label">Section:</label>
									<div class="col-sm-12 col-md-9">
										<input type="" name="" class="form-control">
									</div>
								</div>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-3 col-form-label">Adviser:</label>
							<div class="col-sm-12 col-md-9">
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
								<button class="btn btn-secondary" type="submit">Cancel</button>
								<button class="btn btn-primary" type="submit">Save</button>
							</div>
					</form>
					</div>	
					<div class="col-md-7 col-sm-12">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue">List of Grade Levels</h4>
							</div>
						</div>
						<div class="row" style="margin-top: 10px;">
							<div class="col-md-10 col-sm-12">
								<div class="form-group row">
									<label class="col-sm-12 col-md-3 col-form-label">STRAND:</label>
									<div class="col-sm-12 col-md-9">
										<select class="form-control">
											<option>STEM</option>
											<option>GAS</option>
											<option>TVL</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="form-group row">
									<button class="btn btn-primary" data-toggle="modal" data-target="#Medium-modal" type="button">View</button>
								</div>
							</div>	
						</div>
					
						<div class="row">
						<table class="table table-bordered" style="margin-left: 10px;">
							<thead>
								<tr>
									<th>Grade</th>
									<th>Section</th>
									<th>Adviser</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>11</td>
									<td>A</td>
									<td>Alden Richard</td>
									<td>
										<button class="btn btn-info" data-toggle="modal" data-target="#Medium-modal" type="button">Edit</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					</div>	
					</div>
					
				</div>
				<!-- Form grid End -->
			</div>

							<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title text-green" id="myLargeModalLabel" style="letter-spacing: 5px; align-content: center;">Edit Grade Level</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<form>
											<div class="modal-body">
												<div class="form-group row">
													<label class="col-sm-12 col-md-3 col-form-label">STRAND:</label>
													<div class="col-sm-12 col-md-9">
														<select class="form-control">
															<option>STEM</option>
															<option>GAS</option>
															<option>TVL</option>
														</select>
													</div>
												</div>
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
															<label class="col-sm-12 col-md-4 col-form-label">Section:</label>
															<div class="col-sm-12 col-md-8">
																<input type="" class="form-control" name="">
															</div>
														</div>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-sm-12 col-md-3 col-form-label">Adviser:</label>
													<div class="col-sm-12 col-md-9">
														<input type="text" class="form-control" name="">
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
							</div>