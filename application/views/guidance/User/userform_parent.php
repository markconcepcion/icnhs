
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add User Account</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="<?php echo base_url("guidance_user");?>">
											<i class="fa fa-arrow-left" aria-hidden="true"></i>
											Back
										</a>
									</li>
									<li class="breadcrumb-item">User</li>
									<li class="breadcrumb-item active" aria-current="page">Create parent account</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">		
					<?php echo form_open_multipart('/guidance/User/addUser'); ?>
						<input hidden name="email" value="">
						<input hidden name="birthdate" value="0000-00-00">
						<input hidden name="prefix" value="p_">
						<input hidden name="table" value="parent">
						<input hidden name="user_level" value="parent">

						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-info">Personal Information</h4>
							</div>
						</div>
						<div class="row" style="margin-top: 25px;">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" class="form-control" name="lastname">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control" name="firstname">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Middle Name</label>
									<input type="text" class="form-control" name="middlename">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Gender</label>
									<select class="form-control" name="gender">
										<option value="F">Female</option>
										<option value="M">Male</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="text" class="form-control" name="contactnum">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Street/Purok</label>
									<input type="text" class="form-control" name="sitio">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Barangay</label>
									<input type="text" class="form-control" name="barangay">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Municipality</label>
									<input type="text" class="form-control" name="municity">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Province</label>
									<input type="text" class="form-control" name="province">
								</div>
							</div>
						</div>
						<div class="clearfix" style="margin-top: 20px;">
							<div class="pull-left">
								<h4 class="text-info">Account Information</h4>
							</div>
						</div>
						<div class="form-group row" style="margin-top: 25px;">
							<label class="col-sm-12 col-md-2 col-form-label">Username</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="username">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="Password" name="password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Profile Picture</label>
							<div class="col-sm-12 col-md-10">
								<input type="file" name="post_image" class="form-control">
							</div>
						</div>
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-info">Insert Student</h4>
							</div>
						</div>
						<div class="form-group row" style="margin-top: 25px;">
							<label class="col-sm-12 col-md-2 col-form-label">Student Name</label>
							<div class="col-sm-12 col-md-10">
								<select class="form-control custom-select2" name="IDstudent">
									<?php foreach ($students as $s) { ?>
										<option value="<?php echo $s['IDstudent'] ?>"><?php echo $s['firstname'].' '.$s['middlename'].' '.$s['lastname'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
							<button class="btn btn-secondary" type="button">Cancel</button>
							<input class="btn btn-primary" type="submit" value="Submit">
						</div>
					<?php echo form_close(); ?>		
				</div>
				<!-- Form grid End -->
			</div>
		