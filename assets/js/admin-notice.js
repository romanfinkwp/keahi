jQuery(document).ready(function($) {
    $('#keahi-notice .notice-dismiss').on('click', function() {
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'keahi_dismiss_notice',
                nonce: keahiNotice.nonce
            }
        });
    });
});