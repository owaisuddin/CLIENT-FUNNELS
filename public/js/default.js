// Default functions

//Alert message function
function alert_message(type, message, div, scrollToDiv) {
    //Types

    // success
    // info
    // warning
    // danger

    //If false do nothing
    if (type == "" || message == "") return false;

    //If swal alert
    if (div === "SWAL_ALERT") {
        if (type == "danger") type = "error";
        else if (type == "info") type = "warning";

        swal_alert(type, message, "");
        return false;
    }

    //use page message if target div not set
    if (!div || !div.length) div = $("#page_messages");
    if (!div || !div.length) return false;

    //Hide current
    div.hide();

    //Set
    div.html('<div class="alert alert-' + type + ' alert-dismissable">' +
        '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
        message +
        '</div>');
    //Show
    div.slideDown("fast", function () {
        //If Scroll
        if (scrollToDiv !== false) scroll_to_div(div);

    });
}

function scroll_to_div(div) {
    if (div && div.length) {
        div[0].scrollIntoView(true);
    }

}

//Swal alert
function swal_alert(type, title, message, callback) {
    if (!title) title = "";
    if (!message) message = "";

    var btn_type = type;
    if (type === "error") btn_type = "danger";

    swal({
        title: title.toString(),
        text: message.toString(),
        buttonsStyling: false,
        confirmButtonClass: "btn btn-" + btn_type,
        type: type,
    }).then(function () {
        if (typeof callback === "function") callback();
    }).catch(swal.noop);
}

function swal_confirm(title, message, callback, confBtn, cancelBtn) {
    if (!title) title = "";
    if (!message) message = "";

    if (!confBtn) confBtn = 'Yes';
    if (!cancelBtn) cancelBtn = 'No, cancel!';
    swal({
        title: title,
        text: message,
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: confBtn,
        cancelButtonText: cancelBtn,
        reverseButtons: true
    }).then((result) => {
        if (callback) callback(result.value === true);
    });
}

//Toastr notice
function page_notice(type, title, message, callback) {
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "toastClass": "animated fadeInDown",
    }

    if (!message) message = "";
    toastr[type](message, title);

    if (callback) callback();
}


//Clear alert message
function hide_alert_message(div) {
    //use page message if target div not set
    if (!div) div = $("#page_message");

    //Hide current
    div.hide();
}

//Reset form
function reset_form(form, error_div) {
    //Trigger reset
    $(form).trigger("reset");

    //Remove classes
    $(".form-group").each(function () {
        $(this).removeClass("has-success has-error");
    });

    //Hide and clear error div
    if (error_div) {
        $(error_div).html('');
        $(error_div).hide('');
    }
}

//Clean
function clean(input, allow_line_breaks) {
    var container = document.createElement('div');
    var text = document.createTextNode(input);
    container.appendChild(text);
    if (allow_line_breaks !== true) text = container.innerHTML.replace(/(\r\n|\n|\r)/gm, " ");
    text = container.innerHTML.replace(/  +/g, ' ');
    return text === " " ? "" : text;
}

//Re Auth function
var re_auth_open_model = false;

function login_again() {
    var login_modal = $("#re-login-modal"),
        login_form = login_modal.find("#re-login-form"),

        login_messages = login_modal.find(".modal-messages");

    //Already showing
    if (login_modal.is(":visible")) {
        return false;
    }

    $.each($(".modal"), function () {

        re_auth_open_model = $(".modal:visible");
        re_auth_open_model.modal("hide");
    });

    login_form.trigger("reset");
    login_messages.html("").hide();

    login_modal.modal("show");

    return false;
}

$(function () {

    //Login Function
    $(document).on("click", ".do-re-login", function () {
        var login_modal = $("#re-login-modal"),
            login_form = login_modal.find("#re-login-form"),

            login_messages = login_modal.find(".modal-messages");

        login_messages.html("").hide();

        login_modal.modal("hide");
        setTimeout(function () {
            loading_modal("open", "Logging you back in!");
        }, 500);

        api("authenticate-Checkin", "ajax_reauth", login_form.serialize(), function (result) {
            loading_modal("close");
            if (!result) {
                login_modal.modal("show");
                return false;
            }
            login_modal.modal("hide");
            if (re_auth_open_model) {
                re_auth_open_model.modal("show");
                re_auth_open_model = false;
            }


        }, login_messages);
    });

    //Default Delete Content
    $(document).on("click", ".delete-content", function () {
        delete_modal($(this).data("type"), $(this).data("id"), $(this).data("message"));
        return false;
    });

});

//Post to API
// function api(model, function_call, data, callback, message_div, has_files, url) {
//
//     //If url not inputed use default
//     if (!url) url = 'API_URL';
//
//     //Add model and function call to url
//     url += model + "/" + function_call;
//
//     //Post with data
//     var ajax_params = {
//         url: url,
//         async: true,
//         type: 'POST',
//         data: data,
//         dataType: 'json',
//         success: function (response) {
//             //Decode and process result
//             //Success
//             if (response.result == "success") {
//                 //Message
//                 if (typeof response.message !== 'undefined' && response.message != "") alert_message('success', response.message, message_div);
//
//                 //Data return
//                 if (callback && typeof response.return_data !== 'undefined' && response.return_data != "") {
//                     callback(response.return_data);
//                 } else if (callback) {
//                     callback(true);
//                 } else return;
//             }
//
//             //Info
//             else if (response.result == "info" && typeof response !== 'undefined' && response.message != "") {
//                 alert_message('info', response.message, message_div);
//                 if (callback) callback(true);
//             }
//
//             //Warn
//             else if (response.result == "warning" && typeof response !== 'undefined' && response.message != "") {
//                 alert_message('info', response.message, message_div);
//                 if (callback) callback(false);
//             }
//
//             //Error
//             else if (response.result == "error") {
//                 //If login again
//                 if (response.return_data && response.return_data.login_again) {
//                     login_again();
//                 }
//
//                 if (typeof response !== 'undefined' && response.message != "") alert_message('danger', response.message, message_div);
//                 if (callback) callback(false);
//             }
//
//             //Login required
//             else if (response.result == "reauth") {
//                 //Show Login
//                 login_again();
//             }
//             //Unknown response
//             else {
//                 //User alert
//                 alert_message('danger', DEFAULT_MESSAGE, message_div);
//                 if (callback) callback(false);
//             }
//         },
//         error: function (xhr, ajaxOptions, thrownError) {
//             var api_error_message = DEFAULT_MESSAGE;
//             if (xhr.status === 0) api_error_message = "There seems to be an issue with your internet connection, please refresh the page and try again!";
//             alert_message('danger', api_error_message, message_div);
//             if (callback) callback(false);
//         },
//     };
//
//     if (has_files) {
//         ajax_params.processData = false;
//         ajax_params.contentType = false;
//     }
//
//     $.ajax(ajax_params);
// }

function init_gmap(map_id, lat, lng, title, info) {
    var myOptions = {
        zoom: 15,
        center: new google.maps.LatLng(lat, lng),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById(map_id), myOptions);
    marker = new google.maps.Marker({
        map: map,
        position: new google.maps.LatLng(lat, lng)
    });
    infowindow = new google.maps.InfoWindow({
        content: '<strong>' + title + '</strong><br>' + info + '<br>'
    });
    google.maps.event.addListener(marker, 'click', function () {
        infowindow.open(map, marker);
    });
    infowindow.open(map, marker);

    return {
        "map": map,
        "marker": marker
    };
}

function moveMarker(lat, lng, title, info) {
    var latlng = new google.maps.LatLng(lat, lng);
    infowindow.setContent('<strong>' + title + '</strong><br>' + info + '<br>');
    marker.setPosition(latlng);
    map.setCenter({
        lat: lat,
        lng: lng
    });
}

function setCookie(cname, cvalue, exdays) {
    if (!exdays) exdays = 1;
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname.replace(",", "_") + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

//Validation failed
function validation_failed(form_element) {
    //Add has-error class to parent
    $(form_element).parent().removeClass('has-success');
    $(form_element).parent().addClass('has-error');
}

//Validation OK
function validation_ok(form_element) {
    //Add has-success class to parent
    $(form_element).parent().removeClass('has-error');
    $(form_element).parent().addClass('has-success');
}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}

//Get unix timestamp
function unix_timestamp() {
    var timestamp = 0;

    try {
        timestamp = Math.round(new Date().getTime() / 1000);
    } catch (e) {

    }

    //Return timestamp
    return timestamp;
}

//HTML make
function make_HTML(template, data, target) {
    if (!target) target = "";

    //Replace
    $.each(data, function (index, replace_data) {
        template.find("." + target + index).html(replace_data);
    });

    //Return
    return template.html();
}

$.fn.serializeObject = function () {
    var o = {};
    var a = this.serializeArray();
    $.each(a, function () {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

//Rnadom string
function random_string(length) {
    if (!length) length = 6;
    var string = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < length; i++) {
        string += possible.charAt(Math.floor(Math.random() * possible.length));
    }
    return string;
}

//Replace all
function replace_all(find_val, replace_with, str) {
    if (replace_with === null || typeof name === "undefined") replace_with = "";
    if (find_val === null || typeof find_val === "undefined" || str === null || typeof str === "undefined") return str;
    return str.toString().replace(new RegExp(escapeRegExp(find_val), 'g'), replace_with);
}

function escapeRegExp(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

function is_empty(str) {
    var nwp = replace_all("&nbsp;", "", str).replace(/^\s+|\s+$/g, '');
    return (!str || str.length < 1 || str.trim().length < 1 || nwp.length < 1 || replace_all("&nbsp;", "", nwp) === " " || nwp === " ");
}

//NL2BR
function nl2br(str, is_xhtml) {
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}

//Remove BR
function remove_br(str) {
    var regex = /<br\s*[\/]?>/gi;
    return str.replace(regex, "");
}

//UC Words
function uc_words(str) {
    return (str + '')
        .replace(/^(.)|\s+(.)/g, function ($1) {
            return $1.toUpperCase()
        });
}

//Quick validate form
function quick_val_form(form) {
    var no_error = true,
        visible,
        parent,
        required,
        val;

    $.each(form.find("input, textarea, checkbox"), function () {

        visible = ($(this).is(":visible") || !$(this).is(':hidden') || $(this).css('display') !== 'none');
        parent = $(this).parent();
        required = $(this).attr("required");
        val = $(this).val();

        parent.removeClass("has-error");
        if (visible && required && is_empty(val)) {
            //console.log($(this).attr("name"));
            parent.addClass("has-error");
            no_error = false;
        }
    });

    return no_error;
}

function setFormValidation(id) {
    $(id).validate({
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
            $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
            $(element).closest('.form-group').append(error);
        },
    });
}

var loading_modal_open_modals;

function loading_modal(type, title, body) {
    var bs_loading_modal = $("#loading-modal");

    if (type === "open") {
        loading_modal_open_modals = false;
        loading_modal_open_modals = $(".modal:visible");
        if (loading_modal_open_modals) loading_modal_open_modals.modal("hide");

        bs_loading_modal.find(".modal-title").html(title);
        bs_loading_modal.modal("show");
    } else {
        setTimeout(function () {
            bs_loading_modal.modal("hide");
            if (loading_modal_open_modals) loading_modal_open_modals.modal("show");
        }, 500);
    }
}

function show() {
    for (var i = 0; i < arguments.length; ++i)
        console.log(arguments[i]);
}

function delete_modal(type, delete_id, message) {
    var del_modal = $("#delete-modal"),
        del_modal_form = del_modal.find("#delete-modal-form"),
        del_modal_preview = del_modal.find(".del-modal-preview"),

        del_modal_title = del_modal.find(".modal-title"),
        del_modal_messages = del_modal.find(".modal-messages"),
        conf_message = message;

    del_modal_form.trigger("reset");
    del_modal_messages.html("").hide();

    del_modal_form.find("input[name='action']").val("preview");
    del_modal_form.find("input[name='type']").val(type);
    del_modal_form.find("input[name='delete_id']").val(delete_id);

    loading_modal("open", "Getting Preview");

    $("#page_messages").html("").hide();
    // api("Delete", "process", del_modal_form.serialize(), function (result) {
    //     loading_modal("hide");
    //
    //     if (!result) return false;
    //
    //     del_modal_title.html(result.title);
    //     del_modal_preview.html(result.preview);
    //
    //     del_modal.modal("show");
    // });

    $(document).on("click", ".conf-delete-modal", function () {

        del_modal_messages.html("").hide();

        if (!conf_message) conf_message = del_modal_title.html() + "?";

        swal_confirm(conf_message, "Confirm Delete?", function (isConfirm) {
            if (!isConfirm) return false;

            loading_modal("open", "Deleting...");

            del_modal_form.find("input[name='action']").val("delete");
            api("Delete", "process", del_modal_form.serialize(), function (result) {

                loading_modal("hide");

                if (!result) return false;

                loading_modal_open_modals = false;

                swal_alert("success", result.swal_title, result.swal_message, function () {
                    if (result.url) {
                        window.location.href = result.url;
                    } else {
                        window.location.reload();
                    }
                });

            }, del_modal_messages);
        });

        return false;
    });
}