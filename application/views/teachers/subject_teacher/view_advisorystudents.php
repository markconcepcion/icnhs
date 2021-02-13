
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 20px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>My Students</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/Subjectteacher/view_advisory");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Students' List</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
						<div class="row" style="margin-bottom: 25px;">
							<div class="col-md-3">
								<ul>
									<li>
										School Year:
										<span style="font-weight: bold;">2020-2021</span>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										Grade Level:
										<span style="font-weight: bold;">11</span>
									</li>
								</ul>
							</div>
							
							<div class="col-md-3">
								<ul>
									<li>
										Section:
										<span style="font-weight: bold;">Mahogany</span>
									</li>
								</ul>
							</div>
							<div class="col-md-3">
								<ul>
									<li>
										Strand:
										<span style="font-weight: bold;">STEM</span>
									</li>
								</ul>
							</div>
						</div>
						<table class="table table-bordered" style="margin-bottom: 20px;">
							<thead>
								<tr>
									<th>LRN</th>
									<th>Last Name</th>
									<th>FIrst Name</th>
									<th>Middle Name</th>
									<th>Address</th>
									<th>Contact Number</th>
									<th>Email</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>11908432</td>
									<td>Amanda</td>
									<td>Clarin</td>
									<td>Monroe</td>
									<td>Misamis Oriental</td>
									<td>0957305342</td>
									<td>amanda@gmail.com</td>
									<td>Active</td>
									<td>
										<a class="btn btn-info" href="<?php echo base_url("teacher/subjectteacher/advisory_studentprofile");?>" role="button" style="margin-right: 5px; ">
											View Record</a>
									</td>
								</tr>
							</tbody>
						</table>

				</div>
				<!-- Simple Datatable End -->
			</div>
			
