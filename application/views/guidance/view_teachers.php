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
								<h4>List of Teachers</h4>
							</div>
						</div>
					</div>
				</div>
				<!-- Simple Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row">
						<table class="data-table stripe hover nowrap">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">Name</th>
									<th>Class Adviser of</th>
									<th>Strand</th>
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table-plus">Kathryn Bernardo</td>
									<td>11-A</td>
									<td>STEM</td>
									<td>
										<div class="row">
											<a class="btn btn-info" href="<?php echo base_url("guidance/view_profile");?>" role="button" style="margin-right: 5px; ">
														View Profile
													</a>
											<a class="btn btn-success" href="<?php echo base_url("guidance/view_mystudents");?>" role="button" style="color: white;">
														View Students
													</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
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