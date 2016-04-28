@extends('layouts.master')

@section('title', 'Welcome')

@section('welcome')

<style>
    body {
        background-color: #f3f3f3;
    }
</style>
<div class="new_information">
    <div class="container">
        <h1 class="margintop">welcome to visit nsilearning website!</h1>
    </div>
</div>
@endsection
@section('content')
<div class="container">
    <div class="recommend">
    <ul class="course_list">
        @foreach (range(0,8) as $x)
        <li>
            <a href="#">
                <img class="courseimage" src="images/2.png">
                <div class="img_hover">
                    <p class="kcjj">本课程专为变成初学者设计，使用流行的python语言。</p>
                    <div class="courseinfo">
                        <p>中文字幕</p>
                    </div>
                    <div class="coursetime">
                        <p>2015年3月3日</p>
                    </div>
                </div>
            </a>
            <h3 class="course-title">
                <a href="#">
                    <span class="course-name">Programming for Everybody (Getting Started with Python)</span></br>
                    <span class="course-name-ch">人人都懂的编程课（Python）</span>
                </a>
            </h3>
            <div class="course-info">
                <span class="course-name-ch">评分&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;关注</span>
            </div>
        </li>
        @endforeach
    </ul>
    </div>
</div>
@endsection