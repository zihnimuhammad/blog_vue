<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
        <title>Register User</title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.css') }}" />

        <!-- text fonts -->
        <link rel="stylesheet" href="{{ asset('admin/css/ace-fonts.css') }}" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{ asset('admin/css/ace.css') }}" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="../assets/css/ace-part2.css') }}" />
        <![endif]-->
        <link rel="stylesheet" href="{{ asset('admin/css/ace-rtl.css') }}" />

       
    </head>

    <body class="login-layout light-login">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <img src="{{asset('Gambar/logo.png')}}" alt="AdminLTE Logo" class="brand-image" height="5%" width="50%" alt="" srcset="" style="opacity: 1">
                                    <span class="grey" id="id-text2"></span>
                                </h1> 
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header blue lighter bigger">
                                                <i class="ace-icon fa fa-users  green"></i>
                                                Masukkan data anda
                                            </h4>

                                            <div class="space-6"></div>
                                           <div class="clearfix">
												@if (Session::has('msgbox'))
												<div class="alert alert-success">
                                                <strong>SUCCESS!</strong>Berhasil daftar, silahkan login
													</div>													
												 @endif
												 
												 @if (Session::has('msgboxfailed'))
												<div class="alert alert-danger">
                                                <strong>ERROR!</strong>gagal register, silakan coba kembali
													</div>													
												 @endif
											</div>
                                            
                                      
                                            <form method="post" action="login/prosesregister" >
											@csrf
                                                <fieldset>
													
													<label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="Nama Lengkap" name="first_name" required />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>
													
													<label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="email" name="email" required />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>
													
													<label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="phone" name="phone" required />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>
													
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="Username" name="username" required />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Password" name="password" required />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>
													
													
                                                    

                                                    <div class="space"></div>

                                                    <div class="clearfix">
                                                         

                                                        <button type="submit" class="width-35 pull-right btn btn-sm btn-primary"> 
                                                            <span class="bigger-110">Register</span>
                                                        </button>
														<a href="/login" class="width-35 pull-right btn btn-sm btn-default"> 
                                                            <span class="bigger-110">Login</span>
                                                        </a>
                                                    </div>
													<br>
													 
                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>

                                            
                                        </div><!-- /.widget-main -->

                                        <div class="toolbar clearfix">
                                            
                                        </div>
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->

                                 
                            </div><!-- /.position-relative -->

                            <div class="navbar-fixed-top align-right">
                                
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='{{ asset('admin/js/jquery.js')}}'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement)
                document.write("<script src='../assets/js/jquery.mobile.custom.js')}}'>" + "<" + "/script>");
        </script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function ($) {
                $(document).on('click', '.toolbar a[data-target]', function (e) {
                    e.preventDefault();
                    var target = $(this).data('target');
                    $('.widget-box.visible').removeClass('visible');//hide others
                    $(target).addClass('visible');//show target
                });
            });



            //you don't need this, just used for changing background
            jQuery(function ($) {
                $('#btn-login-dark').on('click', function (e) {
                    $('body').attr('class', 'login-layout');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-light').on('click', function (e) {
                    $('body').attr('class', 'login-layout light-login');
                    $('#id-text2').attr('class', 'grey');
                    $('#id-company-text').attr('class', 'blue');

                    e.preventDefault();
                });
                $('#btn-login-blur').on('click', function (e) {
                    $('body').attr('class', 'login-layout blur-login');
                    $('#id-text2').attr('class', 'white');
                    $('#id-company-text').attr('class', 'light-blue');

                    e.preventDefault();
                });

            });
        </script>
    </body>
</html>
