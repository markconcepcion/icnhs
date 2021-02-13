<style type="text/css">
	.text-field{
		background: transparent;
		border: 0px;
		border-bottom: 1px solid black;
		padding-left: 15px;
	}
	
	.table-color, th, td {
    border: 1px solid #4d4d4d;
	}
	th{
		width: 50px;
		text-align: center;
		
	}
	td{
		font-size: 15px;
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
								<a class="btn" href="<?php echo base_url("teacher/subjectteacher/create_score");?>" role="button" style="color: white; background: #00ace6;"><i class="fa fa-plus"></i>Score</a>
								<!-- <a class="btn" href="<?php echo base_url("teacher/subjectteacher/view_scorebytype");?>" role="button" style="color: white; background: #00cc7a;" onclick="window.print()"><i class="fa fa-print"></i> Class Record</a> -->
								<a class="btn" href="<?php echo base_url("teacher/subjectteacher/view_score");?>" role="button" style="background: #ffa64d; color: white"><i class="fa fa-eye"></i>Class Record</a>
							</div>	
						</div>
					</div>
				</div>
        
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" >
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 14px;">School Year:</span>
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
					<div class="form-group row noprint" style="margin-top: 10px;">
						<label class="col-sm-12 col-md-3 col-form-label" style="font-weight: bold; color: #0080ff;">Select Type of Score:</label>
						<div class="col-sm-12 col-md-7 tab" style="margin-left: -70px;">
							<ul class="nav nav-pills nav-tabs" role="tablist" style="border-bottom: 2px solid skyblue;">
									<li class="nav-item">
										<a class="nav-link active" data-toggle="tab" href="#home5" role="tab" aria-selected="true">Written Work</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#profile5" role="tab" aria-selected="false">Performance Task</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-toggle="tab" href="#contact5" role="tab" aria-selected="false">Quarterly Assessment</a>
									</li>
								</ul>
						</div>
					</div>
					<div class="tab-content" style="margin-top: -15px;">
						<div class="tab-pane fade show active" id="home5" role="tabpanel">
							<div class="pd-20">
								<div class="row">
									<table class="table-color">
										<thead>
											<tr>
												<th rowspan="3" style=" width: 200px;">Learner's Name</th>
												<th colspan="4">Long Quiz</th>
												<th colspan="4">Formal Theme</th>
												<th colspan="4">Summative</th>
												<th rowspan="3" class="noprint">Action</th>
											</tr>
											<tr style="font-size: 12px;">
												<th>10/11/2020</th>
												<th>10/12/2020</th>
												<th>11/13/2020</th>	
												<th>Total</th>
												<th>10/11/2020</th>
												<th>10/12/2020</th>
												<th>11/13/2020</th>	
												<th>Total</th>
												<th>10/11/2020</th>
												<th>10/12/2020</th>
												<th>11/13/2020</th>	
												<th>Total</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Jessa Mae Dalida</td>
												
												<td>10/10</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>100</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>100</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>100</td>
												<td>
													<a href="<?php echo base_url("teacher/subjectteacher/edit_score");?>" class=" noprint btn btn-primary" style="font-size: 13px;"><i class="fa fa-pencil"></i>Edit</a>
												</td>
											</tr>

										</tbody>
									</table>	
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="profile5" role="tabpanel">
							<div class="pd-20">
								<div class="row">
									<table class="table-color">
										<thead>
											<tr>
												<th rowspan="3" style="width: 200px;">Learner's Name</th>
												<th colspan="3">Oral</th>
												<th colspan="4">Short Quiz</th>
												<th colspan="4">Seatwork</th>
												<th colspan="3">Reporting</th>
												<th rowspan="3" class="noprint">Action</th>
											</tr>
											<tr style="font-size: 12px;">
												<th>10/11/2020</th>
												<th>02/12/2020</th>
												<th>Total</th>
												<th>10/11/2020</th>
												<th>02/12/2020</th>
												<th>10/11/2020</th>
												<th>Total</th>
												<th>10/11/2020</th>
												<th>02/12/2020</th>
												<th>10/11/2020</th>
												<th>Total</th>
												<th>10/11/2020</th>
												<th>02/12/2020</th>
												<th>Total</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Jessa Mae Dalida</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>100</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>100</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>100</td>
												<td>10/10</td>
												<td>10/10</td>
												<td>100</td>
												<td>
													<a href="<?php echo base_url("teacher/subjectteacher/edit_score");?>" class=" noprint btn btn-primary" style="font-size: 13px;"><i class="fa fa-pencil"></i>Edit</a>
												</td>
											</tr>

										</tbody>
									</table>	
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="contact5" role="tabpanel">
							<div class="pd-20">
								<div class="row">
									<table class="table-color">
										<thead>
											<tr>
												<th style="width: 300px; height: 40px;">Learner's Name</th>
												<th style="width: 300px;">Date Taken</th>
												<th style="width: 200px;">Exam Score</th>
												<th style="width: 200px;" class="noprint">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr style="height: 40px;">
												<td style="padding-left: 10px;">Jessa Mae Dalida</td>
												<td style="text-align: center;">01/11/2020</td>
												<td style="text-align: center;">100/100</td>
												<td style="text-align: center;">
												
													 <a href="<?php echo base_url("teacher/subjectteacher/edit_score");?>" class=" noprint btn btn-primary" style="font-size: 13px;"><i class="fa fa-pencil"></i>Edit</a
												</td>
											</tr>

										</tbody>
									</table>	
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>		
		</div>
