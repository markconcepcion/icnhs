<style type="text/css">
	.row{
		margin-top: 5px;
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Forms Submission</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/registrar");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Set Schedule</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<form style="margin-left: 20px; margin-right: 20px;">
								<div class="row">
									<label class="col-md-2">To:</label>
									<input class="col-md-10" type="" name="" placeholder="All Teachers"> 
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<label class="col-md-6">School Year:</label>
											<input class="col-md-6" type="" name="">	
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<label class="col-md-4">Semester:</label>
											<input class="col-md-8" type="" name="">
										</div>
									</div>
									<div class="col-md-4">
										<div class="row">
											<label class="col-md-4">Quarter:</label>
											<input class="col-md-8" type="" name="">
										</div>
									</div>									
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="row">
											<label class="col-md-4">Submission Date:</label>
											<input class="col-md-8" type="date" name="">
										</div>		
									</div>
									<div class="col-md-6">
										<div class="row">
											<label class="col-md-2">Type:</label>
											<select style="width: 100%;" class="col-md-10">
												<option>Form 138</option>
												<option>FS 2</option>	
											</select>
										</div>		
									</div>
								</div>
								
								<div class="btn-list" style="justify-content: center; display: flex; margin-top: 15px; align-items: center;">
								<button class="btn btn-secondary" type="submit">Cancel</button>
								<button class="btn btn-primary" type="submit">Send</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>