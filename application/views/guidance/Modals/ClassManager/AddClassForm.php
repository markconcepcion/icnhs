<div class="modal fade" id="AddClassForm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <?php echo form_open( 'guidance/ClassManager/save_class' ); ?>

                <div class="modal-header bg-lg">
                    <h4 class="modal-title text-white" id="myLargeModalLabel">Add Class</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">

                    <p class="req-msg"></p>

                    <div class="row text-left">

                        <!-- LEFT FIELDS -->
                        <div class="form-group col-sm-12 col-md-6">

                            <!-- GRADE -->
                            <label for="">Grade Level <span class="required">*</span></label>
                            <select required class="form-control" name="classGrade" id="classGrade">
                                <option selected ></option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                            </select>

                            <br>        
                            
                            <!-- SECTION -->
                            <label for="">Section <span class="required">*</span></label>
                            <input required class="form-control" name="classSection" placeholder="Type section here" />
                        </div>

                        <!-- RIGHT FIELDS -->
                        <div class="form-group col-sm-12 col-md-6">
                            
                            <!-- STRAND -->
                            <label for="">Strand <span class="required">*</span></label>
                            <select required class="form-control" name="strand_IDstrand" id="strand_IDstrand">
                                <option selected ></option>
                                <?php foreach ( $strands as $row ) {
                                    echo '<option value="' . $row['IDstrand'] . '">' . $row['strandCode'] . '</option>';
                                } ?>
                            </select>

                            <br>        
                            
                            <!-- ADVISER -->
                            <label for="">Adviser <span class="required">*</span></label>
                            <select required class="form-control" name="teacher_IDteacher" id="adviser_IDadviser">
                                <option selected ></option>
                                <?php foreach ( $teachers as $row ) {
                                    echo '<option value="' . $row['IDteacher'] . '">' . $row['firstname'] . ' ' . $row['lastname'] . '</option>';
                                } ?>
                            </select>
                        </div>

                    </div>
                </div>

                <!-- BUTTONS -->
                <div class="modal-footer bg-lg">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save</button>
                </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>