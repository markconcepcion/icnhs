
<div class="modal fade" id="ImportStudents" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <form action="<?php echo base_url( 'guidance/ClassManager/importstudents' ); ?>" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header bg-lg">
                    <h4 class="modal-title" id="ImportStudentsLabel">Import Students</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div class="modal-body">
                    <input class="form-control" name="file_import_item" type="file" accept="">
                </div>

                <div class="modal-footer bg-lg">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>