
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 15px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Add Score</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/add_score_quarter");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Add Student's Score</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        
				<!-- Form grid Start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">	
				<h4 style="color: #007a99; margin-bottom: 5px; font-weight: bold;">My Students</h4>	
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Subject</th>
							<th>Day&Time</th>
							<th>Strand</th>
							<th>Grade</th>
							<th>Section</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Math</td>
							<td>Mon 10:00-11:00am</td>
							<td>STEM</td>
							<td>11</td>
							<td>A</td>
							<td>
								<a href="<?php echo base_url("teacher/subjectteacher/create_score");?>" class="btn btn-info" role="button">Add Student's Score</a>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
			</div>

