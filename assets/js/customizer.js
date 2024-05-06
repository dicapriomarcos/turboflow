( function( $ ) {

    wp.customize( 'tf__body_color', function( value ) {
        value.bind( function( newval ) {
            $( 'body' ).css( 'background-color', newval );
        } );
    } );

    wp.customize( 'tf__navigation_color', function( value ) {
        value.bind( function( newval ) {
            $( '#tf__bottom-header' ).css( 'background-color', newval );
        } );
    } );

    wp.customize( 'tf__top_header_color', function( value ) {
        value.bind( function( newval ) {
            $( '#tf__top-header' ).css( 'background-color', newval );
        } );
    } );

    wp.customize( 'tf__text_color', function( value ) {
        value.bind( function( newval ) {
           $( 'body' ).css( 'color', newval );
        } );
    } );

    wp.customize( 'tf__footer_color', function( value ) {
        value.bind( function( newval ) {
            $( '.tf__site-footer' ).css( 'background-color', newval );
        } );
    } );


    wp.customize( 'tf__text_size', function( value ) {
        value.bind( function( newval ) {
            $( 'body' ).removeClass(function(index, className) {
                return (className.match(/(^|\s)tf__text\S+/g) || []).join(' ');
            });
            $( 'body' ).addClass( newval );
        } );
    } );


} )( jQuery );
