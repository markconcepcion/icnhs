$(function(){
    $('#SetTimelineForm').submit( function( event ) {
        LoadProcess();

        $.ajax({
            type: 'POST',
            url: this.action, 
            data: {
                sy: $('#SetSYField').val(),
                sem: $('#SetSemField').val()
            }, 
            dataType: 'json',
            encode: true
        }).done(function(data) {
            if ( data ) {
                $('#loading-modal-msg').html( 'The system will only show data within the timeline set');
                SuccessMSG();
            }
            EndProcess();
        });

        event.preventDefault();
    });
});