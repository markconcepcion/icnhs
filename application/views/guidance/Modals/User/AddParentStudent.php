<div class="modal fade" id="AddParentStudent" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <form id="AddParentStudentForm" action="<?php echo base_url( 'guidance/user/AddParentStudent' ); ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Student's LRN</label>
                        </div>

                        <div class="col-md-9">
                            <input id="IDparent_user" hidden>
                            <input id="studentLRN_user" required class="form-control" type="text" placeholder="Enter LRN here...">
                        </div>

                        <div class="col-md-3">
                            <button type="submit" class="btn btn-info">
                                <i class="fa fa-save" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal" aria-hidden="true">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
			    </form>
            </div>
        </div>
    </div>
</div>