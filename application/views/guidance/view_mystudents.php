
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>List of Students</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/view_teachers");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Class Students</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" >
					<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Name</th>
									<th>LRN</th>
									<th>Address</th>
									<th>Status</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">Kathryn Bernardo</td>
									<td>90843287424</td>
									<td>Prk. 2, Pala-o, Iligan City</td>
									<td>Active</td>
									<td>
										<div class="row">
											<a class="btn btn-info" href="<?php echo base_url("guidance/view_studentprofile");?>" role="button" style="margin-right: 5px; ">
														View Profile
													</a>
											<a class="btn btn-warning" href="<?php echo base_url("guidance/view_studentclass");?>" role="button" style="color: white; margin-right: 5px;">
														View Schedule
													</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
				</div>
			</div>
		</div>
	</div>	