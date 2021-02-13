<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ICNHS-SPRMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
	
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url("vendors/styles/style.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/standard.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/datatables/media/css/jquery.dataTables.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/datatables/media/css/dataTables.bootstrap4.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/datatables/media/css/responsive.dataTables.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/cropperjs/dist/cropper.css");?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/plugins/jquery-steps/build/jquery.steps.css");?>">
<!-- 	<link rel="stylesheet" type="text/css" href="<?php echo base_url("src/styles/print.css");?>" media="print">
 -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script> -->
	
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119386393-1');
	</script>

</head>
<style type="text/css">
.modal-body {
	background: #eaeff0 !important;
}
.sidebar-menu .dropdown-toggle:hover, .sidebar-menu .show > .dropdown-toggle{
	background: #6b6e6f;
    color: #17a2b8 !important;
}
.sidebar-menu .dropdown-toggle:hover .fa, .sidebar-menu .show > .dropdown-toggle .fa{
	color: #17a2b8 !important;
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

.printOnly { display: none; }

@media print { 
	.noprint { display:none; } 
	.printOnly { display: block; }
	.noBorderPrint { box-shadow:none; border:0 }
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
	-webkit-transition: all 0.1s ease-in-out;
	-moz-transition: all 0.1s ease-in-out;
	-o-transition: all 0.1s ease-in-out;
	transition: all 0.1s ease-in-out;
}
.sidebar-menu .submenu li a:hover, .sidebar-menu .submenu li a.active{
	color: #17a2b8 !important;
}

.sidebar-menu .dropdown-toggle.active, .sidebar-menu .dropdown-toggle.active .fa{
	color: #17a2b8 !important;
	background: #6b6e6f;
}
/* background: #6b6e6f;
    color: #17a2b8; */
h1, h2, h3, h4, h5, h6, option{ font-family: monospace !important; }

body, button, input, select, a, p{
	font-family: monospace !important;
	font-size: 15px !important;
}

.hidden{ display:none }

.sb-logo-div {
	background: #6c757d;
}

.sb-logo-a {
	padding: 10px !important;
	display: inline-flex !important;
}

.sb-logo {
	border-radius: 50%;
	margin: 5px 0 !important;
	border: .5px solid white;
}

.sb-header {
	padding: 25px 15px;
	font-weight: bolder;
	color: white;
}

.sb-links {
	color:black !important;
}

.box-shadow {
	box-shadow: -3px -3px 5px 0px black !important; 
}

p.req-msg, span.required {
	color: red !important;
}

.modal-title, .close {
	color: white !important;
}

.no-width-pd {
	padding-left: 0 !important;
	padding-right: 0 !important;
}

.no-height-pd {
	padding-top: 0 !important;
	padding-bottom: 0 !important;
}

</style>

<body>
	<div class="pre-loader"></div>
	<div class="header clearfix noprint">
		<div class="header-right"  style=" background-color:#6c757d;">
			<div class="brand-logo">
				<a href="#">
					<img src="" alt="" class="mobile-logo">
					ICNHS-SPRMS
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
					<a class="dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<i class="fa fa-user-o text-white"></i>
						</span>
						<span class="user-name text-white" style="font-family:monospace">
							<?php echo ucfirst( $this->session->userdata('username') );?>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<!-- <a class="dropdown-item" href="<?php echo base_url("guidance/view_profile");?>"><i class="fa fa-user-md" aria-hidden="true"></i> View Profile</a> -->
						<a class="dropdown-item" href="<?php echo base_url("Login/logout");?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="left-side-bar noprint">
		<div class="brand-logo sb-logo-div">
			<a class="sb-logo-a" href="index.php">
				<img class="sb-logo" src="<?php echo base_url( 'assets/images/icon-logo.jpg' ); ?>" width="70" alt="Icon Logo">
				<h5 class="sb-header">ICNHS-SPRMS</h5>
			</a>
		</div>
		<div class="menu-block customscroll" style="background: linear-gradient(-45deg, black, transparent);">
			<div class="sidebar-menu">

				<div class="text-center pd-10" style="background:#17a2b8">
					<h4 class="text-white"><?php echo ucfirst( $this->session->userdata('level') ); ?></h4>
				</div>

				<ul id="accordion-menu">
					<?php if($this->session->userdata('level')==='guidance'):?>
					<li>
						<a href="<?php echo base_url( 'guidance_home' ); ?>" id="guidance_home" class="dropdown-toggle no-arrow sb-links">
							<span class="sb-links fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url( 'guidance_user' ); ?>" id="guidance_user" class="dropdown-toggle no-arrow sb-links">
							<span class="sb-links fa fa-user"></span><span class="mtext">User Account</span>
						</a>	
					</li>
					<li>
						<a href="<?php echo base_url( 'guidance_settings' ); ?>" id="guidance_settings" class="dropdown-toggle no-arrow sb-links">
							<span class="sb-links fa fa-tasks"></span><span class="mtext">Class Settings</span>
						</a>	
					</li>
					<li>
						<a href="<?php echo base_url( 'guidance_class' ); ?>" id="guidance_class" class="dropdown-toggle no-arrow sb-links">
							<span class="sb-links fa fa-file-text-o"></span><span class="mtext">Manage Class</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url( 'guidance_student' ); ?>" id="guidance_student" class="dropdown-toggle no-arrow sb-links">
							<span class="sb-links fa fa-group"></span><span class="mtext">Student's Record</span>
						</a>
					</li>
					<?php elseif($this->session->userdata('level')==='registrar'):?>
					<li>
						<a href="<?php echo base_url("admin/registrar");?>" class="dropdown-toggle no-arrow sb-links">
							<span class="sb-links fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle sb-links">
							<span class="sb-links fa fa-user"></span><span class="mtext">User Account</span>
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
						<a href="<?php echo base_url("student/student_profile");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-user"></span><span class="mtext">myAccount</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("student/class_schedule");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Class Schedule</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("student/form138");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-list-alt"></span><span class="mtext">Form138</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("student/score");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-bar-chart"></span><span class="mtext">Score</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("student/attendance");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar"></span><span class="mtext">Attendace</span></span>
						</a>
					</li>

					<?php elseif($this->session->userdata('level')==='teacher'):?>
					<li>
						<a href="<?php echo base_url("admin/teacher");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<!-- <li>
						<a href="<?php echo base_url("teacher/myaccount/view_profile");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-user"></span><span class="mtext">myAccount</span>
						</a>
					</li> -->
					<li>
						<a href="<?php echo base_url("teacher/setpointscore/set_score");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-bar-chart"></span><span class="mtext">Set Point of Score</span>
						</a>
					</li>
					<!-- <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-folder"></span><span class="mtext">As Adviser</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url("teacher/subjectteacher/view_mystudentgrade");?>">View Grades(by Subject)</a></li>
							<li><a href="<?php echo base_url("teacher/subjectteacher/add_studentfinalgrade");?>">Add Grade(by Student)</a></li>
							<li><a href="<?php echo base_url("teacher/subjectteacher/student_finalgrade");?>">View Grade(by Student)</a></li>
						</ul>
					</li> -->
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
					<!-- <li>
						<a href="<?php echo base_url("admin/teacher");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("teacher/teacher_profile");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-user"></span><span class="mtext">myAccount</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-calendar"></span><span class="mtext">Student Attendance</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url("teacher/add_attendance");?>">Add Attendance</a></li>
							<li><a href="<?php echo base_url("teacher/view_attendance");?>">View Attendance</a></li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url("teacher/add_score");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-list-alt"></span><span class="mtext">Student Score</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("teacher/class_record");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-bar-chart"></span><span class="mtext">Class Record</span></span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("teacher/submit_grade");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-paper-plane"></span><span class="mtext">Submit Grade</span></span>
						</a>
					</li> -->

					<?php else:?>
					<li>
						<a href="<?php echo base_url("home/homepage");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("parents/form138");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-list-alt"></span><span class="mtext">Student's Form138</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("parents/score");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-bar-chart"></span><span class="mtext">Student's Score</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url("parents/attendance");?>" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar"></span><span class="mtext">Student's Attendance</span>
						</a>
					</li>

					<?php endif;?>
				</ul>
			</div>
		</div>
	</div>