<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">

            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Add Transferee</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo base_url( 'guidance_class' ); ?>">
                                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        Back
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><b>Add Transferee Form</b></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 bg-white border-radius-4 box-shadow">

                        <?php echo form_open( 'guidance/ClassManager/save_transferee' ); ?>
                                
                            <p class="req-msg"></p>
                            
                            <div class="row text-left">
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">Last Name<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="lastname">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">First Name<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="firstname">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">Middle Name<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="middlename">
                                </div>
                            </div>
                            
                            <div class="row text-left">
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">LRN<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="studentLRN" id="studentLRN">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">Sex (M/F)<span class="required">*</span></label>
                                    <select required class="form-control" name="gender">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">Birthdate<span class="required">*</span></label>
                                    <input required class="form-control date-picker" placeholder="Select Birthdate" type="text" name="birthdate">
                                </div>
                            </div>
                            
                            <div class="row text-left">
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">Mother Tongue<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="mothertongue">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">IP (Ethnic Group)<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="ethnicity">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">Religion<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="religion">
                                </div>
                            </div>

                            <div class="row text-left">
                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="">House #/Street/Sitio<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="sitio">
                                    <br>
                                    <label for="">Municipality/City<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="municity">
                                </div>
                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="">Barangay<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="barangay">
                                    <br>
                                    <label for="">Province<span class="required">*</span></label>
                                    <input required class="form-control" type="text" name="province">
                                </div>
                            </div>
                            

                            <div class="row text-left">
                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="">Father's Name (Surname First)</label>
                                    <input class="form-control" type="text" name="father">
                                </div>
                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="">Mother's Maiden Name (Surname First)</label>
                                    <input class="form-control" type="text" name="mother">
                                </div>
                            </div>
                            
                            
                            <label for="">Guardian (If not Parent)</label>
                            <div class="row text-left">
                                <div class="form-group col-sm-12 col-md-5">
                                    <label for="">Name</label>
                                    <input class="form-control" type="text" name="guardian">
                                </div>
                                <div class="form-group col-sm-12 col-md-3">
                                    <label for="">Relationship</label>
                                    <input class="form-control" type="text" name="guardiantitle">
                                </div>
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="">Contact (Parent/Guardian)</label>
                                    <input class="form-control" type="text" name="guardiannumber">
                                </div>
                            </div>

                            <!-- REMARKS -->
                            <div class="row text-left">
                                <div class="form-group col-sm-12 col-md-12">
                                    <label for="">Remarks</label>
                                    <textarea class="form-control" name="remarks"></textarea>
                                </div>
                            </div>

                            <div class="text-right">
                                <!-- data-url="<?php // echo base_url( 'guidance/ClassManager/check_if_lrn_exists' ); ?>" -->
                                <button type="submit" class="btn btn-info">Save</button>
                                <a type="button" class="btn btn-secondary" href="<?php echo base_url( 'guidance_class' ) ?>" >Back</a>
                            </div>

                        <?php echo form_close(); ?>
                
                    </div>
                </div>
            </div>
        </div>

            