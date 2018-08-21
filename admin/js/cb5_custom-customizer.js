(function( $ ) {
    'use strict';
    /**
     *
     * wp.customize( 'YOUR_SETTING_ID', function( value ) {
     *      value.bind( function( newval ) {
     *      //Do stuff (newval variable contains your "new" setting data)
     *      } );
     *  } );

     *
     *
     */
    wp.customize('logo_light', function (value){
        value.bind( function (newval ) {
        //    Set logo to new light logo here.
            alert('test');
        })
    });

    wp.customize('logo_dark', function (value) {
        value.bind( function (newval) {
        //    Set logo to new dark logo here.
        })
    })

})( jQuery );
