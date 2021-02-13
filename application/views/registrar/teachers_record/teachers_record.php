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
    font-size: 15px;
    width: 1000px;
    height: 35px;
    text-align: center;
	}
	td{
		font-family: 
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
		font-size: 14px;
	}
	.row{
		font-family: sans-serif;
		font-size: 14px;
	}
	.input-field{
		width: 27px;
		height: 45px;
		border-color: transparent;
		
	}

</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Pending Records</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("registrar/teachers_record/view_teachers");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Pending Teachers</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<table class="table-color" style="margin-right: 5px;">
								<thead>
									<tr>
										<th>Name</th>
										<th>Grade</th>
										<th>Section</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Enrique Gil</td>
										<td>11</td>
										<td>A</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>