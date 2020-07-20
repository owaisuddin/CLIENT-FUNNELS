$(document).ready(function() {

    $(document).on("click", ".forgot-password, .cancel-forgot-password", function(){

        var login_form = $("#login-form"),
            forgot_password_form = $("#forgot-password-form");

        if($(this).hasClass("cancel-forgot-password"))
        {
            forgot_password_form.hide();
            login_form.slideDown("slow");
        } else {
            login_form.hide();
            forgot_password_form.slideDown("slow");
        }


        return false;
    })


});