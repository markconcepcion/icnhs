$(function(){
    $( '.add-class-sched' ).on( 'click', function() {
        $( '#sched_IDclass' ).val( $(this).data('id') );
    } );

    $( '.add-transferee' ).on( 'click', function() {
        $( '#transferee_IDclass' ).val( $(this).data('id') );
    } );

    $( '#check-transferee-btn' ).on( 'click', function() {
        $.ajax({
            type: 'POST',
            url: $(this).data( 'url' ), 
            data: {
                studentLRN: $('#studentLRN').val()
            }, 
            dataType: 'json',
            encode: true
        }).done( function( data ) {
            if ( data != null ) {
                
            } else {

            }
        });

    } );
});