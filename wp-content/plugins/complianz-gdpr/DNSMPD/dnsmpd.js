jQuery(document).ready(function ($) {
    'use strict';
    $(document).on('click', '.cmplz-dnsmpd .close',function(){
        $(this).parent().hide();
    });
    $(document).on('click', '#cmplz-dnsmpd-submit', function(){
        var email = $('#cmplz_dnsmpd_email').val();
        var name = $('#cmplz_dnsmpd_name').val();
        var firstname = $('#cmplz_dnsmpd_firstname').val();
		/**
		 * Fire an event so we can hook into this
		 * @type {CustomEvent}
		 */
		var event = new CustomEvent('cmplz_dnsmpi_submit', { detail: status });
		document.dispatchEvent(event);
        $.ajax({
            type: "POST",
            url: cmplz_dnsmpd.url,
            dataType: 'json',
            data: ({
                action: 'cmplz_send_dnsmpd_request',
                email : email,
                name : name,
                firstname : firstname
            }),
            success: function (response) {

                $('.cmplz-dnsmpd.alert #message').html(response.message);
                if (response.success) {
                    $('#cmplz-dnsmpd-form').hide();
                    $('.cmplz-dnsmpd.alert').removeClass('error').addClass('success').show();
                } else {
                    $('.cmplz-dnsmpd.alert').removeClass('success').addClass('error').show();
                }
            }
        });
    });


});
