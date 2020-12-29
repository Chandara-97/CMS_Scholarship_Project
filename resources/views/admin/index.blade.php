@if(auth()->user()->role!="subscriber")

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Bootstrap Admin Template</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{asset("font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{asset("https://www.gstatic.com/charts/loader.js")}}"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
        <script src="{{asset("js/editor.js")}}"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/index">SB Admin</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{auth()->user()->name}} <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/admin/profile/{{auth()->user()->id}}"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                            </li>
                            <li>
                                <a href="/edit/user/{{auth()->user()->id}}"><i class="fa fa-fw fa-gear"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                {{--                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>--}}
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Post <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li>
                                    <a href="/admin/article">Home_Scholarship</a>
                                </li>
                                <li>
                                    <a href="/admin/article">Home_Scourcce</a>
                                </li>
                                <li>
                                    <a href="/admin/article">Highschool_Scholarship</a>
                                </li>
                                <li>
                                    <a href="/admin/article">Bachelor_scholarship</a>
                                </li>
                                <li>
                                    <a href="/admin/article">Master_scholarship</a>
                                </li>
                                <li>
                                    <a href="/admin/article">PhD_scholarship</a>
                                </li>
                                <li>
                                    <a href="/create">Add article</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/admin/comment"><i class="fa fa-fw fa-comments"></i> Comment</a>
                        </li>
                        <li>
                            <a href="/admin/contact"><i class="fa fa-fw fa-android"></i> Contact</a>
                        </li>

                        @if(auth()->user()->role=="admin")
                            <li>
                                <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-users"></i> User <i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="user" class="collapse">
                                    <li>
                                        <a href="/admin/user">View all users</a>
                                    </li>
                                    <li>
                                        <a href="/admin/user/create">Add user</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#profile"><i class="fa fa-fw fa-user"></i> Profile <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="profile" class="collapse">
                                <li>
                                    <a href="/admin/profile/{{auth()->user()->id}}">View profile</a>
                                </li>
                                <li>
                                    <a href="/edit/user/{{auth()->user()->id}}">Edit profile</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>

            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            @yield("content")
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="{{asset("js/jquery.js")}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{asset("js/bootstrap.min.js")}}"></script>
{{--        editor--}}
        <script src="{{asset("js/script.js")}}"></script>
    </body>

    </html>

@endif
