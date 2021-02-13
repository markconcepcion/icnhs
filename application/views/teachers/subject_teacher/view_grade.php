<style type="text/css">
	.text-field{
		background: transparent;
		border: 0px;
		border-bottom: 1px solid black;
		padding-left: 15px;
	}
	th, td{
    border: 1px solid #4d4d4d;
    padding-left: 10px;
	}
	th{
		width: 300px;
		height: 20px;
		text-align: center;
	}
	td{
		height: 33px;
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
								<h4>Students' Grade</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/my_class");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Grade(by Semester)</li>
								</ol>
							</nav>
							<div class="btn-list right" style="margin-top: -15px;">
								<a class="btn" href="<?php echo base_url("teacher/subjectteacher/view_grade");?>" role="button" style="color: white; background: #00cc7a;" onclick="window.print()"><i class="fa fa-print"></i>
											Print Grade</a>
								<button class="btn" data-toggle="modal" data-target="#Medium-modal" type="button" style="background: #ffa64d; color: white"><i class="icon-copy ion-paper-airplane"></i>Submit Grade</button>
							</div>	
						</div>
					</div>
				</div>
        
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" >
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">SchoolYear:</span>
									<input type="text" value="2020-2021" class="text-field" readonly="">
								</li>
								
								<li>
									<span style="font-size: 15px;">Subject:</span>
									<input type="text" value="Math" class="text-field" readonly="">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">Semester:</span>
									<input type="text" value="1" class="text-field" readonly="">
								</li>
								<li>
									<span style="font-size: 15px;">Grade:</span>
									<input type="text" value="11" class="text-field" readonly="">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">Strand:</span>
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
						<table>
							<thead>
								<tr>
									<th rowspan="3">Learner's Name</th>
									<th colspan="2">Quarter Grade</th>
									<th rowspan="3">Final Grade</th>
									<th rowspan="3">Remarks</th>
								</tr>
								<tr>
									<th>1</th>
									<th>2</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Kath Bernardo</td>
									<td style="text-align: center;">88</td>
									<td style="text-align: center;">88</td>
									<td style="text-align: center;">88</td>
									<td style="text-align: center;">Passed</td>
								</tr>
								<tr>
									<td>Daniel Padilla</td>
									<td style="text-align: center;">88</td>
									<td style="text-align: center;">88</td>
									<td style="text-align: center;">88</td>
									<td style="text-align: center;">Passed</td>
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
											<h4 class="modal-title" id="myLargeModalLabel"> Submit Grade</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="form-group row">
												<label class="col-sm-12 col-md-4 col-form-label" style="font-weight: bold;">Name of Adviser:</label>
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
