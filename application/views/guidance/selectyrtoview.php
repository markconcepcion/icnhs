
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Students' List</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/selectyrtoview1");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Students' List</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<table class="data-table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus">Name</th>
										<th>Gender</th>
										<th>Grade Level</th>
										<th class="datatable-nosort"></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach( $students as $stud ) { ?>
										<tr>
											<td class="table-plus"><?php echo $stud['firstname'] ?></td>
											<td width="10%"><?php echo $stud['gender'] ?></td>
											<td width="10%">Grade 11</td>
											<td width="25%">
												<a class="btn btn-info" href="<?php echo base_url("guidance/student/schedulelist/" . $stud['IDstudent'] );?>" role="button" style="margin-right: 5px; ">
													<i class="fa fa-list" aria-hidden="true"></i> Schedules
												</a>
												<a class="btn btn-primary" href="<?php echo base_url("guidance/student/profile/" . $stud['IDstudent'] );?>" role="button" style="margin-right: 5px; ">
													<i class="fa fa-info-circle" aria-hidden="true"></i> Details
												</a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>