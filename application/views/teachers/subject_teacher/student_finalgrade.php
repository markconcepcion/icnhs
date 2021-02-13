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
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 10px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>View Grade</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/view_mystudentgrade");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Grade(by Subject)</li>
								</ol>
							</nav>
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
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	