<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.12
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
</head>
<body class="app flex-row align-items-center">
<?php
if (Session::get('email')){
    Session::put('email',null);
}
if (Session::get('crmsg')){
    Session::put('crmsg',null);
}
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
               <form action="{{route('admin.adduser')}}" method="post">
                   {{csrf_field()}}
                    <h1>Register</h1>
                   <?php
                   if (Session::get('err')){
                       echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> Alert!</h4>'.Session::get('err').' </div>';
                       Session::put('err',null);
                   }
                   ?>
                    <p class="text-muted">Create your account</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>

                  </span>

                        </div>
                        <input class="form-control" name="username" type="text" placeholder="Username">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input class="form-control" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                        </div>
                        <input class="form-control" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-lock"></i>
                  </span>
                        </div>
                        <input class="form-control" type="password" name="rpassword" placeholder="Repeat password">
                    </div>
                    <button class="btn btn-block btn-success" type="submit">Create Account</button>
                </div>
              </form>
{{--                <div class="card-footer p-4">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-6">--}}
{{--                            <button class="btn btn-block btn-facebook" type="button">--}}
{{--                                <span>facebook</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="col-6">--}}
{{--                            <button class="btn btn-block btn-twitter" type="button">--}}
{{--                                <span>twitter</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>
<!-- CoreUI and necessary plugins-->
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="node_modules/pace-progress/pace.min.js"></script>
<script src="node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="node_modules/@coreui/coreui/dist/js/coreui.min.js"></script>
</body>
</html>
