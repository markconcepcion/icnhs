<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="min-height-200px">
			<form id="SetTimelineForm" action="<?php echo base_url( 'guidance/home/setTimeline' ); ?>">
				<div class="row" style="margin-top: 10px;">

					<!-- SELECT SCHOOL YEAR TO SET -->
					<div class="col-md-3 col-sm-12">
						<div class="form-group row">
							<label class="col-sm-12 col-md-6 col-form-label">School Year:</label>
							<div class="col-sm-12 col-md-6 pd-0">
								<select class="form-control" id="SetSYField">
									<?php foreach ( $year as $sy ) {
										if ( $sy['timelineType'] == 'SY' ) {
											$timelineDesc = explode( ' ', $sy['timelineDesc'] );
											echo '<option value="'.$sy['IDtimeline'].'">'.$timelineDesc[1].'</option>';
										}
									} ?>
								</select>
							</div>
						</div>
					</div>

					<!-- SELECT SEMESTER TO SET -->
					<div class="col-md-3 col-sm-12">
						<div class="form-group row">
							<label class="col-sm-12 col-md-4 col-form-label">Semester:</label>
							<div class="col-sm-12 col-md-8">
								<select class="form-control" id="SetSemField">
									<option value="1">1st</option>
									<option value="2">2nd</option>
								</select>
							</div>
						</div>
					</div>

					<!-- SAVE -->
					<div class="col-md-6 col-sm-12 pd-0">
						<button class="btn btn-info" type="sumbit">Set Timeline</button>
					</div>
				</div>
			</form>

			<div class="page-header" style="margin-bottom: 15px;">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Logs and Activities</h4>
						</div>
					</div>
				</div>
			</div>

			<!-- Form grid Start -->

			<div class="pd-vr-10 bg-white border-radius-4 box-shadow mb-30">	
				<table class="data-table stripe hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort hide-md" ></th>
							<th>Date</th>
							<th>Name</th>
							<th>Position</th>
							<th>Log Description</th>
						</tr>
					</thead>
					<tbody id="logsBody">
						<?php foreach ( $logs as $l) { ?>
							<tr>
								<td class="table-plus datatable-nosort hide-md" ></td>
								<td width="17%"><?php echo date('m/d/Y h:ia', strtotime($l['dateTime']) ); ?></td>
								<td width="30%"><?php echo ucfirst( $l['name'] ); ?></td>
								<td width="08%"><?php echo ucfirst( $l['user_level'] ); ?></td>
								<td width="45%"><?php echo ucfirst( $l['description'] ); ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
