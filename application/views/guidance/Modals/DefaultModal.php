<!-- SUCCESS -->
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-20" id="success-modal-title">Success!</h3>
                <div class="mb-30 text-center"><img src="<?php echo base_url( 'vendors/images/success.png' ) ?>"></div>
                <span id="success-modal-msg">Data is saved.</span>
            </div>
        </div>
    </div>
</div>

<!-- FAILED -->
<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-20" id="error-modal-title">Failed!</h3>
                <div class="mb-30 text-center"><img width="100" src="<?php echo base_url( 'assets/images/cancel.png' ) ?>"></div>
                <span id="error-modal-msg"></span>
            </div>
        </div>
    </div>
</div>

<!-- CONFIRMATION -->
<div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-10" id="confirm-modal-title">Continue?</h3>
                <div class="mb-30 text-center"><img src="<?php echo base_url( 'vendors/images/caution-sign.png' ) ?>"></div>
                <span id="confirm-modal-msg"></span>
                <div>
                    <form method="post" action="">
                        <button class="btn btn-secondary">No</button>
                        <button class="btn btn-info">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LOADING -->
<div class="modal fade" id="loading-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h3 class="mb-10" id="loading-modal-title">Loading!</h3>
                <div class="mb-10 text-center"><img id="loading-modal-icon" src="<?php echo base_url( 'vendors/images/new-loader.gif' ) ?>" width="150"></div>
                <span id="loading-modal-msg">Please Wait...</span>
                <div id="loading-modal-btn" class="pd-10 hidden">
                    <button type="button" class="btn btn-warning" id="loading-modal-confirm" >Yes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</div>