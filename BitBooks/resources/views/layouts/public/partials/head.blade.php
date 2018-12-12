<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from thunder-team.com/friend-finder/newsfeed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 May 2017 13:46:57 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is social network html5 template available in themeforest......" />
    <meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
    <meta name="robots" content="index, follow" />
    <title>BitBook</title>

    <!-- Stylesheets
    ================================================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}" />
    <link href="{{ asset('assets/css/emoji.css')}}" rel="stylesheet">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/title.png')}}"/>
</head>
<style>
    .bitLogo{
        margin-top: 18px;
    }
    .logotxt{
        font-size: 28px;
        color: #fff;
    }
    .logog{
        margin-top: -10px;
    }
</style>
<body>

<!-- Header
================================================= -->
<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/Newsfeed')}}" >
                    <i>
                        <img src="{{ asset('assets/images/001_lg.png')}}" class="img-circle logog" height="36" width="36">
                        <i  class="logotxt">BitBook</i>
                    </i>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li class="dropdown"><a href="{{ url('/Newsfeed') }}">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Newsfeed <span><img src="{{ asset('assets/images/down-arrow.png')}}" alt="" /></span></a>
                        <ul class="dropdown-menu newsfeed-home">
                            <li><a href="{{ url('/Newsfeed') }}">Newsfeed</a></li>
                            <li><a href="{{ url('/Find-friends') }}">Find friends </a></li>
                            <li><a href="{{ url('/Show-request') }}">Request Friend
                                    <span style=" font-weight: bold; color: #43b424;">(
                                        {{ App\Friends::where('accepted', 0)->where('friend_id', Auth::user()->id)->count() }} )
                                    </span>
                                </a></li>
                            <li><a href="{{ url('/Chat') }}">Chat</a></li>
                            <li><a href="{{ url('/Image') }}">Images</a></li>
                            <li><a href="{{ url('/Video') }}">Videos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Timeline <span><img src="{{ asset('assets/images/down-arrow.png')}}" alt="" /></span></a>
                        <ul class="dropdown-menu login">
                            <li class="@yield('time_act')"><a href="{{ url('/Timeline') }}">Timeline</a></li>
                            <li class="@yield('about_act')"><a href="{{ url('/Timeline-about') }}">Timeline About</a></li>
                            <li><a href="{{ url('/Timeline-album') }}">Timeline Album</a></li>
                            <li><a href="{{ url('/Timeline-friends') }}">Timeline Friends</a></li>
                            <li><a href="{{ url('/Timeline-edit-profile') }}">Edit: Basic Info</a></li>
                            <li><a href="{{ url('/Timeline-edit-work') }}">Edit: Work</a></li>
                            <li><a href="{{ url('/Timeline-edit-interest') }}">Edit: Interests</a></li>
                            <li><a href="{{ url('/Account-setting') }}">Account Settings</a></li>
                            <li><a href="{{ url('/Change-password') }}">Change Password</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{ url('/Contact') }}">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu login">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <i class="icon ion-android-search"></i>
                        <input type="text" class="form-control" placeholder="Search friends, photos, videos">
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
<!--Header End-->