
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add Student (Trasferee)</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/dashboard/add_students");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Student</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="margin-top: 20px;">
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard">
							<h5>Personal Info</h5>
							<section>
						<div class="form-group row" style="margin-top: 20px;">
									<label class="col-sm-12 col-md-4 col-form-label">Learner Reference Number (LRN):</label>
									<div class="col-sm-12 col-md-8">
										<input type="" class="form-control" name="">
									</div>
								</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Middle Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Sex</label>
									<select class="form-control">
										<option>Female</option>
										<option>Male</option>
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Birthdate</label>
									<input type="date" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Age</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Mother Tongue</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>IP(Ethnic Group)</label>
									<input type="" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Religion</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Street/Purok</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Barangay</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Municipality</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Province</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
						
							</section>
							<!-- Step 2 -->
							<h5>Parent Info</h5>
							<section>
							<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Father's Last Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Middle Name</label>
									<input type="Text" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Mother's Maiden Last Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="form-group">
									<label>Middle Name</label>
									<input type="Text" class="form-control">
								</div>
							</div>
						</div>
							<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Guardian's Name</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Relationship</label>
									<input type="text" class="form-control">
								</div>
							</div>
						</div>
							<div class="form-group row" style="margin-top: 20px;">
									<label class="col-sm-12 col-md-4 col-form-label">Contact Number of Parent/Guardian:</label>
									<div class="col-sm-12 col-md-8">
										<input type="" class="form-control" name="">
									</div>
								</div>
							</section>
							
							<!-- Step 4 -->
						
						</form>
					</div>
				</div>

				<!-- success Popup html Start -->
				<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-body text-center font-18">
								<h3 class="mb-20">Form Submitted!</h3>
								<div class="mb-30 text-center"><img src="<?php echo base_url("vendors/images/success.png");?>"></div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</div>
							<div class="modal-footer justify-content-center">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
							</div>
						</div>
					</div>
				</div>
				<!-- success Popup html End -->
			</div>
		</div>
	</div>
	<script src="<?php echo base_url("vendors/scripts/script.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/jquery-steps/build/jquery.steps.js");?>"></script>
	<script>
		$(".tab-wizard").steps({
			headerTag: "h5",
			bodyTag: "section",
			transitionEffect: "fade",
			titleTemplate: '<span class="step">#index#</span> #title#',
			labels: {
				finish: "Submit"
			},
			onStepChanged: function (event, currentIndex, priorIndex) {
				$('.steps .current').prevAll().addClass('disabled');
			},
			onFinished: function (event, currentIndex) {
				$('#success-modal').modal('show');
			}
		});
	</script>
</body>
</html>