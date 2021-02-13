
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>View Students Grade</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/teacher");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Students Grade</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">	
				<h4 style="color: #007a99; margin-bottom: 5px; font-weight: bold;">My Students</h4>	
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Subject</th>
							<th>Day&Time</th>
							<th>Strand</th>
							<th>Grade</th>
							<th>Section</th>
							<th>Select Semester</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Math</td>
							<td>Mon 10:00-11:00am</td>
							<td>STEM</td>
							<td>11</td>
							<td>A</td>
							<td>
								<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
										<i class="fa fa-ellipsis-h"> Semester</i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_grade");?>">1st Semister</a>
										<a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_grade");?>">2nd Semister</a>
									</div>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>

