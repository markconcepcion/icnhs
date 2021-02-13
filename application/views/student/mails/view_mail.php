
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Mails</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/student");?>">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Mails</li>
								</ol>
							</nav>
							<a class="btn" href="<?php echo base_url("student/mails/compose_mail");?>" role="button" style="color: white; background: #00b38f; margin-bottom: 10px; margin-top: -5px;">Compose Mail</a>
						</div>
					</div>
				</div>

				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 bg-white border-radius-4 box-shadow">
							<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="<?php echo base_url("student/mails/mail");?>">
										<img src="<?php echo base_url("vendors/images/img.jpg");?>" alt="">
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
						</div>
					</div>
				</div>
			</div>