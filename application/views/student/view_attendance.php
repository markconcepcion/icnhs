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
	.table-color, th, td {
    border: 1px solid #4d4d4d;
	}
	th{
		width: 50px;
	}

</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>My Attendance</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/student");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Attendance</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<!-- Form grid Start -->
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
									<span style="font-size: 15px;">School ID:</span>
									<input type="text" value="304145" readonly="">
								</li>
								<li>
									<span style="font-size: 15px;">Name of School:</span>
									<input type="text" value="ICNHS-Senior High School" readonly="">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">SchoolYear:</span>
									<input type="text" value="2020-2021" readonly="">
								</li>
								<li>
									<span style="font-size: 15px;">Grade:</span>
									<input type="text" value="11" readonly="">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">Month:</span>
									<select style="height: 30px; width: 200px; border-color: skyblue;">
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
									<span style="font-size: 15px;">Section:</span>
									<input type="text" value="Mahogany" readonly="">
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
								</tr>

							</tbody>
						</table>	
				</div>
			</div>

