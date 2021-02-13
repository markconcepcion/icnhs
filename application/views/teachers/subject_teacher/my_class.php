    <div class="main-container">
        <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>My Class</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                     <li class="breadcrumb-item"><a href="<?php echo base_url("teacher/subjectteacher/select_semester");?>">Back</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> Class List</li
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
        
                <!-- Form grid Start -->
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">   
            
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" style="margin-top: 5px; margin-bottom: 75px;">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Subject</th>
                            <th style="text-align: center;">Day&Time</th>
                            <th style="text-align: center;">Strand</th>
                            <th style="text-align: center;">Grade</th>
                            <th style="text-align: center;">Section</th>
                            <th style="text-align: center;">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="text-align:center" width="150px">Math</td>
                            <td style="text-align:center">Mon 10:00-11:00am</td>
                            <td style="text-align:center">STEM</td>
                            <td style="text-align:center">11</td>
                            <td style="text-align:center">A</td>
                            <td>
                                    <div class="row">
                                    <div class="col-md-4" style="text-align: right;">
                                        <div class="dropdown">
                                            <a class="btn btn-info dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="fa fa-calendar">Attendance</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                               <div>
                                                   <a class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                Add Attendace
                                                </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/mark_attendance");?>">Quarter 1</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/mark_attendance");?>">Quarter 2</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/mark_attendance");?>">Quarter 3</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/mark_attendance");?>">Quarter 4</a>
                                                    </div>
                                               </div>
                                               
                                                <div>
                                                    <a class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                View Attendace
                                                </a>
                                                     <div class="dropdown-menu dropdown-menu-right">
                                                       <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_attendance");?>">Quarter 1</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_attendance");?>">Quarter 2</a>
                                                         <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_attendance");?>">Quarter 3</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_attendance");?>">Quarter 4</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>
                                    <div class="col-md-4">
                                        <div class="dropdown">
                                            <a class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown" style="background: #00cc7a; color: white;">
                                                <i class="fa fa-bar-chart">Score</i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div>
                                                     <a class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                Add Score
                                                </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/create_score");?>">Quarter 1</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/create_score");?>">Quarter 2</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/create_score");?>">Quarter 3</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/create_score");?>">Quarter 4</a>
                                                    </div>
                                                </div>
                                                   <div>
                                                         <a class="btn dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                View Score
                                                </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_scorebytype");?>">Quarter 1</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_scorebytype");?>">Quarter 2</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_scorebytype");?>">Quarter 3</a>
                                                        <a class="dropdown-item" href="<?php echo base_url("teacher/subjectteacher/view_scorebytype");?>">Quarter 4</a>
                                                    </div>
                                                   </div>
                                            </div>
                                        </div>      
                                    </div>
                                     <div class="col-md-4" style="margin-left: -35px;">
                                        <a href="<?php echo base_url("teacher/subjectteacher/view_grade");?>" class="btn" style="background: #e67300; color: white;">
                                                <i class="fa fa-list-alt">View Final Grade </i>
                                            </a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                </div>
            </div>

