
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Profile</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="profile-photo">
						<a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
						<img src="vendors/images/photo2.jpg" alt="" class="avatar-photo">
						<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-body pd-5">
										<div class="img-container">
											<img id="image" src="<?php echo base_url("vendors/images/photo2.jpg");?>" alt="">
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
					<div class="row">
						<div class="col-md-6 col-sm-12" style="font-size: 17px;">
						<h5 class="mb-20 weight-500 text-green">Personal Information</h5>
						<ul>
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
					</div>
					<div class="col-md-6 col-sm-12" style="font-size: 17px;">
						<h5 class="mb-20 weight-500 text-green">Account Information</h5>
						<ul>
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