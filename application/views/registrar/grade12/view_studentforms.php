<style type="text/css">
	.text-field{
		background: transparent;
		border: 0px;
		border-bottom: 1px solid black;
		padding-left: 15px;
	}
	
	.table-color, th, td {
    border: 1px solid #4d4d4d;
    width: 1000px;
	}
	th{
		
		text-align: center;
		
	}
	td{
		font-size: 15px;
		text-align: center;
		height: 45px;
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
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Grade-12/A Form 138</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("registrar/view_reports/grade12_reports");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Form 138</li>
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
									<span style="font-size: 16px;">School Year:</span>
									<input type="text" value="2020-2021" class="text-field" readonly="">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 16px;">Semester:</span>
									<input type="text" value="1st" class="text-field" readonly="">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 16px;">Strand:</span>
									<input type="text" value="STEM" class="text-field" readonly="">
								</li>
							</ul>
						</div>		
					</div>
					<table class="table-color" style="margin-bottom: 20px;">
						<thead>
							<tr>
								<th>LRN</th>
								<th>Name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>10909832458</td>
								<td>Enrique Gil</td>
								<td>
									<a class="btn btn-success" href="<?php echo base_url("registrar/view_reports/grade12_form138");?>" role="button" style="margin-right: 5px; background:">
											View Form 138</a>
									<a class="btn btn-primary" href="<?php echo base_url("registrar/view_reports/grade12_form137");?>" role="button" style="margin-right: 5px; background:">
											View Form 137</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- Simple Datatable End -->
			</div>
			
