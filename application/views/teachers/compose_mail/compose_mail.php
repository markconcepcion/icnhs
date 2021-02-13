
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Compose Mail</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/composemail/view_mail");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Compose Mail</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<form>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To:</label>
									<div class="col-sm-12 col-md-8">
										<select class="form-control">
											<option>kath b</option>
											<option>daniel p</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Attached File:</label>
									<div class="col-sm-12 col-md-8">
										<input type="file" class="form-control" name="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Message:</label>
									<div class="col-sm-12 col-md-10">
										<textarea class="form-control"></textarea>
									</div>
								</div>
								<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
								<button class="btn btn-secondary" type="submit">Cancel</button>
								<button class="btn btn-primary" type="submit">Send</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>