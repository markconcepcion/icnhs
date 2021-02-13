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
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/parent");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Profile</li>
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
										
											<h5 style="margin-top: 15px; text-align: center; font-weight: bold; background-color: skyblue;">Personal Information</h5>	
											
											<div class="row" style="margin-left: 5px;">
												<div class="col-md-5" style="margin-top: 20px; font-weight: bold; text-align: right;">
													<ul>
														<li>
															Name:
														</li>
														<li>
															Sex:
														</li>
														<li>
															Phone Number:
														</li>
														<li>
															Address:
														</li>
													</ul>
												</div>
												<div class="col-md-7" style="margin-top: 20px;">
													<ul>
														<li>
															Lastname, Firstname, Middlename
														</li>
														<li>
															Female
														</li>
														<li>
															09475835278
														</li>
														<li>
															Prk 2, Poblacion, Manticao, Misamis Oriental
														</li>
													</ul>
												</div>
											</div>
											<h5 style="margin-top: 15px; text-align: center; font-weight: bold; background-color: skyblue;">My Student/s</h5>	
											
											<div class="row" style="margin-left: 5px;">
												<div class="col-md-5" style="margin-top: 20px; font-weight: bold; text-align: right;">
													<ul>
														<li>
															Name:
														</li>
														<li>
															Strand:
														</li>
														<li>
															Grade Level:
														</li>
														<li>
															Section:
														</li>
													</ul>
												</div>
												<div class="col-md-7" style="margin-top: 20px;">
													<ul>
														<li>
															Julia Montes
														</li>
														<li>
															STEM
														</li>
														<li>
															11
														</li>
														<li>
															Mahogany
														</li>
													</ul>
												</div>
												<br>
												<div class="col-md-5" style="margin-top: 20px; font-weight: bold; text-align: right;">
													<ul>
														<li>
															Name:
														</li>
														<li>
															Strand:
														</li>
														<li>
															Grade Level:
														</li>
														<li>
															Section:
														</li>
													</ul>
												</div>
												<div class="col-md-7" style="margin-top: 20px;">
													<ul>
														<li>
															John Montes
														</li>
														<li>
															STEM
														</li>
														<li>
															12
														</li>
														<li>
															Narra
														</li>
													</ul>
												</div>
											</div>
											<h5 style="margin-top: 15px; text-align: center; font-weight: bold; background-color: skyblue;">Account Information</h5>	
											
											<div class="row" style="margin-left: 5px;">
												<div class="col-md-5" style="margin-top: 20px; font-weight: bold; text-align: right;">
													<ul>
														<li>
															Username:
														</li>
														<li>
															Password:
														</li>
													</ul>
												</div>
												<div class="col-md-7" style="margin-top: 20px; margin-bottom: 20px;">
													<ul>
														<li>
															109943294875
														</li>
														<li>
															HIDDEN
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- Timeline Tab End -->
										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<h4 style="margin-top: 15px; font-weight: bold; text-align: center; background-color: skyblue;">Account Information</h4>
											<div class="profile-setting pd-20 bg-white border-radius-4 box-shadow mb-30">
												<form>
													
													<div class="form-group row">
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