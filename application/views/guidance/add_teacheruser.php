
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add User Account</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/select_adduser");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Student Account</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">		
					<form>
						<div class="form-group row" style="margin-top: 25px;">
							<label class="col-sm-12 col-md-2 col-form-label">Username(LRN):</label>
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
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Profile Picture</label>
							<div class="col-sm-12 col-md-10">
								<input type="file" name="picture" class="form-control">
							</div>
						</div>
						<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
								<button class="btn btn-secondary" type="submit">Cancel</button>
								<input class="btn btn-primary" type="submit" value="Submit">
							</div>
					</form>
				</div>
				<!-- Form grid End -->
			</div>
		