<style type="text/css">
	.text-field{
		background: transparent;
		border:0px;
		border-bottom: 1px solid black;
		width: 100%;
	}
	.text-area{
		width: 100%;
		height: 100px;
		border: 1px solid black;
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Mail</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("student/mails/view_mail");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mail</li>
								</ol>
							</nav>
							<a href="<?php echo base_url("student/mails/compose_mail");?>" class="btn" style="background: #00b38f; margin-bottom: 10px; margin-top: -5px; color: white; font-size: 15px;"><i class="icon-copy ion-reply"></i>Reply</a>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From:</label>
									<div class="col-sm-12 col-md-8">
										<input type="" class="text-field" value="John Doe" readonly="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">File:</label>
									<div class="col-sm-12 col-md-8">
										<input type="file" class="text-field" readonly="">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Message:</label>
									<div class="col-sm-12 col-md-10">
										<input type="" class="text-area" value="sample mesage here" readonly="">
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>