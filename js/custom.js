$(function() {
            //check text input
            $erorr = true;

            function check($selector, $target, $num) {
                $($selector).keyup(function() {
                    if ($(this).val().length <= $num) {
                        $($target).show(400);
                        $erorr = true;
                    } else {
                        $($target).hide(400);
                        $erorr = false;
                    }
                });
            }

            check('form.contact-form input[type="text"]', 'form .custom-alert.name', 3);
            check('form.contact-form input[type="tel"]', 'form .custom-alert.tel', 10);
            check('form.contact-form textarea', 'form .custom-alert.msg', 10);

            // disabled button when page first load
            if ($erorr == true || $('form input, form textarea').val() == '') {

                $('form.contact-form input[type="submit"]').attr('disabled', '');

            }
            // disabled button when type

            $('form.contact-form input, form.contact-form textarea').keyup(function() {

                if ($erorr == false &&
                    !$('form.contact-form textarea').val() == '' &&
                    !$('form.contact-form input[type="text"]').val() == '' &&
                    !$('form.contact-form input[type="tel"]').val() == '' &&
                    !$('form.contact-form input[type="email"]').val() == '') {

                    $('form.contact-form input[type="submit"]').removeAttr('disabled');


                } else {

                    $('form.contact-form input[type="submit"]').attr('disabled', '');
                }

            });

            // message box 
            $('.message-box').delay(5000).fadeOut(1000);

            /*check tel input
            if ($('form input[type="tel"]').val().length <= 10) {
                $('form .custom-alert.tel').fadeIn();
            } else {
                $('form .custom-alert.tel').fadeOut();
            }
            //check textarea
            if ($('form textarea').val().length <= 3) {
                $('form .custom-alert.msg').fadeIn();
            } else {
                $('form .custom-alert.msg').fadeOut();
            }
            */


            });