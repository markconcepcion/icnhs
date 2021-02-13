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
								<h4>View Students</h4>
							</div>
								<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("guidance/view_sy");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">List of Students per Section</li>
								</ol>
							</nav>
						</div>
					</div>

				</div>

				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row" style="margin-bottom: 10px;">
						<ul class="col-md-6 col-sm-12">
							<li>
								<span style="font-weight: bold;">Grade:</span>
							</li>
								<li>
								<span  style="font-weight: bold;">Section:</span>
							</li>
						</ul>
						<ul class="col-md-6 col-sm-12">
							<li>
								<span  style="font-weight: bold;">Strand:</span>
							</li>
								<li>
								<span  style="font-weight: bold;">Adviser:</span>
							</li>
						</ul>
					</div>
					
					<table class="table table-bordered">
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
											<a class="btn btn-info" href="<?php echo base_url("guidance/view_studentsprof");?>" role="button" style="margin-left: 15px; ">
														View Profile
													</a>
											<a class="btn btn-success" href="<?php echo base_url("guidance/view_studentclass2");?>" role="button" style="color: white; margin-left: 15px;">
														View Schedule
													</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
				</div>
			</div>

			
<!-- 
			<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel" style="align-content: center;">Select Name of Student to Enroll</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<form>
											<div class="modal-body">
												<p style="font-style: italic; color: #ff5c33; font-size: 12px;">Note: The name will appeare in the selection below once it is registered in the user account page.</p>
												<div class="row" style="margin-left: 5px; margin-right: 5px;">
													<select class="form-control">
														<option>Kathryn Bernardo</option>
														<option>Daniel Padilla</option>
													</select>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Next</button>
											</div>
										</form>
									</div>
								</div>
							</div> -->