
  <div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
      <div class="min-height-200px">
        <div class="page-header">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="title">
                <h4> MATH</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url("teacher/Subjectteacher/view_advisory");?>">Back</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Subject Teacher: John Doe</li>
                </ol>
              </nav>
              <ul class='actions pull-left'>
                               <div class="inline">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>DATE:</label>
                                <select class="selectpicker form-control" name="dzib1" id="dzib1" required="true">
                                   
                                    <option>1st Quarter</option>
                                                                      

                                </select>
                       
                            </div>
                                <br>
                               &nbsp; <button type="submit" name="detzib1" id="detzib1" class="btn btn-primary">submit</button>
               </ul>
            </div>                   
          </div> 
         
                  <div class="col-md-6 col-sm-12 text-left">
                    <div class="action-header clearfix ">
                            
                     <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Notification</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                      </div>

                                                        <br>
                                                        <div class="modal-body">
                                                                <div class="row">
                                                                    <div class='col-md-6'>
                                                                      <div class='form-group fg-float'>
                                                                           
                                                                            <label for="field-3"class="control-label">Name</label>
                                                                            <input type='text' name='lrn' id='lrn' class='form-control fg-input hide' placeholder="0" >
                                                                            
                                                                            
                                                                      </div>
                                                                    </div>
                                                                </div>
                                                             <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group fg-float">
                                                                        <label for="field-6" class="control-label">Message</label>
                                                                        <textarea class="form-control autogrow" id="field-18" placeholder="WARNING! Absences that are not valid will cause you to GUIDANCE Councelling, If too much, you will be DROP in class." value="WARNING! Absences that are not valid will cause you to GUIDANCE Councelling, If too much, DROP" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 200px;"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div>
                                                            <h4>NOTE: This message is only recieved by the Student. <strong>FOR NOW.</strong></h4>
                                                            </div
                                                            <div>
                                                               <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                  <button type="button" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                      </div>      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                       </div>
                     </div>        

          <div class="row">
           <div class="card-box table-responsive">
              <table id="datatable" class= "table table-striped table-bordered">

                                <thead>
                                            <tr>
                                                <th><b>ID</b></th>
                                                <th><b>Name</b></th>
                                                <th colspan="3" class="text-center table-bordered"><b>1st Quarter of 2020-2021</b></th> 
                                                <th><b>Total Present Days:</b></th> 
                                                <th class="text-center"><b>Action</b></th>
                                                
                                                
                                                
                                             </tr>
                                        </thead>
                                        <thead>
                                            <tr>
                                                <th> </th>
                                                <th> </th>
                                                <th colspan="3" class="text-center table-bordered"><b>Month</b></th>
                                                
                                                <th><b class="text-success"><big>Present Days 87</big></b></th>
                                                
                                                <th> </th>
                                                
                                                 
                                                
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td>May</td>
                                                <td>June</td>
                                                <td>July</td>
                                                <td> </td>
                                          </tr>
                                        </thead>


                                        <tbody>
                       
                                        
                                       
                                           
                                            <tr>
                                            
                                                <td>12145454 </td>
                                                <td>Jessa Mae Dalida </td>
                                                 <td class="text-center"> <b class="text-primary"><small>PRESENTS</small> <big>26</big>  </b> / <b class="text-danger"><small>Absents</small> <big>2</big></b></td>
                                               <td class="text-center"> <b class="text-primary"><small>PRESENTS</small> <big>28</big>  </b> / <b class="text-danger"><small>Absents</small> <big>1</big></b></td>
                                               <td class="text-center"> <b class="text-primary"><small>PRESENTS</small> <big>27</big>  </b> / <b class="text-danger"><small>Absents</small> <big>3</big></b></td>
                                               <td class="text-center"> <b class="text-primary"><small>PRESENTS</small> <big>81</big>  </b> / <b class="text-danger"><small>Absents</small> <big>6</big></b></td>
                                                
                                             
                                                
                                                  
                                                
                                                 <td class="text-center">
                                                 
                                               <button class="btn btn-primary" data-toggle="modal" data-target="#Medium-modal">
                                                <i class="md-edit"> Notification</i>
                                                </td>
                                                
                                            </tr>                  
                                                
                                            

                                        </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  

  
