
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/view_students");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Student's Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="img-container">
								<img id="image" src="<?php echo base_url("vendors/images/photo2.jpg");?>" alt="Picture">
							</div>
							<h5 class="text-center" style="margin-top: 7px;">Ferdinand M. Childs</h5>
							<p class="text-center text-muted">Student</p>
							<ul>
								<li>
									<span style="color: grey;">LRN:</span>
									09996786565
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow height-100-p">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Student Info</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Edit Student Info</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start -->
										<div class="tab-pane fade show active" id="timeline" role="tabpanel">
											<div class="pd-20">
												<div class="profile-info row">
													<div class="col-md-6 col-sm-12">
														<h5 class="mb-20 weight-500" style="color: #008ae6;">Personal Information</h5>
														<ul>
															<li>
																<span>Gender:</span>
																Male
															</li>
															<li>
																<span>Birthdate:</span>
																May 27, 1990
															</li>
															<li>
																<span>Contact:</span>
																0913285925
															</li>
															<li>
																<span>Address:</span>
																1807 Holden Street<br>
																San Diego, CA 92115
															</li>
															<li>
																<span>Parent/Guardian:</span>
																Eduardo Childs
															</li>
														</ul>
														<h5 class="mb-20 weight-500" style="margin-top: 20px; color: #008ae6;">Account Information</h5>
														<ul>
															<li>
																<span>Username:</span>
																09996786565
															</li>
															<li>
																<span>Password:</span>
																password
															</li>
														</ul>
													</div>
													<div class="col-md-6 col-sm-12">
														<h5 class="mb-20 weight-500" style="color: #008ae6;">Parent Information</h5>
														<ul>
															<li>
																<span>Father's Name:</span>
																Eduardo Child
															</li>
															<li>
																<span>Mother's Name:</span>
																Charry Bernardo
															</li>
															<li>
																<span>Guardian's Name:</span>
																Eduardo Child
															</li>
															<li>
																<span>Contact Number of Parent/Guardian:</span>
																0948375422
															</li>
														</ul>
														<h5 class="mb-20 weight-500" style="margin-top: 20px; color: #008ae6;">Classroom and Adviser Information</h5>
														<ul>
															<li>
																<span>Grade:</span>
																11
															</li>
															<li>
																<span>Section:</span>
																A
															</li>
															<li>
																<span>Strand:</span>
																STEM
															</li>
															<li>
																<span>Adviser:</span>
																Kath B
															</li>
														</ul>
													</div>
								
								
												</div>
											</div>
										</div>
										<!-- Timeline Tab End -->
										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting pd-20 bg-white border-radius-4 box-shadow mb-30">
												<form>
													<div class="clearfix" style="margin-top: 20px;">
														<div class="pull-left">
															<h4 class="text-green">Account Information</h4>
														</div>
													</div>
													<div class="form-group row" style="margin-top: 25px;">
														<label class="col-sm-12 col-md-2 col-form-label">Username</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" type="text" disabled="">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Password</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" type="Password">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Profile Picture</label>
														<div class="col-sm-12 col-md-10">
															<input type="file" name="picture" class="form-control">
														</div>
													</div>
												
													<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
															<button class="btn btn-secondary" type="submit">Cancel</button>
															<button class="btn btn-primary" type="submit">Update</button>
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
		<script src="<?php echo base_url("vendors/scripts/script.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/cropperjs/dist/cropper.js");?>"></script>
	<script>
		window.addEventListener('DOMContentLoaded', function () {
			var image = document.getElementById('image');
			var cropBoxData;
			var canvasData;
			var cropper;

			$('#modal').on('shown.bs.modal', function () {
				cropper = new Cropper(image, {
					autoCropArea: 0.5,
					dragMode: 'move',
					aspectRatio: 3 / 3,
					restore: false,
					guides: false,
					center: false,
					highlight: false,
					cropBoxMovable: false,
					cropBoxResizable: false,
					toggleDragModeOnDblclick: false,
					ready: function () {
						cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
					}
				});
			}).on('hidden.bs.modal', function () {
				cropBoxData = cropper.getCropBoxData();
				canvasData = cropper.getCanvasData();
				cropper.destroy();
			});
		});
	</script>
</body>
</html>