<style type="text/css">
	span{
		color: dimgrey;
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 20px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>List of Users</h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div>
								<a class="btn btn-primary" href="<?php echo base_url("home/add_user");?>" role="button">
									Add User
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-green">ICNHS Users(Parents, Teachers, Students)</h5>
						</div>
					</div>
					<div class="row">
						<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Name</th>
									<th>User Type</th>
									<th>Address</th>
									<th>Contact Number</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">Gloria F. Mead</td>
									<td>teacher</td>
									<td>Pala-o, Iligan City</td>
									<td>09095345278</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button"><i class="fa fa-eye"></i> View</a>
												<a class="dropdown-item" href="<?php echo base_url("home/edit_user");?>"><i class="fa fa-pencil"></i> Edit</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
			</div>
			

			<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="text-align: right; margin-right: 20px; margin-top: 15px;">×</button>
										<div class="modal-body" style=" font-size: 20px;">
											<div class="profile-photo">
						<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
						<img src="vendors/images/photo2.jpg" alt="" class="avatar-photo">
						<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-body pd-5">
										<div class="img-container">
											<img id="image" src="<?php echo base_url("vendors/images/photo2.jpg");?>">
										</div>
									</div>
									<div class="modal-footer">
										<input type="submit" value="Update" class="btn btn-primary">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h5 class="text-center">Ferdinand M. Childs</h5>
					<p class="text-center text-muted">Teacher</p>
					<div class="text-center">
						<div class="col-md-12 col-sm-12" style="font-size: 17px; margin-top: 15px;">
						<h5 class="mb-20 weight-500 text-blue">Personal Information</h5>
						<ul style=" margin-left: 35px;">
							<li style="margin-bottom: 15px;">
								<span>Gender:</span>
								Female
							</li>
							<li style="margin-bottom: 15px;">	
								<span>Full Address:</span>
								Pala-o Iligan City
							</li>
							<li style="margin-bottom: 15px;">
								<span>Phone Number:</span>
								619-229-0054
							</li>
							<li style="margin-bottom: 15px;">
								<span>Email Address:</span>
								ferdinand@gmail.com
							</li>
						</ul>
						<h5 class="mb-20 weight-500 text-blue">Account Information</h5>
						<ul style="margin-left: 35px;">
							<li style="margin-bottom: 15px;">
								<span>Username:</span>
								Ferdinand
							</li>
							<li style="margin-bottom: 15px;">	
								<span>Password:</span>
								ferdinand123
							</li>
						</ul>
					</div>
										</div>
									</div>
								</div>
							</div>