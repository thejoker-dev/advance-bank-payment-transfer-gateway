jQuery(document).ready( function($) {
    $(".bank_payment_receipt").change( function() {
        var fd = new FormData();
        fd.append('file', $('.bank_payment_receipt')[0].files[0]);
        fd.append('action', 'abpt_ajax_process_request');  
        
        $.ajax({
            type: 'POST',
            url: the_ajax_script.ajaxurl,
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                console.log(response);
            }
        });
    });
});