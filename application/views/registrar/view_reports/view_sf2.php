
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
    font-size: 14px;
    font-family: sans-serif;
	}
	th{
		width: 100px;
	}
	
	@media print
	{
	.noprint {display:none;}
	}

	@media screen
	{
	...
	}
	p{
		font-family: sans-serif;
	}
	label{
		font-family: sans-serif;
		font-size: 14px;
	}
	.input-field{
		width: 100%; 
		font-family: sans-serif; 
		font-size: 14px;
	}
	.p-margin{
		margin-top: -10px;
	}
</style>



<!DOCTYPE html>
<html>
<head>
		<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp Dashboard</title>

	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url("vendors/styles/style.css");?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header noprint">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Grade-12/A School Form 2</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("registrar/View_reports/grade11_reports");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View SF2</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row">
						<div class="col-md-2 img">
							<img src="<?php echo base_url("vendors/images/icnhs.png");?>" style="margin-left: 100px;">
						</div>
						<div class="col-md-8">
							<p style="font-size: 20px; font-weight: bold; text-align: center;">School Form 2 (SF2) Daily Attendance Report of Learners</p>
							<p style="font-size: 12px; text-align: center; margin-top: -20px; font-style: italic;">(This replaces Form 1, Form 2 & STS Form 4 - Absenteeism and Dropout Profile)</p>	
						</div>
						<div class="col-md-2">
							<img src="<?php echo base_url("vendors/images/inchs2.png");?>" style="margin-left: -50px;">
						</div>	
					</div>
					<div class="row" style="margin-bottom: 20px; margin-top: 10px;">
						<div class="col-md-5">
							<div class="row">
								<div class="col-md-4">
									<label>School ID:</label>
								</div>
								<div class="col-md-8">
									<input type="" value="304145" name="" class="input-field">
								</div>
							</div>
							<div class="row" style="margin-top: 5px;">
								<div class="col-md-4">
									<label>Name of School:</label>
								</div>
								<div class="col-md-8">
									<input type="" value="ICNHS-Senior High School" name="" class="input-field">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-5">
									<label>School Year:</label>
								</div>
								<div class="col-md-7">
									<input type="" value="2021-2022" name="" class="input-field">
								</div>
							</div>
							<div class="row" style="margin-top: 5px;">
								<div class="col-md-5">
									<label>Grade:</label>
								</div>
								<div class="col-md-7">
									<input type="" value="12" name="" class="input-field">
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-4">
									<label>Month:</label>
								</div>
								<div class="col-md-8">
									<select style="height: 26px;" class="input-field">
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
								</div>
							</div>
							<div class="row" style="margin-top: 5px;">
								<div class="col-md-4">
									<label>Section:</label>
								</div>
								<div class="col-md-8">
									<input type="" value="Mahogany" name="" class="input-field">
								</div>
							</div>
						</div>
					</div>
					<table class="table-color">
							<thead style="text-align: center;">
								<tr>
									<th rowspan="3" style="width: 20%;">LEARNER'S NAME (Last Name, First Name, Middle Name)</th>
									<th colspan="5" style="width: 10%;">Week 1</th>
									<th colspan="5" style="width: 10%;">Week 2</th>
									<th colspan="5" style="width: 10%;">Week 3</th>
									<th colspan="5" style="width: 10%;">Week 4</th>
									<th colspan="5" style="width: 10%;">Week 5</th>
									<th colspan="2" style="width: 10%;">Total for the month</th>
									<th rowspan="3" style="width: 20%;">REMARKS<span style="font-weight: normal;"> (If </span>DROPPED OUT<span style="font-weight: normal;">, state reason, please refer to legend number 2. If </span>TRANSFERRED IN/OUT<span style="font-weight: normal;">, write the name of School.)</span></th>
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
									<td>1</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>2</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>3</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>5</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>6</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>7</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>

								<tr>
									<td>8</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>9</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>10</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>11</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>12</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>13</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>14</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>15</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align: right; font-size: 12px;">Male Total per Day</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td style="font-size: 12px;">Male Average Daily Attendance</td>
								</tr>
								<tr>
									<td>1</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>2</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>3</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>5</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>6</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>7</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>4</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>

								<tr>
									<td>8</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>9</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>10</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>11</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>12</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>13</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>14</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td>15</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
								<tr>
									<td style="text-align: right; font-size: 12px;">Female Total per Day</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td style="font-size: 12px;">Female Average Daily Attendance</td>
								</tr>
								<tr>
									<td style="text-align: right; font-size: 12px;">Combine TOTAL PER DAY</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>0</td>
									<td>0</td>
									<td></td>
								</tr>
							</tbody>
					</table>
					<div class="row" style="font-size: 11px; margin-top: 5px;">
						<div class="col-md-5">
							<p style="font-weight: bold;">GUIDELINES:</p>
							<p>1. The attendance shall be accomplished daily. Refer to the codes for checking learners' attendance.</p>
							<p class="p-margin">2. Dates shall be written in the columns after Learner's Name.</p>
							<p class="p-margin">3. To compute the following:</p>
							<div class="row">
								<div class="col-md-6" style="font-style: italic; font-size: 11px;">
									<p >a. Percentage of Enrolment =</p>
									<p>b. Average Daily Attendance = </p>
									<p>c. Percentage of Attendance for the month =</p>
								</div>
								<div class="col-md-6" style="font-size: 10px; margin-top: -5px;">
									<div class="row" style="margin-left: -75px; text-align: center;">
										<div class="col-md-10">
											<p>Registered Learners as of end of the month</p>
											<hr style="border-color: black; margin-top: -15px;">
											<p style=" margin-top: -17px;">Enrolment as of 1st Friday of the school year</p>
										</div>
										<div class="col-md-2">
											<p style="margin-left: -30px; margin-top: 5px;">X 100</p>
										</div>
									</div>
									<div class="row" style="margin-top: -15px; text-align: center; margin-left: -75px;">
										<div class="col-md-10">
											<p>Total Daily Attendance</p>
											<hr style="border-color: black; margin-top: -15px;"> 
											<p style=" margin-top: -17px;">Number of School Days in reporting month</p>
										</div>
										<div class="col-md-2">
											
										</div>
									</div>
									<div class="row" style="margin-top: -10px; text-align: center; margin-left: -50px;">
										<div class="col-md-10">
											<p>Average daily attendance</p>
											<hr style="border-color: black; margin-top: -15px;">
											<p style=" margin-top: -17px;margin-left: -14	px;">Registered Learners as of end of the month</p>
										</div>
										<div class="col-md-2">
											<p style="margin-left: -20px; margin-top: 5px;">X 100</p>
										</div>
									</div>
								</div>
							</div>
							<p class="p-margin">4. Every end of the month, the class adviser will submit this form to the office of the principal for recording of summary table into School Form 4. Once signed by the principal, this form should be returned to the adviser.</p>
							<p class="p-margin">5. The adviser will provide neccessary interventions including but not limited to home visitation to learner/s who were absent for 5 consecutive days and/or those at risk of dropping out.</p>
							<p class="p-margin">6.Attendance performance of learners will be reflected in Form 137 and Form 138 every grading period.</p>
							<p style="margin-left: 10px;" class="p-margin">Beginning of School Year cut-off report is every 1st Friday of the School Year</p>
						</div>
						<div class="col-md-3" style="border: solid 1px black; font-size: 11px;">
							<p style="margin-left: -10px;">1.CODES FOR CHECKING ATTENDANCE</p>
							<p style="margin-top: -13px; text-align: justify;">(blank) - Present; (x) - Absent; Tardy (half shaded- Upper for Late Commer, Lower for Cutting Classes)</p>
							<p style="margin-left: -10px; margin-top: -13px;">2.REASONS/CAUSES FOR DROPPING OUT</p>
							<p style="margin-left: -10px; margin-top: -13px;">a.Domestic-Related Factors</p>
							<p style="margin-left: -10px; margin-top: -13px;">a.1.Had to take care of siblings</p>
							<p style="margin-left: -10px; margin-top: -13px;">a.2.Early marriage/pregnancy</p>
							<p style="margin-left: -10px; margin-top: -13px;">a.3.Parent's attitude toward schooling</p>
							<p style="margin-left: -10px; margin-top: -13px;">a.4.Family problems</p>
							<p style="margin-left: -10px; margin-top: -13px;">b.Individual-Related Factors</p>
							<p style="margin-left: -10px; margin-top: -13px;">b.1.Illness</p>
							<p style="margin-left: -10px; margin-top: -13px;">b.2.Overage</p>
							<p style="margin-left: -10px; margin-top: -13px;">b.3.Death</p>
							<p style="margin-left: -10px; margin-top: -13px;">b.4.Drug Abuse</p>
							<p style="margin-left: -10px; margin-top: -13px;">b.5.Poor academic performance</p>
							<p style="margin-left: -10px; margin-top: -13px;">b.6.Lack of interest/Distraction</p>
							<p style="margin-left: -10px; margin-top: -13px;">b.7.Hunger/malnutrition</p>
							<p style="margin-left: -10px; margin-top: -13px;">c. School-Related Factors</p>
							<p style="margin-left: -10px; margin-top: -13px;">c.1.Teacher Factors</p>
							<p style="margin-left: -10px; margin-top: -13px;">c.2.Physical condition of classroom</p>
							<p style="margin-left: -10px; margin-top: -13px;">c.3.Peer influence</p>
							<p style="margin-left: -10px; margin-top: -13px;">d. Geographical/Environmental</p>
							<p style="margin-left: -10px; margin-top: -13px;">d.1.Distance between home and school</p>
							<p style="margin-left: -10px; margin-top: -13px;">d.2.Armed conflict(incl. Tribal wars & clanfeuds)</p>
							<p style="margin-left: -10px; margin-top: -13px;">d.3.Calamities/Disasters</p>
							<p style="margin-left: -10px; margin-top: -13px;">e.Financial-Related</p>
							<p style="margin-left: -10px; margin-top: -13px;">e.1. Child labor, work</p>
							<p style="margin-left: -10px; margin-top: -13px;">f. Others (Specify)</p>

						</div>
						<div class="col-md-4">
							<table class="table-color" style="text-align: center;">
								<thead>
									<tr>
										<th rowspan="2" style="width: 55%; font-size: 12px;">
											<div class="row" style="margin-top: 10px; text-align: center;">
												<div class="col-md-4">
													<p>Moth: May</p>
												</div>
												<div class="col-md-8" style="font-weight: bold;">
													<p>No. of Days of Classes:</p>
												</div>
											</div>
										</th>
										<th colspan="3" style="width: 45%; font-size: 12px;">Summary</th>
									</tr>
									<tr>
										<th style="font-size: 11px;">M</th>
										<th style="font-size: 11px;">F</th>
										<th style="font-size: 11px;">TOTAL</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="font-size: 11px; height: 35px;">* Enrolment  as of  (1st Friday of June)</td>
										<td style="font-size: 11px;"></td>
										<td style="font-size: 11px;"></td>
										<td style="font-size: 11px;">0</td>
									</tr>
									<tr>
										<td style="font-size: 11px; height: 35px;">Late Enrollment during the month</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
									</tr>
									<tr>
										<td style="font-size: 11px; height: 35px;">Registered Learners as of end of the month</td>
										<td style="font-size: 11px;"></td>
										<td style="font-size: 11px;"></td>
										<td style="font-size: 11px;">0</td>
									</tr>
									<tr>
										<td style="font-size: 11px; height: 35px;">Average Daily Attendance</td>
										<td style="font-size: 11px;"></td>
										<td style="font-size: 11px;"></td>
										<td style="font-size: 11px;">0</td>
									</tr>
									<tr>
										<td style="font-size: 11px; height: 35px;">Percentage of Attendance for the month </td>
										<td style="font-size: 11px;"></td>
										<td style="font-size: 11px;"></td>
										<td style="font-size: 11px;">0</td>
									</tr>
									<tr>
										<td style="font-size: 11px; height: 35px;">Number of students absent for 5 consecutive days:</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
									</tr>
									<tr>
										<td style="font-size: 11px; height: 35px; font-weight: bold;">Drop out</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
									</tr>
									<tr>
										<td style="font-size: 11px; height: 35px;font-weight: bold;">Transferred out</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
									</tr>
									<tr>
										<td style="font-size: 11px; height: 35px;">Transferred in</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
										<td style="font-size: 11px;">0</td>
									</tr>
								</tbody>
							</table>
							<p style="font-style: italic; font-size: 11px; margin-top: 5px;">I certify that this is a true and correct report.</p>
							<div style="text-align: center;">
								<p>JAYFFER G. REGIS</p>
								<hr style="border-color: black; margin-top: -15px; width: 80%; margin-left: 30px;">
								<p style="margin-top: -18px;"> (Signature of Teacher over Printed Name)</p>
								<p style="text-align: left;">Attested by:</p>
								<p>JOSE E. SALVADOR, Ph.D.</p>
								<hr style="border-color: black; margin-top: -15px; width: 80%; margin-left: 30px;">
								<p style="margin-top: -18px;"> (Signature of School Head over Printed Name)</p>	
							</div>
							
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>
		<!-- js -->
	<script src="vendors/scripts/script.js"></script></body>
</html>
