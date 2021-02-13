<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">

			<!-- PAGE HEADINGS  -->
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						
						<!-- PAGE HEADER  -->
						<div class="title">
							<h4>User Accounts</h4>
						</div>

						<!-- BREADCRUMBS -->
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="<?php echo base_url("guidance/select_year");?>">
										<i class="fa fa-arrow-left" aria-hidden="true"></i>
										Back
									</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Users</li>
							</ol>
						</nav>
					</div>

					<!-- ADD USER BUTTON -->
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-info dropdown-toggle" role="button" data-toggle="dropdown" href="#">
								<i class="fa fa-plus" aria-hidden="true"></i>
								User
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a role="button" href="<?php echo base_url( 'userform/teacher' ) ?>" class="btn dropdown-item">
									<i class="fa fa-plus" aria-hidden="true"></i>
									Teacher/Staff
								</a>
								<a role="button" href="<?php echo base_url( 'userform/parent' ) ?>" class="btn dropdown-item">
									<i class="fa fa-plus" aria-hidden="true"></i>
									Parent
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- LIST OF USERS TABLE -->
			<div class="bg-white border-radius-4 box-shadow">
				<div class="tab">
					
					<!-- NAVTAB BUTTONS -->
					<ul class="nav nav-tabs customtab" role="tablist">
						<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">Teachers/Staffs</a></li>
						<!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-selected="false">Students</a></li> -->
						<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact2" role="tab" aria-selected="false">Parents</a></li>
					</ul>

					<!-- TABS -->
					<div class="tab-content">

						<!-- STAFF ACCOUNT TAB -->
						<div class="tab-pane fade show active" id="home2" role="tabpanel">
							<div class="pd-15">
								<div class="row">
									<table class="data-table stripe hover nowrap">
										<thead>
											<tr>
												<th class="table-plus hide-md"></th>
												<th class="table-plus">User Name</th>
												<th>Account Type</th>
												<th>Status</th>
												<th class="datatable-nosort"></th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($teachers as $row) { ?>
												<tr class="td-5">
													<td width="01%" class="table-plus hide-md"></td>
													<td width="60%"><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname']; ?></td>
													<td width="20%"><?php echo ucfirst( $row['user_level'] ); ?></td>
													<td width="15%">Active</td>
													<td width="5%">
														<a class="btn btn-info" href="<?php echo base_url( 'userinfo/teacher/' . $row['IDuser'] );?>" role="button">
															<i class="fa fa-edit" aria-hidden="true"></i>
															Profile
														</a>
													</td>
												</tr>
											<?php }	?>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<!-- PARENTS ACCOUNT TAB -->
						<div class="tab-pane fade" id="contact2" role="tabpanel">
							<div class="pd-vr-15">
								<div class="row">
									<table class="data-table stripe hover nowrap">
										<thead>
											<tr>
												<th class="table-plus hide-md"></th>
												<th>User Name</th>
												<th>Status</th>
												<th class="datatable-nosort"></th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($parents as $row) { ?>
												<tr>
													<td width="01%" class="table-plus hide-md"></td>
													<td width="75%"><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['lastname']; ?></td>
													<td width="15%">Active</td>
													<td width="10%">
														<a class="btn btn-info" href="<?php echo base_url( 'userinfo/parent/' . $row['IDuser'] );?>" role="button">
															<i class="fa fa-edit" aria-hidden="true"></i>
															Profile
														</a>
														<button class="btn btn-primary addparentstudentbtn_user" data-id="<?php echo $row['IDparent']; ?>" data-toggle="modal" data-target="#AddParentStudent">
															<i class="fa fa-plus" aria-hidden="true"></i>
															Student
														</button>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<?php 
	$this->load->view( 'guidance/Modals/User/AddParentStudent' );
?>