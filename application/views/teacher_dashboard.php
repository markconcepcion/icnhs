
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 20px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Dashboard</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<h4 style="color: #007a99; font-weight: bold;">Advisory</h4>
						<table class="table table-bordered" style="margin-bottom: 20px;">
							<thead>
								<tr>
									<th style="text-align: center;">Grade Level</th>
									<th style="text-align: center;">Section</th>
									<th style="text-align: center;">Strand</th>
									<th style="text-align: center;">Enrolled(Capacity)</th>
									<th style="text-align: center;">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="text-align:center" width="150px">11</td>
									<td style="text-align:center">A</td>
									<td style="text-align:center">STEM</td>
									<td style="text-align:center">30</td>
									<td>
										 
                                    <div class="row">
                                    <div class="col-md-4" style="text-align: right;">
                                        <div class="dropdown">
                                            <a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="fa fa-calendar">Attendance</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                               <div>
                                                   <a class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                Add Attendace
                                                </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/adviser/add_attendance");?>">Quarter 1</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/adviser/add_attendance");?>">Quarter 2</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/adviser/add_attendance");?>">Quarter 3</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/adviser/add_attendance");?>">Quarter 4</a>
                                                    </div>
                                               </div>
                                               
                                                <div>
                                                    <a class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                View Attendace
                                                </a>
                                                     <div class="dropdown-menu dropdown-menu-right">
                                                       <a class="dropdown-item" href="<?php echo base_url("teacher/adviser/view_attendance");?>">Quarter 1</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_attendance");?>">Quarter 2</a>
                                                         <a class="dropdown-item" href="<?php echo base_url("teacher/adviser/view_attendance");?>">Quarter 3</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/adviser/view_attendance");?>">Quarter 4</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                     <div class="col-md-4" style="margin-left: 20px;">
                                     	 <a href="<?php echo base_url("teacher/adviser/student_list");?>" class="btn" style="background: #e67300; color: white;">
                                                <i class="fa fa-list-alt"> Grade </i>
                                            </a>
                                     </div>
									</td>
								</tr>
							</tbody>
						</table>
						<h4 style="color: #009933; font-weight: bold;">My Class Schedule</h4>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Day</th>
									<th>Time</th>
									<th>Subject</th>
									<th>Strand</th>
									<th>Grade</th>
									<th>Section</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Mon</td>
									<td>10:30-11:30am</td>
									<td>Mathematics</td>
									<td>STEM</td>
									<td>11</td>
									<td>A</td>
								</tr>
							</tbody>
						</table>

				</div>
				<!-- Simple Datatable End -->
			</div>
			
