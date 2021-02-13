
  <div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
      <div class="min-height-200px">
        <div class="page-header" style="margin-bottom: 20px;">

          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="title">
                <h4>Select subject to view grades</h4>
              </div>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url("admin/student");?>">Back</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View summary grades</li>
                </ol>
              </nav>
           
          </div>
        </div>
          
        </div>
        <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
          <h4 style="color: #007a99; font-weight: bold;">Select subject</h4>
            <table class="table table-bordered" style="margin-bottom: 20px;">
              <thead>
                <tr>
                  <th>Subject</th>
                  <th>Description</th>
                  <th>Teacher</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Math 1</td>
                  <td>General Mathematics</td>
                  <td>John Doe</td>
                  <td>
                    <a class="btn btn-info" href="<?php echo base_url("student/Student_account/view_reportcard");?>" role="button" style="margin-right: 5px; ">
                      Summary Grade</a>
                  </td>
                </tr>
              </tbody>
            </table>
            

        </div>
        <!-- Simple Datatable End -->
      </div>
      
