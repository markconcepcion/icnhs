$(function(){
    if ( IDactive ) 
        $( '#'+IDactive ).addClass( 'active' );
    
    if ( parseInt( status ) > 0 ) {
        $('#loading-modal').modal('show');

        switch ( parseInt( status ) ) {
            case 1: SuccessMSG()  
                break;
            case 2: ErrorMSG()  
                break;
            case 3: ConfirmMSG()  
                break;
            default: 
                console.log( status );
                break;
        }

        if ( parseInt( status ) != 3 ) 
            EndProcess()
    }

    $( 'p.req-msg' ).html( 'Fields with * are required.' );
});

function ErrorMSG() {
    document.getElementById('loading-modal-icon').src = "assets/images/cancel.png";
    document.getElementById('loading-modal-icon').width = "100";
    $('#loading-modal-title').html( 'Error!');
    $('#loading-modal-msg').html( 'Database connectivity error.');
}

function SuccessMSG() {
    document.getElementById('loading-modal-icon').src = "vendors/images/success.png";
    document.getElementById('loading-modal-icon').width = "100";
    $('#loading-modal-title').html( 'Success!');
    $('#loading-modal-msg').html( 'Data is saved.');
}

function ConfirmMSG() {
    document.getElementById('loading-modal-icon').src = "vendors/images/caution-sign.png";
    document.getElementById('loading-modal-icon').width = "100";
    $('#loading-modal-title').html( 'Continue?');
    $('#loading-modal-btn').removeClass( 'hidden' );
}

function LoadProcess() {
    document.getElementById('loading-modal-icon').src = "vendors/images/new-loader.gif";
    $('#loading-modal-msg').html( 'Please wait...');
    $('#loading-modal-btn').addClass( 'hidden' );
    $('#loading-modal-title').html( 'Loading!');
    $('#loading-modal').modal('show');
}

function EndProcess() {
    setTimeout( function() {
        $('#loading-modal').modal('hide');
    }, 1500);
}

