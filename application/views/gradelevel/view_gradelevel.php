<style type="text/css">
	span{
		color: dimgrey;
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 20px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>List of Grade Level</h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<div>
								<a class="btn btn-primary" href="<?php echo base_url("home/add_gradelevel");?>" role="button">
									Add Grade Level
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<!-- <div class="clearfix mb-20">
						<div class="pull-left">
							<h5 class="text-green">ICNHS Users(Parents, Teachers, Students)</h5>
						</div>
					</div> -->
					<div class="row">
						<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">No</th>
									<th>Grade</th>
									<th>Section</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">1</td>
									<td>11</td>
									<td>Hope</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" class="btn-block" data-toggle="modal" data-target="#Medium-modal" type="button"><i class="fa fa-eye"></i> View</a>
												<a class="dropdown-item" href="<?php echo base_url("home/edit_grade");?>"><i class="fa fa-pencil"></i> Edit</a>

												<!-- The Modal -->
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
			</div>
							<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title text-blue" id="myLargeModalLabel">Grade __ Section __ Information</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body" style=" font-size: 20px;">
											<ul class="text-mar">
												<li style="margin-bottom: 15px;">
													
													<span>School ID:</span>
													1190435
												</li>
												<li style="margin-bottom: 15px;">	
													<span>School Year:</span>
													2020-2021
												</li>
												<li style="margin-bottom: 15px;">
													
													<span>Semester:</span>
													1st Semister
												</li>
												<li style="margin-bottom: 15px;">	
													<span>Grade:</span>
													11
												</li>
												<li style="margin-bottom: 15px;">	
													<span>Section:</span>
													Hope
												</li>
												<li style="margin-bottom: 15px;">
													<span>Strand:</span>
													STEM
												</li>
												<li style="margin-bottom: 15px;">
													<span>Adviser:</span>
													ferdinand Aman
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>