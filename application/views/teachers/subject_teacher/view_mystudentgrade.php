
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>View Grade</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/teacher");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Grade(by Subject)</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">	
			
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="text-align:center">Subject</th>
							<th style="text-align:center">Schedule</th>
							<th style="text-align:center">Grade Level</th>
							<th style="text-align:center">Section</th>
							<th style="text-align:center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td style="text-align:center">Math</td>
							<td style="text-align:center">Mon 10:00-11:00am</td>
							<td style="text-align:center">11</td>
							<td style="text-align:center">A</td>
							<td style="text-align:center">
								<div class="dropdown">
											<a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-eye"> View</i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/student_finalgrade");?>"> Semister 1</a>
				                            <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/student_finalgrade");?>">Semister 2</a>
											</div>
										</div>	
							</td>
						</tr>
						</tr>
					</tbody>
				</table>
				</div>
			</div>

