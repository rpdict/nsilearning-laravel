@extends('layouts.master')
@section('title', 'My Blog')

@section('content')
  {{--<title>{{ config('blog.title') }}</title>--}}
  <style>
      body {
          background-color: #f5f8fa;
      }

      .jumbotron {
          background-color: #fff;
          margin-bottom: 0px;
          border-bottom: solid 1px #f3f3f3;
          padding-top: 28px;
          padding-bottom: 28px;
          border-radius: 0px;
      }

      .container .jumbotron {
          border-radius: 0px;
      }

      .jumbotron hr{
          width: 100%;
      }

      .jumbotron p{
          font-size: 14px;
      }
      .container ul{
          padding-left: 0px;
      }

      .jumbotron li{
          list-style-type: none;
      }
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

  <div class="container">
      <h1>{{ config('blog.title') }}</h1>
      <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
      <hr>
      <ul>

          @foreach ($posts as $post)
              <div class="jumbotron">
                  <li>
                      <h4><a href="/blog/show/{{ $post->id }}">{{ $post->title }}</a></h4>
                      <em>({{ $post->created_at->format('M jS Y g:ia') }})</em>
                      <p>
                          {{ str_limit($post->content) }}
                      </p>
                  </li>
              </div>
          @endforeach

      </ul>
      <hr>
      {!! $posts->render() !!}
  </div>

@endsection