
window.addEventListener('DOMContentLoaded', function () {
    var image = document.getElementById('image');
    var cropBoxData;
    var canvasData;
    var cropper;

    $('#modal').on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            autoCropArea: 0.5,
            dragMode: 'move',
            aspectRatio: 3 / 3,
            restore: false,
            guides: false,
            center: false,
            highlight: false,
            cropBoxMovable: false,
            cropBoxResizable: false,
            toggleDragModeOnDblclick: false,
            ready: function () {
                cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
            }
        });
    }).on('hidden.bs.modal', function () {
        cropBoxData = cropper.getCropBoxData();
        canvasData = cropper.getCanvasData();
        cropper.destroy();
    });
});

$( function(){
    $('.addparentstudentbtn_user').on('click', function(){
        var IDparent = $(this).data('id');
        $('#IDparent_user').val( IDparent );
        $('#studentLRN_user').val( '' );
    });

    $('#loading-modal-confirm').on('click', function(){
        var action = this.value;
        if ( action == 'assign-parent') {
            var url = baseurl + 'guidance/user/AddParentStudent';
            AddParentStudent( url, 1 );
        }
    });

    $('#AddParentStudentForm').submit( function( event ) {
        event.preventDefault();
        AddParentStudent( this.action, 0 );
    });
});

function AddParentStudent( url, status ){
    LoadProcess();

    $.ajax({
        type: 'POST',
        url : url, 
        data: {
            status: status,
            IDparent: $('#IDparent_user').val(),
            studentLRN: $('#studentLRN_user').val()
        }, 
        dataType: 'json',
        encode: true
    }).done(function(data) {
        if ( data['success'] ) {
            SuccessMSG();
        } else {
            if ( data['status'] == 1 ) {
                $('#loading-modal-msg').html( 'A parent is already assigned to the student.');
                $('#loading-modal-confirm').val( 'assign-parent' );
                ConfirmMSG();
            } else {
                ErrorMSG();
                $('#loading-modal-msg').html( 'LRN does not exist.');
            }
        } 
        if ( data['success'] || data['status'] != 1 )
            EndProcess();
    });
}