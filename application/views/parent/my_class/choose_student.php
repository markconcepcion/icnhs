<style type="text/css">
	.text-field{
		background: transparent;
		border: 0px;
		border-bottom: 1px solid black;
	}
	th, td{
    border: 1px solid #4d4d4d;
    padding-left: 10px;
	}
	th{
		width: 300px;
		height: 20px;
		text-align: center;
	}
	td{
		height: 33px;
	}
	.line{
		border: 1px dashed #00e6b8;
		margin-bottom: 20px; 
	}
</style>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header" style="margin-bottom: 10px;">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>View Grade</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("parent/Mystudent_classschedule/select_student");?>">Back</a></li>
									<li class="breadcrumb-item active" aria-current="page">View Grade by Semester</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
        				
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30" >
					<div class="row" style="margin-bottom: 25px;">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<label style="font-weight: bold;">Choose Student to View Grade:</label>
								</div>
								<div class="col-md-8">
									<select class="form-control">
										<option>Julia Montes</option>
										<option>John Montes</option>
									</select>		
								</div>		
							</div>		
						</div>
					</div>
					<div class="btn-list" style="justify-content: center; display: flex; align-items: center;">
							<a href="" class="btn btn-secondary"> Cancel</a>
							<a href="" class="btn btn-primary"> Proceed</a>
						</div>
				</div>
			</div>
		</div>
	</div>	