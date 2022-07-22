<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#142F6C">

        <title>Ero Aguilar Web Development Test for Finpub Solutions</title>

        <link rel="icon" href="public/favicon.ico">

        <link rel="stylesheet" href="/public/css/app.css">
        <link rel="stylesheet" href="/resources/css/custom.css">
    </head>

    <body class="bg-primary">
        <div class="container-fluid header-container">
            <div class="container-fluid p-4 d-flex flex-column justify-content-center align-items-center header-form">
                <img class="my-4" width="250" src="/resources/img/logo.png" />

                <div class="container p-3">
                    <div class="row g-5">
                        <div class="col-lg-7 col-md-12 col-sm-12 p-0 embed-responsive embed-responsive-1by1 position-relative d-flex justify-content-center align-items-center">
                            <iframe id="header-video" class="w-100 h-100 embed-responsive-item bg-black header-video" src="https://player.vimeo.com/video/718817942?h=3251723f69" height="350" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <h1 class="text-white text-center mb-2 mx-4 header-intro">This Canadian company could be the next tech unicorn for</h1>

                            <div class="bg-primary py-3 px-4 rounded">
                                <form action="!#" method="get" id="email-form">
                                    <input id="email-input" class="form-control border-0 text-center mb-2 fs-5" type="text" placeholder="Enter your email address here" required>

                                    <div class="d-flex align-items-start justify-content-start mb-3">
                                        <input class="mt-1" type="checkbox" id="acknowledge-box" autocomplete="off" required>
                                        &nbsp;&nbsp;&nbsp;
                                        <label class="text-black" for="acknowledge-box">I acknowledge I have read and understand Tips for Traders 
                                            <a href="https://tipsfortraders.com/privacy-policy/" target="_blank" class="text-black text-decoration-none privacy-policy-link">privacy policy</a> and the Scryb 
                                            <a href="https://scryb.ai/privacy-policy" target="_blank" class="text-black text-decoration-none privacy-policy-link">privacy policy</a> and consent to the use of my personal data for marketing purposes by signing up.
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <button type="submit" class="btn btn-success btn-lg text-white text-nowrap btn-submit-email fs-2">
                                            SIGN UP NOW!
                                        </button>
                                    </div>

                                    <div id="email-loader" class="d-flex justify-content-center align-items-center d-none">
                                        <img src="/resources/img/loader.gif" width="50" height="50" />
                                        &nbsp;&nbsp;&nbsp;
                                        <b class="text-center">Please wait while we are verify your email address before continuing...</b>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <script type="text/javascript" src="/public/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(function(){
                $('#email-form').submit(function(e) {

                    $('#email-loader').removeClass('d-none');

                    let email = $('#email-input').val();
                    e.stopPropagation();
                    e.preventDefault();
                    $.ajax({
                        url: 'https://apiwindow.com/ws2/iorg/?project=tips4traders&list[]=scryb&email='+email,
                        type: 'GET',
                        success: function(data) {
                            $('#email-loader').addClass('d-none');

                            if (data == 'Invalid Email')
                            {
                                $('#alert-message').html('It looks like you have entered an <b class="text-danger">Invalid Email Address</b>, the format is correct but the email address is non-existing and can not receive messages.<br><br>Please try again and use a valid and working one. Thank you!')
                                $('#alert').modal('show');
                            }
                            else {
                                $('#inf_field_Email').val(email);
                                $('#keap-form').modal('show');
                            }
                        }
                    });
                    return false;
                });
            });
        </script>
        <script type="text/javascript" src="https://wzd612.infusionsoft.app/app/webTracking/getTrackingCode"></script>
        <script type="text/javascript" src="https://wzd612.infusionsoft.com/app/timezone/timezoneInputJs?xid=4c77b2103a689b7cbe33f5eda3a80f92"></script>
        <script type="text/javascript" src="https://wzd612.infusionsoft.com/js/jquery/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="https://wzd612.infusionsoft.app/app/webform/overwriteRefererJs"></script>
        
        <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="alert" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body bg-primary">
                        <p id="alert-message" class="fs-3 text-center text-dark"></p>
                    </div>
                    <div class="modal-footer bg-secondary">
                        <button type="button" class="btn btn-success btn-lg text-white" data-bs-dismiss="modal">
                            Okay, Thank you.
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="keap-form" tabindex="-1" role="dialog" aria-labelledby="keap-form" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-secondary">
                        <h5 class="modal-title">To finish your signing up process, please fill out this form.</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-primary">
                        <form accept-charset="UTF-8" action="https://wzd612.infusionsoft.com/app/form/process/4c77b2103a689b7cbe33f5eda3a80f92" class="infusion-form" id="inf_form_4c77b2103a689b7cbe33f5eda3a80f92" method="POST">
                            <input name="inf_form_xid" type="hidden" value="4c77b2103a689b7cbe33f5eda3a80f92" />
                            <input name="inf_form_name" type="hidden" value="Web Form" />
                            <input name="infusionsoft_version" type="hidden" value="1.70.0.473227" />
                            
                            <div>
                                <div class="authoring-image image-snippet" contentid="image">
                                    <div class="authoring-image image-snippet" contentid="image">
                                        <div class="imageSnippet-alignDiv d-flex justify-content-center align-items-center p-3">
                                            <img src="https://wzd612.files.keap.app/wzd612/72a16291-983a-4a30-9f5a-0a89e77d2515" width="300" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="infusion-field mb-4">
                                <label for="inf_field_FirstName" class="fs-4 mb-2 text-muted">First Name or Full Name:</label>
                                <input class="form-control fs-3" id="inf_field_FirstName" name="inf_field_FirstName" type="text" />
                            </div>
                            
                            <div class="infusion-field mb-4">
                                <label for="inf_field_Email" class="fs-4 mb-2 text-muted">Email Address: (Validated)</label>
                                <input class="form-control fs-3 border border-success" id="inf_field_Email" name="inf_field_Email" type="text" />
                            </div>
                            
                            <div class="infusion-submit d-flex justify-content-end">
                                <button class="btn btn-success btn-lg text-white" type="submit">Submit and Finish Signing Up.</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

    </body>
</html>
