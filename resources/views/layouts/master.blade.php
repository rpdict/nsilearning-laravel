<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>@yield('title') - nsilearning</title>
    <meta name='viewport' content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
    {{--<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>--}}
    {{--<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
    {{--<link rel="stylesheet" href="/css/mystyle.css">--}}

    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <style>

    </style>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">nsilearning</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="/blog">Blogs</a></li>
            <li><a href="/about">About</a></li>
            @if(!Auth::guest())
                @if (Auth::user()->is_admin)
                      <li><a href="/admin">Admin</a></li>
                @endif
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if (Auth::user())
              <li><a href="/settings">{{ Auth::user()->name }}</a></li>
              @if(!Auth::guest())
                <li><a href="/auth/logout">Logout</a></li>
              @endif
            @else
              <li><a href="/auth/login">Login</a></li>
              <li><a href="/auth/register">Register</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    @yield('welcome')
    {{--@if (Request::getRequestUri() == '/blog')--}}
    {{--<div class="new_information">--}}
        {{--<img id="myImage" src="images/miniheader.jpg" width="100%" />--}}
    {{--</div>--}}
    {{--@endif--}}
    <div class="container margintop main">
        <div class='row'>
          <div class="col-md-9">
            @yield('content')
          </div>
          {{--<div class="col-md-3">--}}
            {{--@section('sidebar')--}}
            {{--<div class="panel panel-default">--}}
              {{--<div class="panel-body">--}}
                {{--<ul>--}}
                  {{--<li>--}}
{{--                    {{ $globalStatistics['topicsCount'] }}--}}
                    {{--Blogs--}}
                  {{--</li>--}}
                  {{--<li>--}}
{{--                    {{ $globalStatistics['usersCount'] }}--}}
                    {{--Users--}}
                  {{--</li>--}}
                {{--</ul>--}}
              {{--</div>--}}
            {{--</div>--}}
            {{--@show--}}
          {{--</div>--}}
        </div>
    </div>
    <script src="{{ asset("js/vendor.js") }}"></script>
    <script src="{{ asset("js/jquery.bootstrap-autohidingnavbar.min.js") }}"></script>

    <script>
        $("nav.navbar-fixed-top").autoHidingNavbar();
    </script>
    {{--<script type="text/javascript">--}}
        {{--var img = new Image();--}}
        {{--img.src = "images/header.jpg";--}}
        {{--img.onload = function() {--}}
            {{--document.getElementById('myImage').src = this.src;--}}
        {{--}--}}
    {{--</script>--}}
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.0.1
        </div>
        <strong>Copyright © 2015-<?php echo date("Y")?> <a href="https://github.com/rpdict">rpdict</a>.</strong> All rights reserved.
    </footer>
  </body>
</html>
