	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header noprint">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Student Schedule</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="<?php echo base_url("guidance/student");?>">
											<i class="fa fa-arrow-left" aria-hidden="true"></i>
											Back
										</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page"><b>Student Schedule List</b></li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<button type="button" class="btn btn-primary" onclick="window.print()">
								<i class="fa fa-print" aria-hidden="true"></i>
								Print Schedule
							</button>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow noBorderPrint">
							<table style="margin-bottom:10px">
								<tbody>
									<tr>
										<td><b>School Year & Semester:</b></td>
										<td></td>
									</tr>
									<tr>
										<td><b>Strand:</b></td>
										<td></td>
									</tr>
									<tr>
										<td><b>Grade & Section:</b></td>
										<td></td>
									</tr>
									<tr>
										<td><b>Adviser:</b></td>
										<td></td>
									</tr>
								</tbody>
							</table>

							<table class="table table-bordered stripe hover">
								<thead>
									<tr>
										<th>Subject</th>
										<th>Teacher</th>
										<th>Day</th>
										<th>Time Start</th>
										<th>Time End</th>
									</tr>
								</thead>

								<tbody>
									<?php foreach( $schedules as $sched ) { ?> 
										<tr>
											<td><?php echo $sched['subjectDesc'] ?></td>
											<td><?php echo $sched['lastname'] . ', ' . $sched['firstname'] . ' ' . $sched['middlename'] ?></td>
											<td><?php echo $sched['classDay'] ?></td>
											<td><?php echo $sched['classStartTime'] ?></td>
											<td><?php echo $sched['classEndTime'] ?></td>
										</tr>
									<?php } ?>
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
			</div>

<?php 
	$this->load->view( 'guidance/Modals/ClassManager/Schedules' );
	$this->load->view( 'guidance/Modals/ClassManager/AddClassForm' );
	$this->load->view( 'guidance/Modals/ClassManager/ImportStudents' );
?>