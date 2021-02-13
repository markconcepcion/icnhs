
<style type="text/css">
	div.img img {
	    width: 54%;
	    height: auto;
	}
	.title-header{
		font-weight: bold; 
		font-size: 20px; 
		text-align: center;
		font-family: sans-serif;
	}
	.subheader{
		text-align: center;
		font-family: sans-serif;
		font-size: 13px;
		margin-top: -20px;
		font-style: italic;
	}
	.text-field{
		background: transparent;
		border: 0px;
		border-bottom: 1px solid black;
		padding-left: 15px;
	}
	
	.table-color, th, td {
    border: 1px solid #4d4d4d;
    font-size: 13px;
	}
	th{
		width: 50px;
	}
	
	@media print
	{
	.noprint {display:none;}
	}

	@media screen
	{
	...
	}
</style>

	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header noprint">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Students' Score</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/my_class");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Score(by Quarter)</li>
								</ol>
							</nav>
							<div class="btn-list right" style="margin-top: -15px;">
								<a class="btn" href="<?php echo base_url("teacher/subjectteacher/mark_attendance");?>" role="button" style="color: white; background: #00ace6;"><i class="fa fa-plus"></i>Attendance</a>
								<a class="btn" href="<?php echo base_url("teacher/subjectteacher/view_attendance");?>" role="button" style="color: white; background: #00cc7a;" onclick="window.print()"><i class="fa fa-print"></i>Attendance</a>
								<button class="btn" data-toggle="modal" data-target="#Medium-modal" type="button" style="background: #ffa64d; color: white"><i class="icon-copy ion-paper-airplane"></i>Attendance</button>
							</div>	
						</div>
					</div>
				</div>
        
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row">
						<div class="col-md-2 img">
							<img src="<?php echo base_url("vendors/images/icnhs.png");?>">
						</div>
						<div class="col-md-8">
							<p class="title-header">School Form 2 (SF2) Daily Attendance Report of Learners</p>
							<p class="subheader">(This replaces Form 1, Form 2 & STS Form 4 - Absenteeism and Dropout Profile)</p>	
						</div>
						<div class="col-md-2">
							<img src="<?php echo base_url("vendors/images/inchs2.png");?>">
						</div>	
					</div>
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 13px;">School ID:</span>
									<input type="text" value="304145" readonly="" style=" font-size: 14px;">
								</li>
								<li>
									<span style="font-size: 13px;">Name of School:</span>
									<input type="text" value="ICNHS-Senior High School" readonly="" style=" font-size: 14px;">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 13px;">SchoolYear:</span>
									<input type="text" value="2020-2021" readonly="" style=" font-size: 14px;">
								</li>
								<li>
									<span style="font-size: 13px;">Grade:</span>
									<input type="text" value="11" readonly="" style=" font-size: 14px;">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 13px;">Month:</span>
									<select style="height: 30px; width: 200px; border-color: skyblue;  font-size: 14px;">
										<option>January</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
									</select>
									
								</li>
								<li>
									<span style="font-size: 14px;">Section:</span>
									<input type="text" value="Mahogany" readonly="" style=" font-size: 14px;">
								</li>
							</ul>
						</div>
					</div>
					<table class="table-color">
							<thead>
								<tr>
									<th rowspan="3">LEARNER'S NAME</th>
									<th colspan="5">Week 1</th>
									<th colspan="5">Week 2</th>
									<th colspan="5">Week 3</th>
									<th colspan="5">Week 4</th>
									<th colspan="5">Week 5</th>
									<th colspan="2">Total for the month</th>
									<th rowspan="3">Remarks</th>
									<th rowspan="3" class="noprint">Action</th>
								</tr>
								<tr>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>ABSENT</th>
									<th>TARDY</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Jessa Dalida</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>/</td>
									<td>3</td>
									<td>2</td>
									<td>Remarks</td>
									<td><button class="btn btn-warning noprint" data-toggle="modal" data-target="#Large-modal" type="button" style="font-size: 13px;">Address</button></td>
								</tr>

							</tbody>
						</table>	
				</div>
			</div>

			
		</div>

							<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel"> Submit Class Record</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-sm-12 col-md-5 col-form-label" style="font-weight: bold;">Name of Registrar:</label>
												<div class="col-sm-12 col-md-7">
													<select class="form-control">
														<option>Daniel Padilla</option>
														<option>James Reid</option>
														<option>Nadine Lustre</option>
													</select>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</div>
							</div>

							<div class="modal fade" id="Large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel"> Send Warning Address</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-sm-12 col-md-5 col-form-label" style="font-weight: bold;">Name of Student:</label>
												<div class="col-sm-12 col-md-7">
													<select class="form-control">
														<option>Daniel Padilla</option>
														<option>James Reid</option>
														<option>Nadine Lustre</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;">Message:</label>
												<div class="col-sm-12 col-md-9">
													<textarea class="form-control"></textarea>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Submit</button>
										</div>
									</div>
								</div>
							</div>		
        
			