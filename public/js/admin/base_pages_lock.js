/*
 *  Document   : base_pages_lock.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Lock Screen Page
 */

var BasePagesLock = function() {
    // Init Lock Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationLock = function(){
        jQuery('.js-validation-lock').validate({
            errorClass: 'help-block text-right animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('has-error');
                jQuery(e).closest('.help-block').remove();
            },
            rules: {
                'password': {
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                'password': {
                    required: 'Пожалуйста, введите пароль',
                    minlength: 'Длина пароля должна быть не менее 5 символов'
                }
            }
        });
    };

    return {
        init: function () {
            // Init Reminder Form Validation
            initValidationLock();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ BasePagesLock.init(); });