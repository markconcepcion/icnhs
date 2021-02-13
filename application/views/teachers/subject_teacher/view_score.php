<style type="text/css">
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
								<h4>Students' Class Record</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/view_scorebytype");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Class Record(by Quarter)</li>
								</ol>
							</nav>
							<div class="btn-list right" style="margin-top: -15px;">
								<a class="btn" href="<?php echo base_url("teacher/subjectteacher/view_score");?>" role="button" style="color: white; background: #00cc7a;" onclick="window.print()"><i class="fa fa-print"></i> Class Record</a>
								<button class="btn" data-toggle="modal" data-target="#Medium-modal" type="button" style="background: #ffa64d; color: white"><i class="icon-copy ion-paper-airplane"></i>Class Record</button>
							</div>	
						</div>
					</div>
				</div>
        
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" >
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 13px;">School Year:</span>
									<input type="text" value="2020-2021" class="text-field" readonly="">
								</li>
								
								<li>
									<span style="font-size: 14px;">Subject:</span>
									<input type="text" value="Math" class="text-field" readonly="">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 14px;">Semester:</span>
									<input type="text" value="1" class="text-field" readonly="">
								</li>
								<li>
									<span style="font-size: 14px;">Grade:</span>
									<input type="text" value="11" class="text-field" readonly="">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 14px;">Strand:</span>
									<input type="text" value="STEM" class="text-field" readonly="">
									
								</li>
								<li>
									<span style="font-size: 15px;">Section:</span>
									<input type="text" value="Mahogany" class="text-field" readonly="">
								</li>
							</ul>
						</div>
					</div>
					<div class="row" style="margin-right: 5px; margin-left: 5px; margin-bottom: 20px;">
						<table class="table-color">
							<thead>
								<tr style="text-align: center;">
									<th rowspan="3">LEARNER'S NAME</th>
									<th colspan="8">Written Work (25%)</th>
									<th colspan="8">Performance Task(50%)</th>
									<th colspan="3">Quarterly Assessment(25%)</th>
									<th rowspan="3">Initial Grade</th>
									<th rowspan="3">Quarter Grade</th>
								</tr>
								<tr>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>Total</th>
									<th>PS</th>
									<th>WS</th>
									<th>1</th>
									<th>2</th>
									<th>3</th>
									<th>4</th>
									<th>5</th>
									<th>Total</th>
									<th>PS</th>
									<th>WS</th>
									<th>PT</th>
									<th>PS</th>
									<th>WS</th>
									
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Jessa Dalida</td>
									<td>10/10</td>
									<td>10/10</td>
									<td>10/10</td>
									<td>10/10</td>
									<td>10/10</td>
									<td>100</td>
									<td>100.0</td>
									<td>25%</td>
									<td>10/10</td>
									<td>10/10</td>
									<td>10/10</td>
									<td>10/10</td>
									<td>10/10</td>
									<td>100</td>
									<td>100.0</td>
									<td>50%</td>
									<td>50</td>
									<td>100.0</td>
									<td>25%</td>
									<td>100</td>
									<td>100</td>
								</tr>

							</tbody>
					</table>	
					</div>
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

