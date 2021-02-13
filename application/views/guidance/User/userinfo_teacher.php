
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">

				<!-- PAGE HEADER -->
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">

							<!-- HEADER -->
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
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- MAIN CONTENT -->
				<div class="row">
					
					<!-- BASIC INFO -->
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
								<h5 class="mb-20 weight-500 text-info" >Personal Info</h5>
								<ul>
									<li>
										<span>Gender:</span>
										<?php echo ( $userinfo['gender']=="F"?"Female":"Male" ); ?>
									</li>
									<li>
										<span>Birthdate:</span>
										<?php echo date( 'M d, Y', strtotime($userinfo['birthdate']) ); ?>
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
									<li>
										<span>Email Address:</span>
										<?php echo $userinfo['email']; ?>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- ADDITIONAL INFO -->
					<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow height-100-p">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Class Schedule</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Edit Information</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start -->
										<div class="tab-pane fade show active" id="timeline" role="tabpanel">
											<div class="pd-20">
												<div class="row clearfix">
													<!-- Medium modal -->
													<div class="col-md-4 col-sm-12">
														<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style=" border-style: ridge; border-color: green;">
															
															<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button" style="font-size: 35px; margin: 40px;">
																MONDAY
															</a>
															<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title" id="myLargeModalLabel">Schedule</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
																		<div class="modal-body">
																			<table class="table table-bordered">
																				<thead>
																					<tr>
																						<th>Time</th>
																						<th>Subject</th>
																						<th>Grade</th>
																						<th>Section</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td>10:30-12:00</td>
																						<td>English and Literature</td>
																						<td>11</td>
																						<td>A</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="border-style: ridge; border-color: yellow;">
															<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button" style="font-size: 35px; margin: 40px;">
																TUESDAY
															</a>
															<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title" id="myLargeModalLabel">Schedule</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
																		<div class="modal-body">
																			<table class="table table-bordered">
																				<thead>
																					<tr>
																						<th>Time</th>
																						<th>Subject</th>
																						<th>Grade</th>
																						<th>Section</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td>10:30-12:00</td>
																						<td>English and Literature</td>
																						<td>11</td>
																						<td>A</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="border-style: ridge; border-color: red;">
															<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button" style="font-size: 33px; margin: 40px 0px 40px -10px;">
																WEDNESDAY
															</a>
															<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title" id="myLargeModalLabel">Schedule</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
																		<div class="modal-body">
																			<table class="table table-bordered">
																				<thead>
																					<tr>
																						<th>Time</th>
																						<th>Subject</th>
																						<th>Grade</th>
																						<th>Section</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td>10:30-12:00</td>
																						<td>English and Literature</td>
																						<td>11</td>
																						<td>A</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="border-style: ridge; border-color: orange;">
															<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button" style="font-size: 35px; margin: 40px 40px 40px 10px;">
																THURSDAY
															</a>
															<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title" id="myLargeModalLabel">Schedule</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
																		<div class="modal-body">
																			<table class="table table-bordered">
																				<thead>
																					<tr>
																						<th>Time</th>
																						<th>Subject</th>
																						<th>Grade</th>
																						<th>Section</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td>10:30-12:00</td>
																						<td>English and Literature</td>
																						<td>11</td>
																						<td>A</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="border-style: ridge; border-color: yellowgreen;">
															<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button" style="font-size: 35px; margin: 40px 40px 40px 70px;">
																FRIDAY
															</a>
															<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title" id="myLargeModalLabel">Schedule</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
																		<div class="modal-body">
																			<table class="table table-bordered">
																				<thead>
																					<tr>
																						<th>Time</th>
																						<th>Subject</th>
																						<th>Grade</th>
																						<th>Section</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td>10:30-12:00</td>
																						<td>English and Literature</td>
																						<td>11</td>
																						<td>A</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="border-style: ridge; border-color: indigo;">
															<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button" style="font-size: 35px; margin: 40px 40px 40px 20px;">
																SATURDAY
															</a>
															<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title" id="myLargeModalLabel">Schedule</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
																		<div class="modal-body">
																			<table class="table table-bordered">
																				<thead>
																					<tr>
																						<th>Time</th>
																						<th>Subject</th>
																						<th>Grade</th>
																						<th>Section</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td>10:30-12:00</td>
																						<td>English and Literature</td>
																						<td>11</td>
																						<td>A</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4 col-sm-12">
														<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="border-style: ridge; border-color: skyblue;">
															<a href="#" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button" style="font-size: 35px; margin: 40px 40px 40px 58px;">
																SUNDAY
															</a>
															<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title" id="myLargeModalLabel">Schedule</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
																		<div class="modal-body">
																			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <table class="table table-bordered">
																				<thead>
																					<tr>
																						<th>Time</th>
																						<th>Subject</th>
																						<th>Grade</th>
																						<th>Section</th>
																					</tr>
																				</thead>
																				<tbody>
																					<tr>
																						<td>10:30-12:00</td>
																						<td>English and Literature</td>
																						<td>11</td>
																						<td>A</td>
																					</tr>
																				</tbody>
																			</table>
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
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
																<input hidden name="IDuserInfo" value="<?php echo $userinfo['IDteacher'] ?>">
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
														<div class="col-md-2 col-sm-12">
															<div class="form-group">
																<label>Gender</label>
																<select class="form-control" name="gender" value="<?php echo $userinfo['gender'] ?>">
																	<option value="F">Female</option>
																	<option value="M">Male</option>
																</select>
															</div>
														</div>
														<div class="col-md-4 col-sm-12">
															<div class="form-group">
																<label>Birthdate</label>
																<input type="date" class="form-control" name="birthdate" value="<?php echo $userinfo['birthdate'] ?>">
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="form-group">
																<label>Email Address</label>
																<input type="text" class="form-control" name="email" value="<?php echo $userinfo['email'] ?>">
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
													<div class="row">
														<div class="col-md-6 col-sm-12">
															<div class="form-group">
																<label>Phone Number</label>
																<input type="text" class="form-control" name="contactnum" value="<?php echo $userinfo['contactnum'] ?>">
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="form-group">
																<label>User Type</label>
																<select class="form-control" name="user_level" value="<?php echo $userinfo['user_level'] ?>">
																	<option value="guidance">Guidance</option>
																	<option value="teacher">Teacher</option>
																	<option value="registrar">Registrar</option>
																</select>
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


<!-- <div class="form-group row">
	<label class="col-sm-12 col-md-2 col-form-label">User Type</label>
	<div class="col-sm-12 col-md-10">
		<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;" value="<?php // echo $userinfo['user_level'] ?>">
			<option value="guidance">Guidance</option>
			<option value="teacher">Teacher</option>
			<option value="registrar">Registrar</option>
		</select>
	</div>
</div> -->