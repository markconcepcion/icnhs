<
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header noprint">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Students' Grade</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/view_mystudentgrade");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Grade(by Semester)</li>
								</ol>
							</nav>
							<div class="btn-list right" style="margin-top: -15px;">
								<a class="btn btn-success right" href="<?php echo base_url("teacher/subjectteacher/view_mystudentgrade");?>" role="button" style="color: white;" onclick="window.print()">
											Print Grade</a>
								<button class="btn btn-primary" class="btn mb-20 btn-outline-primary" type="button" id="sa-success">Submit Grade</button>
							</div>	
						</div>
					</div>
				</div>
        
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">Semester:</span>
									<input type="text" class="text-field" value="1" readonly="" style="text-align:center">
								</li>
								<li>
									<span style="font-size: 15px;">Subject:</span>
									<input type="text" class="text-field" value="Math" readonly="" style="text-align:center">
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
									<span style="font-size: 15px;">Grade:</span>
									<input type="text" class="text-field" value="11" readonly="" style="text-align:center">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">Strand:</span>
									<input type="text" class="text-field" value="STEM" read style="text-align:center" style="text-align:center">
									
								</li>
								<li>
									<span style="font-size: 15px;">Section:</span>
									<input type="text" class="text-field" value="Mahogany" readonly="" style="text-align:center">
								</li>
							</ul>
						</div>
					</div>
					<table class="table-color">
						<thead>
							<tr>
								<th scope="col" style="text-align:center">Learner's Name</th>
								<th scope="col" style="text-align:center">Quarter 1</th>
								<th scope="col" style="text-align:center">Quarter 2</th>
								<th scope="col" style="text-align:center">Semester Final Grade</th>
								<th scope="col" style="text-align:center">Action</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="text-align:center">Acruz, Azel</td>
								<td style="text-align:center">82</td>
								<td style="text-align:center">84</td>
								<td style="text-align:center">83</td>
								<td style="text-align:center">
								<a href="<?php echo base_url("");?>" class="btn btn-info" role="button">Edit</a>
							</td>
							</tr>
						</tbody>
					</table>
					
				</div>
			</div>
	
		</div>
	</div>
	
	

	