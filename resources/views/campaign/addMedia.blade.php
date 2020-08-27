@extends('layouts.app')
@section('content')

            <div class="content">
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12" id="page_messages"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-primary card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">airplay</i>
                                        </div>
                                        <h4 class="card-title">Upload Campaign Media</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="toolbar">

                                            <a href="/campaigns/media"
                                               title="Back to media list" class="btn btn-success m-b">
                                                <i class="fa fa-arrow-left"></i> Media List
                                            </a>


                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-md-12 ml-auto mr-auto">

                                                <div class="whp-set-video-wrap">

                                                    <div class="row new-media-upload-select-wrap">
                                                        <div class="col-sm-12">
                                                            <h3>Upload video to use in webinar holding page</h3>

                                                            <div class="new-webinar-file-input">
                                                                <strong>Upload New Media File</strong>
                                                                <ul>
                                                                    <li>Max Upload Size: <strong>2GB</strong></li>
                                                                    <li>Allowed File Types: <strong>
                                                                            <ul>
                                                                                <li>mp4</li>
                                                                                <li>wmv</li>
                                                                                <li>mpeg</li>
                                                                                <li>avi</li>
                                                                                <li>flv</li>
                                                                                <li>3gp</li>
                                                                                <li>acc</li>
                                                                            </ul>
                                                                        </strong></li>
                                                                </ul>
                                                                <label class="btn btn-info btn-file">
                                                                    Upload Video <input type="file"
                                                                                        id="new-whp-file-upload"
                                                                                        style="display: none;">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="new-whp-file-details" style="display: none">

                                                        <h3>Uploading...</h3>

                                                        <strong>File Name: </strong><span
                                                                class="new-whp-file-details-filename"></span><br>
                                                        <strong>File Size: </strong><span
                                                                class="new-whp-file-details-filesize"></span><br>

                                                        <span class="new-whp-file-details-upload-text">0</span>%
                                                        Uploaded
                                                        <div class="progress">
                                                            <div class="new-whp-file-details-upload-bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                                 role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 0%"></div>
                                                        </div>
                                                        <button type="button"
                                                                class="btn btn-danger cancel-whp-media-upload">
                                                            <i class="fa fa-times"></i> Cancel Upload
                                                        </button>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>


                                    </div>
                                    <!-- end content-->
                                </div>
                                <!--  end card  -->
                            </div>
                            <!-- end col-md-12 -->
                        </div>
                        <!-- end row -->            </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">

                    <div class="copyright float-left">
                        <a href="#" title="View Our Cookie Policy" class="view-cookie-policy">
                            Cookie Policy
                        </a>
                        |
                        <a href="#" title="View Our Privacy Policy" class="view-privacy-policy">
                            Privacy Policy
                        </a>
                    </div>
                    <div class="copyright float-right">
                        © 2020 Silko Funnels
                    </div>
                </div>
            </footer>


    <!--Modals -->
    <!-- Loading -->
    <div id="loading-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                </div>

                <div class="modal-body">
                    <p>
                        <img src="https://www.clientfunnels.io/img/loading-hc.gif"
                             class="img-responsive modal-img-center">
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Re Login Modal -->
    <div id="re-login-modal" class="modal fade hmodal-success" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h4 class="modal-title">Please Login To Continue</h4>
                </div>
                <div class="modal-body">

                    <div class="modal-messages"></div>

                    <div class="modal-wrap-content">

                        <form id="re-login-form" onsubmit="return false;">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label for="re-login-email" class="bmd-label-floating"> Email <span
                                                    class="required">*</span></label>
                                        <input type="text" class="form-control" id="re-login-email" required="true"
                                               name="email" value="helenahillfit@gmail.com" maxlength="100">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label for="re-login-password" class="bmd-label-floating"> Password <span
                                                    class="required">*</span></label>
                                        <input type="password" class="form-control" name="password"
                                               id="re-login-password" maxlength="50" placeholder="Password">
                                    </div>
                                </div>
                            </div>


                        </form>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success do-re-login"><i class="fa fa-arrow-right"
                                                                                 aria-hidden="true"></i> Login
                    </button>
                </div>

            </div>

        </div>
    </div>
    <!--/ Re Login Modal -->

    <!-- Delete Modal -->
    <div id="delete-modal" class="modal fade hmodal-success" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="modal-messages"></div>

                    <div class="modal-wrap-content">

                        <form id="delete-modal-form" onsubmit="return false;">

                            <input type="hidden" name="action">
                            <input type="hidden" name="type">
                            <input type="hidden" name="delete_id">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-exclamation-triangle"></i> <span
                                                class="del-modal-preview"></span>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group bmd-form-group">
                                        <label for="del-modal-notes" class="bmd-label-floating"> Notes <span
                                                    class="required">*</span></label><br>
                                        <textarea class="form-control" id="del-modal-notes" required="true" name="notes"
                                                  maxlength="2000"
                                                  placeholder="Please enter notes to delete!"></textarea>
                                    </div>
                                </div>
                            </div>


                        </form>

                    </div>

                </div>
                <div class="modal-footer">

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-sm-6">
                            <button type="button" class="btn btn-danger conf-delete-modal"><i class="fa fa-trash"
                                                                                              aria-hidden="true"></i>
                                Delete
                            </button>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
    <!-- Delete Modal --><!-- Privacy Modal -->
    <div id="cookie-privacy-policy-modal" class="modal fade hmodal-success" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="modal-wrap-content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success max-width" data-dismiss="modal">
                        <i class="fa fa-check" aria-hidden="true"></i> Close
                    </button>
                </div>

            </div>

        </div>
    </div>
    <!--/ Privacy Modal -->
    <!-- Campaign Media Watch -->
    <div id="watch-media-modal" class="modal hmodal-success" tabindex="-1" role="dialog" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="color-line"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Watch Video</h5>
                </div>

                <div class="modal-body">

                    <div class="row watch-media-video" data-type="rendering">
                        <div class="col-sm-12">
                            <div class="alert alert-warning">
                                Video Rendering in progress, you will be able to watch it soon!
                            </div>
                        </div>
                    </div>

                    <div class="row watch-media-video" data-type="error">
                        <div class="col-sm-12">
                            <div class="alert alert-danger">
                                Video Rendering error!<br>Please contact us for more information.
                            </div>
                        </div>
                    </div>

                    <div class="row watch-media-video" data-type="ready">
                        <div class="col-sm-12">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video id="media-preview-video" controls=""></video>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger watch-media-close-player">Close</button>

                </div>

            </div>
        </div>
    </div>
    <!-- /Campaign Media Watch -->


    ?&gt;
    <!--   Core JS Files   -->
    <script src="https://www.clientfunnels.io/js/core/jquery.min.js"></script>
    <script src="https://www.clientfunnels.io/js/core/popper.min.js"></script>
    <script src="https://www.clientfunnels.io/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.validate.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.bootstrap-wizard.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/moment.min.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/sweetalert2.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery-jvectormap.js"></script>
    <script src="https://www.clientfunnels.io/js/plugins/chartist.min.js"></script>
    <script src="https://www.clientfunnels.io/js/material-dashboard.js?v=2.1.0"></script>

    <script>
        $(document).ready(function() {
            /***** Media *****/

            //Update Statuses
            if ($(".media-video-render-status").length) {
                var list_table = $("#media-list-dt").DataTable({
                    pagingType: "full_numbers",
                    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search Media"
                    },
                    order: []
                });

                function update_render_statuses() {
                    var video_ids = [],
                        row,
                        v_td,
                        v_id,
                        v_status;
                    list_table.rows().every(function(rowIdx, tableLoop, rowLoop) {
                        row = $(this.node());
                        v_td = row.find("td.media-video-render-status");
                        v_id = parseInt(v_td.data("video-id"), 10);
                        v_status = parseInt(v_td.data("status"), 10);

                        if (v_id && v_status == 1) video_ids.push(v_id);
                    });

                    if (!video_ids.length) return clearInterval(render_status);


                }
                var render_status = setInterval(update_render_statuses, 0xea60);
                update_render_statuses();
            }

            //Watch video
            $(document).on(
                "click",
                ".watch-media-video, .watch-media-close-player",
                function() {
                    var watch_media_modal = $("#watch-media-modal"),
                        watch_media_video_rows = watch_media_modal.find(".watch-media-video"),
                        show_row = watch_media_modal.find(
                            ".watch-media-video[data-type='" + $(this).data("type") + "']"
                        ),
                        media_video = watch_media_modal.find("#media-preview-video"),
                        play_data = $(this).data("play-data"),
                        thumb_url = $(this).data("thumb-url");

                    //Close Player
                    if ($(this).hasClass("watch-media-close-player")) {
                        media_video[0].pause();
                        watch_media_modal.modal("hide");
                        return false;
                    }

                    media_video.html("");
                    media_video.attr("poster", thumb_url);
                    var video_html = "";
                    if (play_data && play_data.length) {
                        $.each(play_data, function(index, video_data) {
                            video_html +=
                                '<source src="' +
                                video_data.url +
                                '" type="' +
                                video_data.type +
                                '">';
                        });
                    }
                    media_video.html(video_html);
                    watch_media_video_rows.hide();
                    show_row.show();
                    watch_media_modal.modal("show");

                    media_video[0].load();
                    setTimeout(function() {
                        media_video[0].play();
                    }, 500);

                    return false;
                }
            );
            function clean(input, allow_line_breaks) {
                var container = document.createElement('div');
                var text = document.createTextNode(input);
                container.appendChild(text);
                if (allow_line_breaks !== true) text = container.innerHTML.replace(/(\r\n|\n|\r)/gm, " ");
                text = container.innerHTML.replace(/  +/g, ' ');
                return text === " " ? "" : text;
            }
            if ($("#new-whp-file-upload").length) {
                //Media File Upload
                $("#new-whp-file-upload").change(function() {

                    var input_file_whp = $(this),
                        file_name = input_file_whp.val();
                    if (!file_name) return false;
                    var file_name_parts = file_name.split("\\");
                    file_name = clean(file_name_parts[file_name_parts.length - 1]);
                    var iSize = $("#new-whp-file-upload")[0].files[0].size / 1024,
                        file_size_text;
                    if (iSize / 1024 > 1) {
                        if (iSize / 1024 / 1024 > 1) {
                            iSize = Math.round((iSize / 1024 / 1024) * 100) / 100;
                            file_size_text = iSize + "GB";
                        } else {
                            iSize = Math.round((iSize / 1024) * 100) / 100;
                            file_size_text = iSize + "MB";
                        }
                    } else {
                        iSize = Math.round(iSize * 100) / 100;
                        file_size_text = iSize + "KB";
                    }

                    var w_whp_filename = $(".new-whp-file-details-filename"),
                        w_whp_filesize = $(".new-whp-file-details-filesize"),
                        w_whp_file_input = $(".new-whp-file-input"),
                        media_select_wrap = $(".new-media-upload-select-wrap"),
                        w_whp_file_details_wrap = $(".new-whp-file-details"),
                        whp_upload_progress_bar = $(".new-whp-file-details-upload-bar"),
                        whp_upload_upload_text = $(".new-whp-file-details-upload-text");

                    w_whp_filename.html(file_name);
                    w_whp_filesize.html(file_size_text);
                    w_whp_file_input.hide();
                    media_select_wrap.hide();
                    w_whp_file_details_wrap.slideDown("slow");
                    whp_upload_progress_bar.attr("aria-valuenow", 0).css("width", "0%");
                    whp_upload_upload_text.html("0");

                    $("#page_messages")
                        .html("")
                        .hide();

                    //Send to sever
                    var formData = new FormData();
                    formData.append("webinar", $("#new-whp-file-upload")[0].files[0]);
                    formData.append("media_upload", "1");
                    formData.append('_token' , '<?php echo csrf_token(); ?>');

                    var uploadURL = "/new_webinar_video"; //Upload URL
                    var whp_jqXHR = $.ajax({
                        xhr: function() {
                            var xhrobj = $.ajaxSettings.xhr();
                            if (xhrobj.upload) {
                                xhrobj.upload.addEventListener(
                                    "progress",
                                    function(event) {
                                        var percent = 0;
                                        var position = event.loaded || event.position;
                                        var total = event.total;
                                        if (event.lengthComputable) {
                                            percent = Math.ceil((position / total) * 100);
                                        }
                                        //Set progress
                                        whp_upload_progress_bar
                                            .attr("aria-valuenow", 0)
                                            .css("width", percent + "%");
                                        whp_upload_upload_text.html(percent);
                                    },
                                    false
                                );
                            }
                            return xhrobj;
                        },
                        url: uploadURL,
                        type: "POST",
                        contentType: false,
                        processData: false,
                        cache: false,
                        data: formData,
                        success: function(data) {
                            w_whp_file_details_wrap.hide();
                            w_whp_file_input.show();
                            media_select_wrap.show();
                            input_file_whp.val("");

                            data = JSON.parse(data);

                            if (data.result != "success") {
                                var error = data.message;
                                if (!error) error = DEFAULT_MESSAGE;
                                alert_message("danger", error);
                                return false;
                            }

                            //Done
                            swal_alert(
                                "success",
                                "Video Uploaded successfully",
                                "Your video is rendering. On average it could take up to 4.5 hours to process, but this may vary depending on your video.  We will send you an email when the process is complete.",
                                function() {
                                    window.location.href = data.return_data.url;
                                }
                            );
                        }
                    });

                    $(document).on("click", ".cancel-whp-media-upload", function() {
                        swal_confirm(
                            "Canel Upload?",
                            "Uploading will stop and not be saved!",
                            function(isConfirm) {
                                if (isConfirm) {
                                    whp_jqXHR.abort();
                                    w_whp_file_details_wrap.hide();
                                    w_whp_file_input.show();
                                    media_select_wrap.show();
                                    input_file_whp.val("");
                                }
                                return false;
                            }
                        );

                        return false;
                    });
                });
            }
        });
    </script>
    <script src="https://www.clientfunnels.io/js/plugins/jquery.dataTables.min.js"></script>
    <script src="https://www.clientfunnels.io/js/app-media.js?v=1.1.0"></script>

    <script src="https://www.clientfunnels.io/js/custom.js?v=1.1.4"></script>

    <script>
        $(document).ready(function () {
            $().ready(function () {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function (event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function () {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function () {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function () {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function () {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function () {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function () {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function () {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function () {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function () {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function () {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });
    </script>



    <div class="crisp-client">
        <div class="crisp-1o7uamv">
            <div class="crisp-1qz76wn">
                <style type="text/css">.crisp-client .crisp-1rjpbb7 .crisp-12w1xmh,
                    .crisp-client .crisp-1rjpbb7 .crisp-poqhnx:hover {
                        color: #FFFFFF !important;
                        -webkit-text-fill-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1wiroug,
                    .crisp-client .crisp-1rjpbb7 .crisp-ao27ue:hover {
                        color: #5B5B5B !important;
                        -webkit-text-fill-color: #5B5B5B !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-6mlwlm,
                    .crisp-client .crisp-1rjpbb7 .crisp-q5z06s:hover {
                        color: #3F3F3F !important;
                        -webkit-text-fill-color: #3F3F3F !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-wcida4,
                    .crisp-client .crisp-1rjpbb7 .crisp-o6w0yc:hover {
                        color: #2A2A2A !important;
                        -webkit-text-fill-color: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-pusm34 {
                        background-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-bdhv0t {
                        background-color: #5B5B5B !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-9o0cq7 {
                        background-color: #3A3A3A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ws3gf1,
                    .crisp-client .crisp-1rjpbb7 .crisp-13h0akn:before,
                    .crisp-client .crisp-1rjpbb7 .crisp-13h0akn:after {
                        background-color: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1gr5ak3 {
                        background-color: #F2F2F2 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-145mbcr,
                    .crisp-client .crisp-1rjpbb7 .crisp-1jrqqbm:hover {
                        background-color: #F9F9F9 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-17f70m7 {
                        background-image: linear-gradient(125deg, #2A2A2A -10%, #5B5B5B 100%) !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-111u58f,
                    .crisp-client .crisp-1rjpbb7 .crisp-y1nqlk:hover {
                        border-color: #FFFFFF !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14u434g {
                        border-color: rgba(91, 91, 91, 0.175) !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-k6ym6q,
                    .crisp-client .crisp-1rjpbb7 .crisp-1hadq69:hover,
                    .crisp-client .crisp-1rjpbb7 .crisp-1kqjjm4:before,
                    .crisp-client .crisp-1rjpbb7 .crisp-1kqjjm4:after {
                        border-color: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1n0zdj7 {
                        border-color: rgba(42, 42, 42, 0.15) !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-rdu43e {
                        border-top-color: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ogcg7k,
                    .crisp-client .crisp-1rjpbb7 .crisp-1mnx9b2:hover {
                        border-color: #F2F2F2 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11:placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11:-moz-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11::-moz-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11:-ms-input-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-11uxe11::-webkit-input-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp:placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp:-moz-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp::-moz-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp:-ms-input-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-14ixsrp::-webkit-input-placeholder {
                        color: #818181 !important;
                        -webkit-text-fill-color: #818181 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-gjhthi,
                    .crisp-client .crisp-1rjpbb7 .crisp-1t1dtpc:hover,
                    .crisp-client .crisp-1rjpbb7 .crisp-gjhthi:hover,
                    .crisp-client .crisp-1rjpbb7 .crisp-1t1dtpc:active,
                    .crisp-client .crisp-1rjpbb7 .crisp-gjhthi:active,
                    .crisp-client .crisp-1rjpbb7 .crisp-1v3kwn:hover .crisp-oc2kqi,
                    .crisp-client .crisp-1rjpbb7 .crisp-1v3kwn .crisp-oc2kqi:active {
                        background: #5B5B5B !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1dgibgx,
                    .crisp-client .crisp-1rjpbb7 .crisp-1r2x6vr:hover {
                        background: #3F3F3F !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1dgibgx:hover,
                    .crisp-client .crisp-1rjpbb7 .crisp-1r2x6vr:active {
                        background: #515151 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-1dgibgx:active {
                        background: #5B5B5B !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-27o9vm:hover .crisp-1ekhg1c {
                        background: #3F3F3F !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-27o9vm .crisp-1ekhg1c:active {
                        background: #515151 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ox3dbf,
                    .crisp-client .crisp-1rjpbb7 .crisp-1fmeyoi[data-active="true"] {
                        background: #2A2A2A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ox3dbf:hover {
                        background: #3A3A3A !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-ox3dbf:active {
                        background: #3F3F3F !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j::-moz-selection,
                    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j *::-moz-selection {
                        background-color: #E9E9E9 !important;
                    }

                    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j::selection,
                    .crisp-client .crisp-1rjpbb7 .crisp-k5ll1j *::selection {
                        background-color: #E9E9E9 !important;
                    }
                </style>
            </div>
            <div class="crisp-1nasccw">
                <style type="text/css">.crisp-client .crisp-1rjpbb7 {
                        z-index: 1000000;
                    }
                </style>
            </div>
        </div>
        <div id="crisp-chatbox" lang="en" dir="ltr" translate="no" data-blocked="false" data-lock-maximized="false"
             data-last-operator-face="false" data-availability-tooltip="false" data-hide-vacation="false"
             data-hide-on-away="false" data-hide-on-mobile="false" data-position-reverse="false" data-full-view="true"
             data-small-view="true" data-large-view="false" data-availability="away" data-is-activity-ongoing="false"
             data-was-availability-online="false" data-has-local-messages="false" class="crisp-1rjpbb7">
            <div class="crisp-1rf4xdh crisp-k5ll1j"><a data-maximized="false" data-is-failure="false" href="#!"
                                                       class="crisp-kquevr"
                                                       data-cshid="fc64c43b-a271-c5d0-cca0-af259e2c73e1"><span
                            class="crisp-1059tj2"><span data-id="general_entice" data-with-helpdesk="true"
                                                        data-is-concealed="false" class="crisp-1xaupiq"
                                                        style="display: block !important;"><span
                                    class="crisp-1sa0919"><span class="crisp-1s66m5e crisp-9dgo7z"><span
                                            class="crisp-yzclt"><span class="crisp-5me80a"><span
                                                    class="crisp-bz13r8 crisp-i1yn7v"></span><span
                                                    data-has-avatar="true" class="crisp-1sd4dmd"><span
                                                        class="crisp-191rfs5"><span class="crisp-pkd0me crisp-13qutdl">Welcome to Silko Funnels Technical Support.</span><span
                                                            data-id="online" class="crisp-h99wdo crisp-9dgo7z">Support is online.</span><span
                                                            data-id="away" class="crisp-h99wdo crisp-9dgo7z">Support is away.</span></span><span
                                                        class="crisp-z83vpo"><span
                                                            class="crisp-bjk43g crisp-4oo1n4"><span
                                                                style="background-image: url('https://image.crisp.chat/avatar/operator/0d30b760-8a4c-42d4-961a-69c12fe53bae/240/?1597088119999') !important;"
                                                                class="crisp-2tz7y crisp-1mh9nm6"></span></span></span></span></span></span><span
                                            data-when="online" class="crisp-a1mko8"><span
                                                class="crisp-vz5ota crisp-1jrqqbm"><span class="crisp-4snher"><span
                                                        class="crisp-rvg3pe crisp-wcida4 crisp-13qutdl">Chat with Silko Funnels Team</span></span></span></span><span
                                            data-when="away" class="crisp-a1mko8"><span data-pop="spotlight"
                                                                                        class="crisp-vz5ota crisp-1jrqqbm"><span
                                                    class="crisp-4snher"><span
                                                        class="crisp-rvg3pe crisp-wcida4 crisp-13qutdl">Search help center</span></span></span><span
                                                class="crisp-vz5ota crisp-1jrqqbm"><span class="crisp-4snher"><span
                                                        class="crisp-rvg3pe crisp-13qutdl">Chat</span></span></span></span></span></span></span></span><span
                            class="crisp-x94m06 crisp-ws3gf1"><span data-id="chat_closed" class="crisp-16qgsyi"><span
                                    class="crisp-1t2kwsy"><span class="crisp-174tqf9 crisp-1e8tjtx"></span></span><span
                                    data-is-ongoing="false" class="crisp-101bp3x"></span></span></span></a></div>
        </div>
    </div>

@endsection