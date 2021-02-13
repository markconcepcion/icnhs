<div class="modal fade bs-example-modal-lg" id="Schedules" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <?php echo form_open( 'guidance/ClassManager/save_schedule' ); ?>

                <div class="modal-header bg-lg">
                    <h4 class="modal-title text-white" id="SchedulesLabel">Schedules</h4>
                    <button type="button" class=" text-white close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">

                    <p class="req-msg"></p>

                    <input hidden name="class_IDclass" id="sched_IDclass">
                
                    <div class="row text-left">

                        <!-- LEFT FIELDS -->
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="">Subject <span class="required">*</span> </label>
                            <select required class="form-control" name="subject_IDsubject" id="subject_IDsubject">
                                <option selected></option>
                                <?php foreach ( $subjects as $row ) {
                                    echo '<option value="' . $row['IDsubject'] . '">' . $row['subjectCode'] . ' - ' . $row['subjectDesc'] . '</option>';
                                } ?>
                            </select>

                            <br>      

                            <label for="">Instructor <span class="required">*</span> </label>
                            <select required class="form-control" name="teacher_IDteacher" id="instructor_IDinstructor">
                                <option selected></option>
                                <?php foreach ( $teachers as $row ) {
                                    echo '<option value="' . $row['IDteacher'] . '">' . $row['firstname'] . ' ' . $row['lastname'] . '</option>';
                                } ?>
                            </select>
                        </div>

                        <!-- RIGHT FIELDS -->
                        <div class="form-group col-sm-12 col-md-6">
                            <label for="">Day <span class="required">*</span> </label>
                            <select required class="form-control" name="" id="">
                                <option selected></option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                            </select>

                            <br>   

                            <div class="row">   
                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="">Start <span class="required">*</span> </label>
                                    <input required class="form-control time-picker td-input" type="text" name="classStartTime" placeholder="Start time...">
                                </div>   
                                <div class="form-group col-sm-12 col-md-6">
                                    <label for="">End <span class="required">*</span> </label>
                                    <input required class="form-control time-picker td-input" type="text" name="classEndTime" placeholder="End time...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer bg-lg">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save</button>
                </div>

            <?php echo form_close(); ?>
        </div>
    </div>
</div>