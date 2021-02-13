 


	
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header noprint">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4> My Advisory</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("admin/teacher");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Advisory(by Semester)</li>
								</ol>
							</nav>
							<div class="btn-list right" style="margin-top: -15px;">
								
								<a class="btn btn-info" href="<?php echo base_url("teacher/subjectteacher/view_advisorystudents");?>" role="button" style="margin-right: 5px; ">
											View Students</a>
							</div>	
						</div>
					</div>
				</div>
        
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">Section:</span>
									<input type="text" class="text-field" value="Mahogany" readonly="" style="text-align:center">
								</li>
								<li>
									<span style="font-size: 15px;">Grade Level:</span>
									<input type="text" class="text-field" value="11" readonly="" style="text-align:center">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">SchoolYear:</span>
									<input type="text" class="text-field" value="2020-2021" readonly="" style="text-align:center">
								</li>
								<li>
									<span style="font-size: 15px;">Strand:</span>
									<input type="text" class="text-field" value="STEM" readonly="" style="text-align:center">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								
								<li>
									<span style="font-size: 15px;">Semester:</span>
									<input type="text" class="text-field" value="1st" readonly="" style="text-align:center">
								</li>
							</ul>
						</div>
					</div>
							<table class="table-color">
								<thead>
									<tr>
										<th scope="col" style="text-align:center">Subject</th>
										<th scope="col" style="text-align:center">Teacher</th>
										<th scope="col" style="text-align:center">Schedule</th>
										<th scope="col" style="text-align:center">Action</th>

									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="text-align:center">Math 1</td>
										<td style="text-align:center">John Doe</td>
										<td style="text-align:center">7:30 - 9:00</td>
										<td style="text-align:center">
										<div class="btn-group dropdown">
		                                            <button type="button" class="btn btn-info dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Class <span class="caret"></span> </button>
		                                            <div class="dropdown-menu">
		                                                <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/advisory_classrecord");?>">Class Record</a>
		                                                <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/advisory_quarterlyreports");?>">Quarterly Reports</a>
		                                            </div>
		                                            
		                                             <?php 
		                                             echo '|';
		                                             ?>

		                                     	<div class="btn-group dropdown">
		                                            <button type="button" class="btn btn-success dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Attendance <span class="caret1"></span> </button>
		                                            <div class="dropdown-menu">
		                                                <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/advisory_monthlyattendance");?>">Monthly Attendance</a>
		                                                <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/advisory_quarterlyattendance");?>">Quarterly Attendance</a>
		                                            </div>
		                                	    </div>
		                                	</div>    
										</td>
									</tr>	
								</tbody>
							</table>
							<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting pd-20 bg-white border-radius-4 box-shadow mb-30">
							</div>
										</div>
				</div>
			</div>
		</div>
	</div>	
	