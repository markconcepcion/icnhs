<style type="text/css">
	.text-field{
		background: transparent;
		border: 0px;
		border-bottom: 1px solid skyblue;
		padding-left: 15px;
	}
	.f{

		border: 1px solid skyblue;

	}

	th, td{
    border: 1px solid #4d4d4d;

	}
	th{
		width: 300px;
		height: 20px;
		text-align: center;
	}
	td{
		height: 33px;
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 10px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Edit Grade</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/student_finalgrade");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">Edit Grade(by Student)</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" >
					<div class="row" style="margin-bottom: 20px;">
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">SchoolYear:</span>
									<input type="text" value="2020-2021" class="text-field">
								</li>
								
								<li>
									<span style="font-size: 15px;">Adviser:</span>
									<input type="text" value="Charo Santos" class="text-field">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">Semester:</span>
									<input type="text" value="1" class="text-field">
								</li>
								<li>
									<span style="font-size: 15px;">Grade:</span>
									<input type="text" value="11" class="text-field">
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li style="margin-bottom: 8px;">
									<span style="font-size: 15px;">Strand:</span>
									<input type="text" value="STEM" class="text-field">
									
								</li>
								<li>
									<span style="font-size: 15px;">Section:</span>
									<input type="text" value="Mahogany" class="text-field">
								</li>
							</ul>
						</div>
					</div>
					<div class="row" style="margin-right: 5px; margin-left: 5px; margin-bottom: 20px;">
						<table>
							<thead>
								<tr>
									<th rowspan="3">Learner's Name</th>
									<th colspan="2">Quarter Grade</th>
									<th rowspan="3">Final Grade</th>
									<th rowspan="3">Remarks</th>
								</tr>
								<tr>
									<th>1</th>
									<th>2</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="" class="form-control f" value="kath Bernardo" name=""></td>
									<td><input type="" class="form-control f" value="88" name=""></td>
									<td><input type="" class="form-control f" value="88" name=""></td>
									<td><input type="" class="form-control f" value="88" name=""></td>
									<td><input type="" class="form-control f" value="PASSED" name=""></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
														<button class="btn btn-secondary" type="submit">Cancel</button>
														<input class="btn btn-primary" type="submit" value="Edit">
													</div>
				</div>
			</div>
		</div>
	</div>	