jQuery( document ).ready(function() {
jQuery('#load-more').click(function(){

        var button = jQuery(this),
            data = {
                'action': 'load_more',
                'query': load_more.posts,
                'page' : load_more.current_page,
                'nonce': load_more.nonce
            };

        jQuery.ajax({
            url : load_more.ajaxurl,
            data : data,
            type : 'POST',
            beforeSend : function ( xhr ) {
                button.text('Loading...');
            },
			
            success : function( data ){
                if( data ) {

                    //reset button text
                    button.text( 'Load More' );

                    //append new data
                    jQuery('.load-more-target').append(data);

                    load_more.current_page++;
                    if ( load_more.current_page == load_more.max_page )
                        button.remove();

                } else {
                    button.remove();
                }
            }
        });
    }); 
});
