window.onload =  function() {

    // CKEDITOR.replace( 'message-body' );
    ClassicEditor
        .create( document.querySelector( '#message-body' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );

};
