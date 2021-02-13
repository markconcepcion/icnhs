
<!DOCTYPE html>
<html>
<head>
		<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp Dashboard</title>

	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url("vendors/styles/style.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/datatables/media/css/jquery.dataTables.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/datatables/media/css/dataTables.bootstrap4.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/datatables/media/css/responsive.dataTables.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/cropperjs/dist/cropper.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/jquery-steps/build/jquery.steps.css");?>">
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/styles/print.css");?>" media="print">
 -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119386393-1');
	</script>

</head>
<style type="text/css">
	.sidebar-menu .dropdown-toggle:hover, .sidebar-menu .show > .dropdown-toggle{
	background: #def2ff;
	color: #3cd8a3;
}
.sidebar-menu .dropdown-toggle:hover .fa, .sidebar-menu .show > .dropdown-toggle .fa{
	color: #3cd8a3;
}
.sidebar-menu .submenu:before{
	content: "";
	width: 1px;
	height: 100%;
	position: absolute;
	left: 31px;
	top: 0;
	display: none;
	background: none;
	border-left: 2px dashed #3cd8a3;
}
.sidebar-menu .submenu li:before{
	content: "";
	position: absolute;
	left: 28px;
	top: 50%;
	height: 2px;
	margin-top: -1px;
	width: 10px;
	background: #3cd8a3;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.sidebar-menu .submenu li a:hover, .sidebar-menu .submenu li a.active{
	color: #3cd8a3;
}
.sidebar-menu .dropdown-toggle.active, .sidebar-menu .dropdown-toggle.active .fa{
	color: #3cd8a3;
	background: #def2ff;
}

</style>

<body>
	<div class="pre-loader"></div>
	<div class="header clearfix noprint">
		<div class="header-right"  style=" background-color: aquamarine;">
			<div class="brand-logo">
				<a href="index.php">
					<img src="<?php echo base_url("vendors/images/logo.png");?>" alt="" class="mobile-logo">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-o"></i></span>
						<span class="user-name"><?php echo $this->session->userdata('username');?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="<?php echo base_url("teacher/myaccount/view_profile");?>"><i class="fa fa-user-md" aria-hidden="true"></i> View Profile</a> 
						<a class="dropdown-item" href="<?php echo base_url("Login/logout");?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a>
					</div>
				</div>
			</div>
			<div class="user-notification">
								<div class="dropdown">
									<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
										<i class="fa fa-bell" aria-hidden="true" style="color: #3385ff; font-size: 27px;"></i>
										<span class="badge notification-active"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<div class="notification-list mx-h-350 customscroll">
											<ul>
												<li>
													<a href="#">
														<img src="<?php echo base_url("vendors/images/img.jpg");?>" alt="">
														<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
														<p>Sent a Letter</p>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

		</div>
	</div>
	<div class="left-side-bar noprint">
		<div class="brand-logo">
			<a href="index.php">
				<img src="vendors/images/deskapp-logo.png" alt="">
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<?php if($this->session->userdata('level')==='guidance'):?>
					<li>
						<a href="<?php echo base_url("admin/index");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("guidance/view_users");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-user"></span><span class="mtext">User Account</span>
						</a>	
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-tasks"></span><span class="mtext">Grade Level Info</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url("guidance/add_schoolyr");?>">Add School Year</a></li>
							<li><a href="<?php echo base_url("guidance/add_strand");?>">Add Strand</a></li>
							<li><a href="<?php echo base_url("guidance/add_subject");?>">Subject Info</a></li>
							<li><a href="<?php echo base_url("guidance/add_gradelevel");?>">Grade Level Info</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url("guidance/select_year");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-file-text-o"></span><span class="mtext">Add Students</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("guidance/selectyrtoclasssched");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar"></span><span class="mtext">Class Scheduling</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("guidance/selectyrtoview1");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-group"></span><span class="mtext">Record of Students</span>
						</a>
					</li>
					<?php elseif($this->session->userdata('level')==='registrar'):?>
					<li>
						<a href="<?php echo base_url("admin/registrar");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-user"></span><span class="mtext">User Account</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url("home/add_user");?>">Add User</a></li>
							<li><a href="<?php echo base_url("home/view_user");?>">View User</a></li>
						</ul>
					</li>

					<?php elseif($this->session->userdata('level')==='student'):?>
					<li>
						<a href="<?php echo base_url("admin/student");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("student/student_account/view_account");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-user"></span><span class="mtext">myAccount</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("student/student_class/my_class");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-users"></span><span class="mtext">My Class</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("student/Student_account/my_grade");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-list-alt"></span><span class="mtext">Report Card</span></span>
						</a>
					</li>
					
					
					<li>
						<a href="<?php echo base_url("student/Student_account/student_mail");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-envelope"></span><span class="mtext">Mail</span></span>
						</a>
					</li>

					<?php elseif($this->session->userdata('level')==='teacher'):?>
					<li>
						<a href="<?php echo base_url("admin/teacher");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("teacher/setpointscore/set_score");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-bar-chart"></span><span class="mtext">Set Point of Score</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("teacher/subjectteacher/my_class");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-folder"></span><span class="mtext">My Class</span>
						</a>
					</li>
					
					
					<li>
						<a href="<?php echo base_url("teacher/composemail/view_mail");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-envelope"></span><span class="mtext">View Mails</span>
						</a>
					</li>
					<?php else:?>
					<li>
						<a href="<?php echo base_url("admin/parent");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext" style="font-size: 15px;">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("parent/my_account/view_account");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-user"></span><span class="mtext" style="font-size: 14px;">My Account</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("parent/My_account/my_classes");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-users"></span><span class="mtext">My Class</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("parent/My_account/my_schedule");?>" class="dropdown-toggle no-arrow">
							<span class="icon-copy fa fa-reorder" aria-hidden="true"></i></span><span class="mtext">My Schedule</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("parent/My_account/my_pgrade");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-list-alt"></span><span class="mtext" style="font-size: 15px;">Report Card</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("parent/My_account/my_letter");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-envelope"></span><span class="mtext" style="font-size: 15px;">Compose Letter</span>
						</a>
					</li>

					<?php endif;?>
				</ul>
			</div>
		</div>
	</div>