
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>

							<!-- BREADCRUMBS -->
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="<?php echo base_url("guidance_user");?>">
											<i class="fa fa-arrow-left" aria-hidden="true"></i>
											Back
										</a>
									</li>
									<li class="breadcrumb-item">User</li>
									<li class="breadcrumb-item active" aria-current="page">Parent's profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="img-container">
								<button class="btn btn-info btn-sm edit-pic" type="button" onclick="">
									<i class="fa fa-edit" aria-hidden="true"></i>
								</button>

								<button class="btn btn-info btn-sm edit-pic hidden" type="button" onclick="">
									<i class="fa fa-save" aria-hidden="true"></i>
									Save
								</button>
								
								<input hidden type="file" accept="img/*" id="profilepic" name="profilepic" >

								<img id="image" src="<?php echo base_url("vendors/images/photo2.jpg");?>" width="200" alt="Picture">
							</div>
							<h5 class="text-center" style="margin-top: 7px;"><?php echo $userinfo['firstname'].' '.$userinfo['middlename'].' '.$userinfo['lastname'] ?></h5>
							<p class="text-center text-muted"><?php echo ucfirst( $userinfo['user_level'] ); ?></p>
						
							<div class="profile-info">
								<h5 class="mb-20 weight-500" style="color: #008ae6;">Personal Info</h5>
								<ul>
									<li>
										<span>Gender:</span>
										<?php echo ( $userinfo['gender']=="F"?"Female":"Male" ); ?>
									</li>
									<li>
										<span>Address:</span>
										<?php echo ucfirst( $userinfo['sitio'] . ', ' . $userinfo['barangay'] ); ?><br>
										<?php echo ucfirst( $userinfo['municity'] . ', ' . $userinfo['province'] ); ?><br>
									</li>
									<li>
										<span>Contact:</span>
										<?php echo $userinfo['contactnum']; ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow height-100-p">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">My Student/s</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Edit Information</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start -->
										<div class="tab-pane fade show active" id="timeline" role="tabpanel">
											<div class="profile-setting pd-vr-15 bg-white border-radius-4 box-shadow mb-30"></div>
											<table class="data-table stripe hover nowrap">
												<thead>
													<tr>
														<th class="table-plus hide-md"></th>
														<th>Student's Name</th>
														<th>Grade & Section</th>
														<th>Status</th>
														<th class="datatable-nosort"></th>
													</tr>
												</thead>
												<tbody>
													<?php foreach ( $students as $row ) { ?>
														<tr class="td-5">
															<td width="01%" class="table-plus hide-md"></td>
															<td width="40%"><?php echo $row['lastname'].', '.$row['firstname'].' '.$row['middlename']; ?></td>
															<td width="40%">Grade - Section Strand</td>
															<td width="15%">Active</td>
															<td width="5%">
																<a class="btn btn-info" href="<?php echo base_url( "studentprofile/$row[IDstudent]" );?>" role="button">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																	Profile
																</a>
															</td>
														</tr>
													<?php }	?>
												</tbody>
											</table>
											<!-- <div class="pd-20">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th>Student</th>
															<th>Grade & Section</th>
															<th>Status</th>
															<th class="datatable-nosort">Action</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Kath Childs</td>
															<td>11 - A</td>
															<td>Active</td>
															<td>
																<a class="btn btn-info" href="<?php echo base_url("guidance/student_profile");?>" role="button">
																	View Profile
																</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div> -->
										</div>
										<!-- Timeline Tab End -->
										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting pd-20 bg-white border-radius-4 box-shadow mb-30">
												<?php echo form_open( 'guidance/user/saveUserInfo' ); ?>
													<div class="clearfix">
														<div class="pull-left">
															<h4 class="text-info">Personal Information</h4>
														</div>
													</div>
													<div class="row" style="margin-top: 25px;">
														<div class="col-md-4 col-sm-12">
															<div class="form-group">
																<label>Last Name</label>
																<input hidden name="IDuser" value="<?php echo $userinfo['IDuser'] ?>">
																<input hidden name="IDuserInfo" value="<?php echo $userinfo['IDparent'] ?>">
																<input hidden name="user_level" value="<?php echo $userinfo['user_level'] ?>">
																<input type="text" class="form-control" name="lastname" value="<?php echo ucfirst( $userinfo['lastname'] ) ?>">
															</div>
														</div>
														<div class="col-md-4 col-sm-12">
															<div class="form-group">
																<label>First Name</label>
																<input type="text" class="form-control" name="firstname" value="<?php echo ucfirst($userinfo['firstname']) ?>">
															</div>
														</div>
														<div class="col-md-4 col-sm-12">
															<div class="form-group">
																<label>Middle Name</label>
																<input type="text" class="form-control" name="middlename" value="<?php echo ucfirst($userinfo['middlename']) ?>">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6 col-sm-12">
															<div class="form-group">
																<label>Gender</label>
																<select class="form-control" name="gender" value="<?php echo $userinfo['gender'] ?>">
																	<option>Female</option>
																	<option>Male</option>
																</select>
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="form-group">
																<label>Phone Number</label>
																<input type="text" class="form-control" name="contactnum" value="<?php echo $userinfo['contactnum'] ?>">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-3 col-sm-12">
															<div class="form-group">
																<label>Street/Purok</label>
																<input type="text" class="form-control" name="sitio" value="<?php echo ucfirst($userinfo['sitio']) ?>">
															</div>
														</div>
														<div class="col-md-3 col-sm-12">
															<div class="form-group">
																<label>Barangay</label>
																<input type="text" class="form-control" name="barangay" value="<?php echo ucfirst($userinfo['barangay']) ?>">
															</div>
														</div>
														<div class="col-md-3 col-sm-12">
															<div class="form-group">
																<label>Municipality</label>
																<input type="text" class="form-control" name="municity" value="<?php echo ucfirst($userinfo['municity']) ?>">
															</div>
														</div>
														<div class="col-md-3 col-sm-12">
															<div class="form-group">
																<label>Province</label>
																<input type="text" class="form-control" name="province" value="<?php echo ucfirst($userinfo['province']) ?>">
															</div>
														</div>
													</div>
													<div class="btn-list text-right" style="justify-content: center; display: flex;">
														<button class="btn btn-secondary" type="button">Cancel</button>
														<button class="btn btn-info" type="submit">Submit</button>
													</div>
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>