  
   <div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
      <div class="min-height-200px">
      	<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>My Score as of: 2020-2021</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url("student/student_class/my_class");?>">Back</a></li>
									<li class="breadcrumb-item"><a>My Score</a></li>
									
								</ol>
							</nav>
						</div>
					</div>
				</div>
        <a href="<?php echo base_url("student/student_score/view_score");?>"><button name="view" id="view" class="btn btn-primary">View Class Record</button></a> <a href="pquarterly.php?so=99&&soid=104"></a><br>
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30"><div class="content-page">

                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                      
                                    

                             <div class="col-md-4 col-sm-12">
						
							
							<div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Select Type</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<br><br>
											 <div class='col-sm-10'>
                                                                <div class='form-group '>
    																  <label class="fg-label">Type </label>   <select class="selectpicker form-control" data-style="btn-outline-primary">

                                                                    
                                                                    <option>WRITTEN WORKS</option>
                                                                    <option>PERFORMANCE TASK</option>
                                                                     <option>QUARTERLY ASSESSMENT</option>
                                            

                                                                    </select>

                                                            </div>
                                                        </div>
                                           
                                         <br> <br> <br> <br>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

                                <div class="card-box table-responsive">

						<button class="btn btn-danger pull-left" data-toggle="modal" data-target="#Medium-modal">
                                               <i class="ion-plus"> SET </i>
                                                                     </button> 
                                                                     <br><br>

								<table class="table table-bordered">
								  <thead>
								    <tr>
								      <th scope="col"style="text-align: center">Name</th>
								      <th scope="col"style="text-align: center">Date</th>
								      <th scope="col" style="text-align: center">Score</th>
								      <th scope="col" style="text-align: center">Items</th>
								      <th scope="col" style="text-align: center">Remarks</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tr>
								      <th scope="row" style="text-align: center">Student</th>
								      <th scope="row" style="text-align: center">May 1</th>
								   	  <th scope="row"style="text-align: center">12</th>
								   	  <th scope="row" style="text-align: center">15</th>
								   	  <th scope="row" class="text-primary text-center">Passed</th>
								    </tr>
								    <tr>
								      <th scope="row" style="text-align: center">Student2</th>
								      <th scope="row" style="text-align: center">May 2</th>
								   	  <th scope="row"style="text-align: center">6</th>
								   	  <th scope="row" style="text-align: center">10</th>
								   	  <th scope="row" class="text-danger text-center">Fail</th>
								    </tr>
								  </tbody>
								</table>
							
                                      

                                    
                              </div>
                          </div>
                     </div>
                        
                    </div>
                        
                    </div>
                    <!-- end container -->

                </div>
            </div>
          </div>
          </div>
          </div>  