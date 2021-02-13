<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo base_url("vendors/styles/style.css");?>">
		<link rel="stylesheet" href="<?php echo base_url("assets/css/login.css");?>">
		<style>
			body {
				background: url( <?php echo base_url( 'assets/images/login-bg.jpg' ); ?> );
			}
		</style>
	</head>
	<body>
		<div class="login-div">
			<div class="text-center login-img-div">
				<img src="<?php echo base_url("assets/images/login-icon.jpg");?>" alt="login" class="login-img" width="300">
			</div>

			<h3 class="text-center login-header">ICNHS-SPRMS</h3>

			<?php if($this->session->flashdata('msg')): ?>
				<label class="login-output-msg text-white text-center"> 
					<?php echo $this->session->flashdata('msg') ?>
				</label>
			<?php endif; ?>

			<form class="login-form" action="<?php echo site_url('login/auth');?>" method="post">
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
					<div class="input-group-append custom">
						<span class="input-group-text">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
				</div>

				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" name="password" placeholder="**********" required>
					<div class="input-group-append custom">
						<span class="input-group-text">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
				</div>

				<div class="input-group">
					<button type="submit" class="btn btn-outline-primary btn-lg btn-block login-btn"> LOGIN </button>
				</div>
			</form>

		</div>
	</body>

	<script src="<?php echo base_url("vendors/scripts/script.js");?>"></script>
</html>