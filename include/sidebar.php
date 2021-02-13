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

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="vendors/images/deskapp-logo.png" alt="">
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li>
						<a href="sitemap.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-home"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-user"></span><span class="mtext">User Account</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>home/add_user">Add User</a></li>
							<li><a href="view_user.php">View User</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-tasks"></span><span class="mtext">Grade Level Info</span>
						</a>
						<ul class="submenu">
							<li><a href="add_teacher.php">Add Grade Level</a></li>
							<li><a href="index2.php">View View Grade Level</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-group"></span><span class="mtext">Students</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.php">Add Student</a></li>
							<li><a href="advanced-components.php">View Student</a></li>
						</ul>
					</li>
					<li>
						<a href="invoice.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-id-card"></span><span class="mtext">Classes</span>
						</a>
					</li>
					<li>
						<a href="chat.php" class="dropdown-toggle no-arrow">
							<span class="fa fa-calendar-o"></span><span class="mtext">Event</span></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

