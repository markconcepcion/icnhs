<style type="text/css">
	.margin{
		margin-top: 10px;
	}
</style>

	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>My Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/teacher");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Teacher Profile</li>
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
						</div>
					</div>
					<div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="bg-white border-radius-4 box-shadow height-100-p">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist" style="background: #e6ffff;">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Personal and Account Info</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting" role="tab">Edit Account Info</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- Timeline Tab start -->
										<div class="tab-pane fade show active" id="timeline" role="tabpanel">
											<div class="row">
												<h4  style="margin-top: 15px; margin-left: 20px;">Personal Information</h4>	
											</div>
											
											<div class="row" style="margin-left: 5px;">
												<div class="col-md-6" style="margin-top: 20px;">
													<ul>
														<li>
															Name:
															<span style="text-decoration-line: underline;">Lastname, Firstname Middlename</span>
														</li>
														<li class="margin">
															Sex:
															<span style="text-decoration-line: underline;">Female</span>
														</li>
													</ul>
												</div>
												<div class="col-md-6" style="margin-top: 20px;">
													<ul>
														<li>
															Position:
															<span style="text-decoration-line: underline;"> Teacher 1</span>
														</li>
														<li class="margin">
															Birthdate:
															<span style="text-decoration-line: underline;">October 3, 1990</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="row margin" style="margin-left: 5px;">
												<div class="col-md-12">
													<ul>
														<li>
															Address:
															<span style="text-decoration-line: underline;">Pk2, Pala-o, Iligan City</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="row margin" style="margin-left: 5px;">
												<div class="col-md-6">
													<ul>
														<li>
															Email Adress:
															<span style="text-decoration-line: underline;">Lastname@gmail.com</span>
														</li>
													</ul>
												</div>
												<div class="col-md-6">
													<ul>
														<li>
															Phone Number:
															<span style="text-decoration-line: underline;">09232483924</span>
														</li>
													</ul>
												</div>
											</div>
											<h4 style="margin-top: 15px; margin-bottom: 15px; margin-left: 10px;">Account Information</h4>
											<div class="row margin" style="margin-left: 5px;">
												<div class="col-md-12">
													<ul>
														<li>
															Account Name:
															<span style="text-decoration-line: underline;">lastname@gmail.com</span>
														</li>
													</ul>
												</div>
											</div>
											<div class="row margin" style="margin-left: 5px; margin-bottom: 10px;">
												<div class="col-md-12">
													<ul>
														<li>
															Password:
															<span style="text-decoration-line: underline;">12345</span>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- Timeline Tab End -->
										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting pd-20 bg-white border-radius-4 box-shadow mb-30">
												<form>
													<div class="clearfix" style="margin-top: 5px;">
														<div class="pull-left">
															<h4>Account Information</h4>
														</div>
													</div>
													<div class="form-group row" style="margin-top: 25px;">
														<label class="col-sm-12 col-md-2 col-form-label">Username:</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" type="text">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-sm-12 col-md-2 col-form-label">Password:</label>
														<div class="col-sm-12 col-md-10">
															<input class="form-control" type="Password">
														</div>
													</div>
													<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
														<button class="btn btn-secondary" type="submit">Cancel</button>
														<input class="btn btn-primary" type="submit" value="Submit">
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