	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Manage Class</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="<?php echo base_url("guidance/select_year");?>">
											<i class="fa fa-arrow-left" aria-hidden="true"></i>
											Back
										</a>
									</li>
									<li class="breadcrumb-item active" aria-current="page"><b>Class List</b></li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddClassForm">
								<i class="fa fa-plus" aria-hidden="true"></i>
								Class
							</button>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 no-width-pd bg-white border-radius-4 box-shadow">
							<table class="data-table stripe hover nowrap">
								<thead>
									<tr>
										<th>Strand</th>
										<th>Grade</th>
										<th>Section</th>
										<th>Adviser</th>
										<th class="datatable-nosort"></th>
									</tr>
								</thead>

								<tbody>
									<?php foreach ( $classes as $row ) {
										echo '<tr>
											<td width="10%">' . $row['strandCode'] . '</td>
											<td width="10%">' . $row['classGrade'] . '</td>
											<td width="10%">' . $row['classSection'] . '</td>
											<td width="40%">' . $row['firstname'] . ' ' . $row['lastname'] . '</td>' ?>
											<td class="text-right" width="30%">
												<button type="button" class="btn btn-primary add-class-sched" data-id="<?php echo $row['IDclass'] ?>" data-toggle="modal" data-target="#Schedules">
													<i class="fa fa-list" aria-hidden="true"></i>
													Schedules List
												</button>
												<a type="button" class="btn btn-secondary" href="<?php echo base_url( 'guidance/ClassManager/classdetails/'.$row['IDclass'] ) ?>" >
													<i class="fa fa-list" aria-hidden="true"></i>
													Student List
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