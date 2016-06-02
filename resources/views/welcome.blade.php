@extends('layouts.master')

@section('title', 'Welcome')

@section('welcome')

<style>
    body {
        background-color: #f3f3f3;
    }
</style>

<link href="css/full-width-pics.css" rel="stylesheet">
<!-- Full Width Image Header with Logo -->
<!-- Image backgrounds are set within the full-width-pics.css file. -->
<header class="image-bg-fluid-height">
    <img class="img-responsive img-center" src="{{ asset("images/tmlogo.png") }}" alt="" width="200px" height="200px">
</header>

<!-- Content Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-heading">Welcome to visit nsilearning website!</h1>
                <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
            </div>
        </div>
    </div>
</section>

<!-- Fixed Height Image Aside -->
<!-- Image backgrounds are set within the full-width-pics.css file. -->
<aside class="image-bg-fixed-height"></aside>



{{--<div class="new_information">--}}
    {{--<div class="container">--}}
        {{--<h1 class="margintop">welcome to visit nsilearning website!</h1>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
@section('content')

        <!-- Content Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-heading">Section Heading</h1>
                <p class="lead section-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p class="section-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

{{--<div class="container">--}}
    {{--<div class="recommend">--}}
    {{--<ul class="course_list">--}}
        {{--@foreach (range(0,8) as $x)--}}
        {{--<li>--}}
            {{--<a href="#">--}}
                {{--<img class="courseimage" src="images/2.png">--}}
                {{--<div class="img_hover">--}}
                    {{--<p class="kcjj">欢迎访问北软爱学会的最新动态！功能正在开发中，敬请谅解。</p>--}}
                    {{--<div class="courseinfo">--}}
                        {{--<p>十分推荐</p>--}}
                    {{--</div>--}}
                    {{--<div class="coursetime">--}}
                        {{--<p>2015年3月3日</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</a>--}}
            {{--<h3 class="course-title">--}}
                {{--<a href="#">--}}
                    {{--<span class="course-name">近期活动</span></br>--}}
                    {{--<span class="course-name-ch">人人都懂的编程课（Python）</span>--}}
                {{--</a>--}}
            {{--</h3>--}}
            {{--<div class="course-info">--}}
                {{--<span class="course-name-ch">评分&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;关注</span>--}}
            {{--</div>--}}
        {{--</li>--}}
        {{--@endforeach--}}
    {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection