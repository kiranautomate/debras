(function( $ ) {


    wp.customize( 'header_textcolor', function( value ) {
        value.bind( function( to ) {
            if ( 'blank' === to ) {
                $( '.bannerText' ).css( {
                    'display': 'none'
                } );
            } else {
                $( '.bannerText' ).css( {
                    'display': 'block'
                } );

                $( '.bannerText' ).css( {
                    'color': to
                } );
            }
        } );
    });

    wp.customize( 'wpt_logo', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #logo ').hide();
            } else {
                $(' #logo ').show();
                $(' #logo ').attr( 'src', to );
            }
        } );
    });    

    wp.customize( 'wpt_footer_text', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #footertext ').hide();
            } else {
                $(' #footertext ').show();
                $(' #footertext ').text( to );
            }
        } );
    });    

    wp.customize( 'wpt_h1_color', function( value ) {
        value.bind( function( to ) {
            $( 'h1, h1 a, h1 a:hover' ).css( 'color', to );
        } );
    });

    wp.customize( 'wpt_h1_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'h1' ).css( 'font-size', to );            
        } );
    });     

	wp.customize( 'wpt_h2_color', function( value ) {
        value.bind( function( to ) {
            $( 'h2, h2 a, h2 a:hover' ).css( 'color', to );
        } );
    });

    wp.customize( 'wpt_h2_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'h2' ).css( 'font-size', to );            
        } );
    }); 
	
	wp.customize( 'wpt_h3_color', function( value ) {
        value.bind( function( to ) {
            $( 'h3, h3 a, h3 a:hover' ).css( 'color', to );
        } );
    });

    wp.customize( 'wpt_h3_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'h3' ).css( 'font-size', to );            
        } );
    });    
	
	wp.customize( 'wpt_h4_color', function( value ) {
        value.bind( function( to ) {
            $( 'h4, h4 a, h4 a:hover' ).css( 'color', to );
        } );
    });

    wp.customize( 'wpt_h4_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'h4' ).css( 'font-size', to );            
        } );
    }); 
	
	wp.customize( 'wpt_h5_color', function( value ) {
        value.bind( function( to ) {
            $( 'h5, h5 a, h5 a:hover' ).css( 'color', to );
        } );
    });

    wp.customize( 'wpt_h5_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'h5' ).css( 'font-size', to );            
        } );
    });    
	
	wp.customize( 'wpt_h6_color', function( value ) {
        value.bind( function( to ) {
            $( 'h6, h6 a, h6 a:hover' ).css( 'color', to );
        } );
    });

    wp.customize( 'wpt_h6_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'h6' ).css( 'font-size', to );            
        } );
    });    
	
    wp.customize( 'wpt_primary_color', function( value ) {
        value.bind( function( to ) {            
            $( '.primaryColor, .primaryColor:hover, #primaryColor:hover' ).css( 'color', to );   
			$( '.primaryBackgroundColor' ).css( 'background-color', to );           
        } );
    });   
	  
    wp.customize( 'wpt_secondary_btn_color', function( value ) {
        value.bind( function( to ) {            
            $( '.secondaryBtnColor' ).css( 'background-color', to );            
        } );
    });   	
	
	wp.customize( 'wpt_primary_content_light_color', function( value ) {
        value.bind( function( to ) {            
            $( '.primaryLightColor, .primaryLightColor p,.primaryLightColor a, .primaryLightColor:hover' ).css( 'color', to );       
			$( '.primaryBackgroundLightColor' ).css( 'background-color', to );  
        } );
    }); 
	
	wp.customize( 'wpt_content_color_dark', function( value ) {
        value.bind( function( to ) {            
            $( '.contentColorDark, .contentColorDark a' ).css( 'color', to );       
        } );
    }); 
	
	wp.customize( 'wpt_primary_a_color', function( value ) {
        value.bind( function( to ) {            
            $( '.primaryAnchorColor, .primaryAnchorColor a, #primaryAnchorColor, #primaryAnchorColor a' ).css( 'color', to ); 
        } );
    }); 
		
	wp.customize( 'wpt_secondary_background_color', function( value ) {
        value.bind( function( to ) {            
            $( '.secondaryBackgroundColor,#secondaryBackgroundColor' ).css( 'background-color', to ); 
        } );
    }); 

	wp.customize( 'wpt_secondary_content_color', function( value ) {
        value.bind( function( to ) {            
            $( '.secondaryContentColor,.secondaryContentColor:hover, .secondaryContentColor a' ).css( 'color', to ); 
        } );
    }); 
			      
})( jQuery );