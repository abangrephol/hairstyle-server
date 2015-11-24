<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from prototype-crm.embedinfosoft.com/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2014 15:16:00 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="images/favicon.png" type="image/png">-->

  <title>CRM Pluss</title>

  <link rel="stylesheet" href="css/style.default.css">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="signinpanel">

        <div class="row">

            <div class="col-md-7">

                <div class="signin-info">
                    <div class="logopanel">
                        <img src="images/Wirednest-w3.png" alt="Compony Logo" />
                    </div><!-- logopanel -->

                    <div class="mb20"></div>

                    <h5><strong>Welcome to CRM system</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Custom CRM System</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Manage your contacts</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i>Manage your clients</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Manage Events</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> and much more...</li>
                    </ul>
                    <div class="mb20"></div>
                    <strong hidden>Not a member? <a href="#">Sign Up</a></strong>
                </div><!-- signin0-info -->

            </div><!-- col-sm-7 -->

            <div class="col-md-5">
                @if(Session::get('errMsg')!='')
                	{{Session::get('errMsg')}}
                @endif

           {!! Form::open(array('url' => '/auth/login')) !!}
                    <h4 class="nomargin">Sign In</h4>
                    <p class="mt5 mb20">Login to access your account.</p>
                    <input type="email" class="form-control uname" placeholder="Email" name="email">
                    <input type="password" class="form-control pword" placeholder="Password" name="password" id="password">
                                        <a href="#"><small>Forgot Your Password?</small></a>
                                        <button class="btn btn-success btn-block" type="submit">Sign In</button>
          {!! Form::close() !!}
             </div><!-- col-sm-5 -->

                    </div><!-- row -->

                    <div class="signup-footer">
                        <div class="pull-left">
                            &copy; 2014. All Rights Reserved.
                        </div>
                        <div class="pull-right">

                        </div>
                    </div>

                </div><!-- signin -->

            </section>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/custom.js"></script>

            </body>

            <!-- Mirrored from prototype-crm.embedinfosoft.com/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jul 2014 15:16:00 GMT -->
            </html>

