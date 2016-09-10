<<<<<<< HEAD
@extends('layouts.master')
@section('title', 'My Blog')

@section('content')
  {{--<title>{{ config('blog.title') }}</title>--}}
  {{--<link rel="stylesheet" href="{{ asset("css/blog-home.css") }}">--}}
  <style>
  //    body {
  //        background-color: #f5f8fa;
  //    }

  //    .jumbotron {
  //        background-color: #fff;
  //        margin-bottom: 0px;
  //        border-bottom: solid 1px #f3f3f3;
  //        padding-top: 28px;
  //        padding-bottom: 28px;
  //        border-radius: 0px;
  //    }

  //    .container .jumbotron {
  //        border-radius: 0px;
  //    }

  //    .jumbotron hr{
  //        width: 100%;
  //    }

  //    .jumbotron p{
  //        font-size: 14px;
  //    }
  //    .container ul{
  //        padding-left: 0px;
  //    }

  //    .jumbotron li{
  //        list-style-type: none;
  //    }
  </style>

{{--<div class="container">--}}
    <?php
        //$posts = json_decode($posts->content(),true);
        //$blogsinfo = $posts->getData(true);
        //$blogsinfo = $blogsinfo["posts"];
    ?>
    {{--<h1>{{ config('blog.title') }}</h1>--}}
    {{--<h5>Page {{ $blogsinfo["current_page"] }} of {{ $blogsinfo['last_page'] }}</h5>--}}
    {{--<hr>--}}
    {{--<ul>--}}
        {{--@foreach ($blogsinfo['data'] as $post)--}}
            {{--<div class="jumbotron">--}}
            {{--<li>--}}
                {{--<h4><a href="/blog/show/{{ $post['id'] }}">{{ $post['title'] }}</a></h4>--}}
                {{--<em>({{ date("M jS Y g:ia", strtotime($post['created_at'])) }})</em>--}}
                {{--<p>--}}
                    {{--{{ str_limit($post['content']) }}--}}
                {{--</p>--}}
            {{--</li>--}}
            {{--</div>--}}
        {{--@endforeach--}}
        {{--<div class="dropload-down">--}}
            {{--<div class="dropload-load">--}}
                {{--<span class="loading"></span>加载中...--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</ul>--}}
    {{--<hr>--}}
{{--    {!! $blogsinfo['posts']->render() !!}--}}
{{--</div>--}}

  {{--<div class="container">--}}
      {{--<h1>{{ config('blog.title') }}</h1>--}}
      {{--<h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>--}}
      {{--<hr>--}}
      {{--<ul>--}}

          {{--@foreach ($posts as $post)--}}
              {{--<div class="jumbotron">--}}
                  {{--<li>--}}
                      {{--<h4><a href="/blog/show/{{ $post->id }}">{{ $post->title }}</a></h4>--}}
                      {{--<em>(write by {{ $post->author->name }} at {{ $post->created_at->format('M jS Y g:ia') }})</em>--}}
                      {{--<p>--}}
                          {{--{{ str_limit($post->content) }}--}}
                      {{--</p>--}}
                  {{--</li>--}}
              {{--</div>--}}
          {{--@endforeach--}}

      {{--</ul>--}}
      {{--<hr>--}}
      {{--{!! $posts->render() !!}--}}
  {{--</div>--}}


  <div class="container">

      <div class="row">

          <!-- Blog Entries Column -->
          <div class="col-md-8">

              <h1 class="page-header">
                  {{ config('blog.title') }}
                  {{--<small>Secondary Text</small>--}}
              </h1>

              <!-- First Blog Post -->
              @foreach ($posts as $post)
                  <h2>
                      <a href="/blog/show/{{ $post->id }}">{{ $post->title }}</a>
                  </h2>
                  <p class="lead">
                      by <a href="index.php">{{ $post->author->name }}</a>
                  </p>
                  <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->format('M jS Y g:ia') }}</p>
                  {{--<hr>--}}
                  {{--<img class="img-responsive" src="http://placehold.it/900x300" alt="">--}}
                  {{--<hr>--}}
                  <p>
                    {{ str_limit($post->content) }}
                  </p>
                  <a class="btn btn-primary" href="/blog/show/{{ $post->id }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                  <hr>
              @endforeach
              {!! $posts->render() !!}



                      <!-- Pager -->
              <ul class="pager">
                  <li class="previous">
                      <a href="#">&larr; Older</a>
                  </li>
                  <li class="next">
                      <a href="#">Newer &rarr;</a>
                  </li>
              </ul>

          </div>

          <!-- Blog Sidebar Widgets Column -->
          <div class="col-md-4">

              <!-- Blog Search Well -->
              <div class="well">
                  <h4>Blog Search</h4>
                  <div class="input-group">
                      <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                  </div>
                  <!-- /.input-group -->
              </div>

              <!-- Blog Categories Well -->
              <div class="well">
                  <h4>Blog Categories</h4>
                  <div class="row">
                      <div class="col-lg-6">
                          <ul class="list-unstyled">
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                          </ul>
                      </div>
                      <!-- /.col-lg-6 -->
                      <div class="col-lg-6">
                          <ul class="list-unstyled">
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                          </ul>
                      </div>
                      <!-- /.col-lg-6 -->
                  </div>
                  <!-- /.row -->
              </div>

              <!-- Side Widget Well -->
              <div class="well">
                  <h4>Side Widget Well</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
              </div>

          </div>

      </div>
      <!-- /.row -->

      {{--<hr>--}}

      <!-- Footer -->
      {{--<footer>--}}
          {{--<div class="row">--}}
              {{--<div class="col-lg-12">--}}
                  {{--<p>Copyright &copy; Your Website 2014</p>--}}
              {{--</div>--}}
              {{--<!-- /.col-lg-12 -->--}}
          {{--</div>--}}
          {{--<!-- /.row -->--}}
      {{--</footer>--}}

  </div>
  <!-- /.container -->

=======
@extends('layouts.master')
@section('title', 'My Blog')

@section('content')
  {{--<title>{{ config('blog.title') }}</title>--}}
  {{--<link rel="stylesheet" href="{{ asset("css/blog-home.css") }}">--}}
  <style>
  //    body {
  //        background-color: #f5f8fa;
  //    }

  //    .jumbotron {
  //        background-color: #fff;
  //        margin-bottom: 0px;
  //        border-bottom: solid 1px #f3f3f3;
  //        padding-top: 28px;
  //        padding-bottom: 28px;
  //        border-radius: 0px;
  //    }

  //    .container .jumbotron {
  //        border-radius: 0px;
  //    }

  //    .jumbotron hr{
  //        width: 100%;
  //    }

  //    .jumbotron p{
  //        font-size: 14px;
  //    }
  //    .container ul{
  //        padding-left: 0px;
  //    }

  //    .jumbotron li{
  //        list-style-type: none;
  //    }
  </style>

{{--<div class="container">--}}
    <?php
        //$posts = json_decode($posts->content(),true);
        //$blogsinfo = $posts->getData(true);
        //$blogsinfo = $blogsinfo["posts"];
    ?>
    {{--<h1>{{ config('blog.title') }}</h1>--}}
    {{--<h5>Page {{ $blogsinfo["current_page"] }} of {{ $blogsinfo['last_page'] }}</h5>--}}
    {{--<hr>--}}
    {{--<ul>--}}
        {{--@foreach ($blogsinfo['data'] as $post)--}}
            {{--<div class="jumbotron">--}}
            {{--<li>--}}
                {{--<h4><a href="/blog/show/{{ $post['id'] }}">{{ $post['title'] }}</a></h4>--}}
                {{--<em>({{ date("M jS Y g:ia", strtotime($post['created_at'])) }})</em>--}}
                {{--<p>--}}
                    {{--{{ str_limit($post['content']) }}--}}
                {{--</p>--}}
            {{--</li>--}}
            {{--</div>--}}
        {{--@endforeach--}}
        {{--<div class="dropload-down">--}}
            {{--<div class="dropload-load">--}}
                {{--<span class="loading"></span>加载中...--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</ul>--}}
    {{--<hr>--}}
{{--    {!! $blogsinfo['posts']->render() !!}--}}
{{--</div>--}}

  {{--<div class="container">--}}
      {{--<h1>{{ config('blog.title') }}</h1>--}}
      {{--<h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>--}}
      {{--<hr>--}}
      {{--<ul>--}}

          {{--@foreach ($posts as $post)--}}
              {{--<div class="jumbotron">--}}
                  {{--<li>--}}
                      {{--<h4><a href="/blog/show/{{ $post->id }}">{{ $post->title }}</a></h4>--}}
                      {{--<em>(write by {{ $post->author->name }} at {{ $post->created_at->format('M jS Y g:ia') }})</em>--}}
                      {{--<p>--}}
                          {{--{{ str_limit($post->content) }}--}}
                      {{--</p>--}}
                  {{--</li>--}}
              {{--</div>--}}
          {{--@endforeach--}}

      {{--</ul>--}}
      {{--<hr>--}}
      {{--{!! $posts->render() !!}--}}
  {{--</div>--}}


  <div class="container">

      <div class="row">

          <!-- Blog Entries Column -->
          <div class="col-md-8">

              <h1 class="page-header">
                  {{ config('blog.title') }}
                  {{--<small>Secondary Text</small>--}}
              </h1>

              <!-- First Blog Post -->
              @foreach ($posts as $post)
                  <h2>
                      <a href="/blog/show/{{ $post->id }}">{{ $post->title }}</a>
                  </h2>
                  <p class="lead">
                      by <a href="index.php">{{ $post->author->name }}</a>
                  </p>
                  <p><span class="glyphicon glyphicon-time"></span> Posted on {{ $post->created_at->format('M jS Y g:ia') }}</p>
                  {{--<hr>--}}
                  {{--<img class="img-responsive" src="http://placehold.it/900x300" alt="">--}}
                  {{--<hr>--}}
                  <p>
                    {{ str_limit($post->content) }}
                  </p>
                  <a class="btn btn-primary" href="/blog/show/{{ $post->id }}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                  <hr>
              @endforeach
              {!! $posts->render() !!}



                      <!-- Pager -->
              <ul class="pager">
                  <li class="previous">
                      <a href="#">&larr; Older</a>
                  </li>
                  <li class="next">
                      <a href="#">Newer &rarr;</a>
                  </li>
              </ul>

          </div>

          <!-- Blog Sidebar Widgets Column -->
          <div class="col-md-4">

              <!-- Blog Search Well -->
              <div class="well">
                  <h4>Blog Search</h4>
                  <div class="input-group">
                      <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                  </div>
                  <!-- /.input-group -->
              </div>

              <!-- Blog Categories Well -->
              <div class="well">
                  <h4>Blog Categories</h4>
                  <div class="row">
                      <div class="col-lg-6">
                          <ul class="list-unstyled">
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                          </ul>
                      </div>
                      <!-- /.col-lg-6 -->
                      <div class="col-lg-6">
                          <ul class="list-unstyled">
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                              <li><a href="#">Category Name</a>
                              </li>
                          </ul>
                      </div>
                      <!-- /.col-lg-6 -->
                  </div>
                  <!-- /.row -->
              </div>

              <!-- Side Widget Well -->
              <div class="well">
                  <h4>Side Widget Well</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
              </div>

          </div>

      </div>
      <!-- /.row -->

      {{--<hr>--}}

      <!-- Footer -->
      {{--<footer>--}}
          {{--<div class="row">--}}
              {{--<div class="col-lg-12">--}}
                  {{--<p>Copyright &copy; Your Website 2014</p>--}}
              {{--</div>--}}
              {{--<!-- /.col-lg-12 -->--}}
          {{--</div>--}}
          {{--<!-- /.row -->--}}
      {{--</footer>--}}

  </div>
  <!-- /.container -->

>>>>>>> master
@endsection