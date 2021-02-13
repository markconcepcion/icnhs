
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
		text-align: center;
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
								<h4>Student's Attendance</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("student/student_class/my_class");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Student's Attendance</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 14px;">Subject:</span>
									<input type="text" value="Math" readonly="" style=" font-size: 14px;">
								</li>
								<li>
									<span style="font-size: 14px;">Teacher:</span>
									<input type="text" value="Catriona Grey" readonly="" style=" font-size: 14px;">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 14px;">SchoolYear:</span>
									<input type="text" value="2020-2021" readonly="" style=" font-size: 14px;">
								</li>
								<li>
									<span style="font-size: 14px;">Grade:</span>
									<input type="text" value="11" readonly="" style=" font-size: 14px;">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 14px;">Month:</span>
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



		<div class="modal fade" id="Large-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Warning Address</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-sm-12 col-md-5 col-form-label" style="font-weight: bold;">From Teacher:</label>
												<div class="col-sm-12 col-md-7">
													<input type="" class="form-control" value="Catriona Grey" readonly="" name="" style="background: transparent;">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold;">Message:</label>
												<div class="col-sm-12 col-md-9">
													<textarea class="form-control" readonly="" style="background: transparent;;"> You've been absent for 3 days, do you still want to continue your studies? If not, gakalaskalas lang kag kwarta doh!</textarea>
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
        