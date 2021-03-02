jQuery( function ( $ ) 
{
    $('#button_calculate_dis').on( 'click',function(event)
    {
       
        event.preventDefault();
        var address = jQuery('#address_single_product').val();
        var zip = jQuery('#zip_single_product').val();
        var id = jQuery('#single_product_id').val();
        if(address == ''  || zip == '') 
        {
            alert('Please fill in all form fields to proceed.');
            //$(".modal").hide();
        }
        else
        {
             $(".modal").show();
            var data = {
                action: 'myaction', 
                address: address,
                zip:zip,
                id:id,
            };
        
            jQuery.ajax({
            type: 'POST',
            url: ajax_object.ajaxurl,
            data: data,

            success: function (code) {
                $(".modal").hide();
                console.log(code.dis);
                if (code.charge != "null") 
                {
                    $("#single_product_charge").val(code.charge);
                    $("#single_product_distance").val(code.dis);
                    $("#distancetext_result").html('<p class="show_delivery_charge">'+code.text+'<br/>Delivery Distance  '+code.dis+' miles </p>');
                }
                else
                {
                    var modal = document.getElementById('myModal');
                    modal.style.display = "block";
                       // Get the modal
                    var modal = document.getElementById('myModal');

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];



                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                      modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                      if (event.target == modal) {
                        modal.style.display = "none";
                      }
                    }
                }
            },
            dataType: 'Json'
            });
        }
    });
 
});


