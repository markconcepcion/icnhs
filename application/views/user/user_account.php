
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add User</h4>
							</div>
						</div>
					</div>
				</div>

				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">		
					<form>
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-green">Personal Information</h4>
							</div>
						</div>
						<div class="row" style="margin-top: 25px;">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" name="lastname" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" name="firstname" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Middle Name</label>
									<input type="text" name="middlename" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Contact Number</label>
									<input type="text" name="contact_no" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" name="address" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Profile Picture</label>
									<input type="file" name="post_image" class="form-control">
								</div>
							</div>
						</div>
						<div class="clearfix" style="margin-top: 20px;">
							<div class="pull-left">
								<h4 class="text-green">Account Information</h4>
							</div>
						</div>
						<div class="form-group row" style="margin-top: 25px;">
							<label class="col-sm-12 col-md-2 col-form-label">Username</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="username" type="text">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Password</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" name="password" type="Password">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">User Type</label>
							<div class="col-sm-12 col-md-10">
								<select class="form-control" name="user_level">
									<option value="guidance">Guidance</option>
									<option value="teacher">Teacher</option>
									<option value="student">Student</option>
									<option value="parent">Parent</option>
									<option value="registrar">Registrar</option>
								</select>
							</div>
						</div>
						<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
								<button class="btn btn-secondary" type="submit">Button</button>
								<input class="btn btn-primary" type="submit" value="Submit">
							</div>
					</form>
				</div>
				<!-- Form grid End -->
			</div>