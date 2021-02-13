
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
@media print
{
.noprint {display:none;}
}

@media screen
{
...
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
						<!-- <a class="dropdown-item" href="<?php echo base_url("guidance/view_profile");?>"><i class="fa fa-user-md" aria-hidden="true"></i> View Profile</a> -->
						<a class="dropdown-item" href="<?php echo base_url("Login/logout");?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a>
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
						<a href="<?php echo base_url("guidance_home");?>" class="dropdown-toggle no-arrow">
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
					</li>
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
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header noprint" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Class Schedule</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/view_students");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Class Schedule</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" >
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-sm-12 col-md-6">
						<ul>
							<li>
								<span style="font-weight: bold;">Name:</span>
							</li>
							<li>
								<span style="font-weight: bold;">Strand:</span>
							</li>
						</ul>
					</div>
					<div class="col-sm-12 col-md-6">
						<ul>
							<li>
								<span style="font-weight: bold;">Grade & Section:</span>
							</li>
							<li>
								<span style="font-weight: bold;">School Year & Semister:</span>
							</li>
						</ul>
					</div>
					</div>
					<table class="table table-bordered">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Subject</th>
									<th>Teacher</th>
									<th>Day</th>
									<th>Time</th>
									
								</tr>
							</thead>
							<tbody>
								<tr style="border-style:">
									<td class="table-plus">Math</td>
									<td>Enrique Gil</td>
									<td>Mon</td>
									<td>01:30pm-3:00pm</td>
									
								</tr>
								<tr>
									<td class="table-plus">Math</td>
									<td>Enrique Gil</td>
									<td>Mon</td>
									<td>01:30pm-3:00pm</td>
									
								</tr>
							</tbody>
					</table>
					<div style="justify-content: center; display: flex; align-items: center;">
						<button class="btn btn-success noprint" onclick="window.print()">Print Schedule</button>	
					</div>
					

				</div>

			</div>
		</div>
	</div>	

		</div>
	</div>
	<script src="<?php echo base_url("vendors/scripts/script.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/jquery.dataTables.min.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/dataTables.bootstrap4.js")?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/dataTables.responsive.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/responsive.bootstrap4.js");?>"></script>
	<!-- buttons for Export datatable -->
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/dataTables.buttons.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/buttons.bootstrap4.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/buttons.print.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/buttons.html5.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/buttons.flash.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/pdfmake.min.js");?>"></script>
	<script src="<?php echo base_url("src/plugins/datatables/media/js/button/vfs_fonts.js");?>"></script>
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				'copy', 'csv', 'pdf', 'print'
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>
</body>
</html>


	

	