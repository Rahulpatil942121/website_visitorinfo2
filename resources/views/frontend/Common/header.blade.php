<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="{{asset('assets/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <!-- <link href="{{asset('assets/css/morris/morris.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- jvectormap -->
        <!-- <link href="{{asset('assets/css/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- fullCalendar -->
        <!-- <link href="{{asset('assets/css/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- Daterange picker -->
        <!-- <link href="{{asset('assets/css/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css" /> -->
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- <link href="{{asset('assets/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}" rel="stylesheet" type="text/css" /> -->

         <!-- DATA TABLES -->
        <link href="{{asset('assets/css/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        <!-- Theme style -->
        <link href="{{asset('assets/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .no-print
            {
                display: none!important;
            }
        </style>
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="javascript:Void(0);" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">                          
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{{Auth::User()->name}} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    @if(isset(Auth::User()->image))
                                    <img src="{{asset(Auth::User()->image)}}" class="img-circle" alt="User Image" />
                                    @else
                                    <img src="{{asset('assets/img/avatar3.png')}}" class="img-circle" alt="User Image" />
                                    @endif
                                    <p>
                                        {{Auth::User()->name}}
                                        <!--<small>Position :- { {Auth::User()->role_name} }</small>-->
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!--<li class="user-body">-->
                                <!--    <div class="col-xs-4 text-center">-->
                                <!--        <a href="#">Followers</a>-->
                                <!--    </div>-->
                                <!--    <div class="col-xs-4 text-center">-->
                                <!--        <a href="#">Sales</a>-->
                                <!--    </div>-->
                                <!--    <div class="col-xs-4 text-center">-->
                                <!--        <a href="#">Friends</a>-->
                                <!--    </div>-->
                                <!--</li>-->
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{url('/Profile')}}" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            @if(isset(Auth::User()->image))
                            <img src="{{asset(Auth::User()->image)}}" class="img-circle" alt="User Image" />
                            @else
                            <img src="{{asset('assets/img/avatar3.png')}}" class="img-circle" alt="User Image" />
                            @endif
                        </div>
                        <div class="pull-left info">
                            <p>Hello, {{Auth::User()->name}}</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                     
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        @if(Auth::User()->role != 1)
                            <li class="@if($flag == 1)active @endif">
                                <a href="{{url('/Dashboard')}}">
                                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="@if($flag == 2)active @endif">
                                <a href="{{url('/Product-List')}}">
                                    <i class="fa fa-th"></i> <span>Product List</span> 
                                </a>
                            </li>
                            <li class="@if($flag == 3)active @endif">
                                <a href="{{url('/Portal-List')}}">
                                    <i class="fa fa-th"></i> <span>Portal</span> 
                                </a>
                            </li>
                         @endif
                            <li class="@if($flag == 5)active @endif">
                                <a href="{{url('/Visitor-List')}}">
                                    <i class="fa fa-th"></i> <span>Visitors</span> 
                                </a>
                            </li>
                        @if(Auth::User()->role == 0)
                            <li class="@if($flag == 8)active @endif">
                                <a href="{{url('/Users-List')}}">
                                    <i class="fa fa-th"></i> <span>Client</span> 
                                </a>
                            </li>
                            <li class="@if($flag == 9)active @endif">
                                <a href="{{url('/Users-Type-List')}}">
                                    <i class="fa fa-th"></i> <span>User Type</span> 
                                </a>
                            </li>
                            <li class="@if($flag == 9)active @endif">
                                <a href="{{url('/Company-List')}}">
                                    <i class="fa fa-th"></i> <span>Firm</span> 
                                </a>
                            </li>
                         @endif
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>