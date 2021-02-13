	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Class Details</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="<?php echo base_url("guidance_class");?>">
											<i class="fa fa-arrow-left" aria-hidden="true"></i>
											Back
										</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page"><b>Class Student List</b></li>
								</ol>
							</nav>
						</div>

						<!-- ADD STUDENT BUTTON -->
						<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-info dropdown-toggle" role="button" data-toggle="dropdown" href="#">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a role="button" href="<?php echo base_url( 'guidance/ClassManager/transferee/'.$IDclass ) ?>" class="btn dropdown-item">
										<i class="fa fa-plus" aria-hidden="true"></i>
										Transferee
									</a>
									<a role="button" href="<?php echo base_url( 'userform/parent' ) ?>" class="btn dropdown-item add-students" data-id="<?php echo $IDclass ?>" data-toggle="modal" data-target="#ImportStudents">
										<i class="fa fa-plus" aria-hidden="true"></i>
										Import Student
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 no-width-pd bg-white border-radius-4 box-shadow">
							<table class="data-table stripe hover nowrap">
								<thead>
									<tr>
										<th>Name</th>
										<th>Gender</th>
										<th class="datatable-nosort"></th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ( $students as $stud ) {
										echo '<tr>
											<td>' . $stud['firstname'] . '</td>
											<td width="10%">' . $stud['gender'] . '</td>' ?>
											<td class="text-right" width="10%">
												<a type="button" class="btn btn-info" href="<?php echo base_url( "guidance/student/profile/" . $stud['IDstudent'] ) ?>" >
													<i class="fa fa-info-circle" aria-hidden="true"></i>
													Details
												</a>
											</td>
										</tr>
									<?php }	?>
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