@extends('layouts.master')
@section('title', 'test')


@section('content')

    <?php
        //echo print_r($posts->content());
        //echo "<br> 738296147812963";
        //echo var_dump($posts);
        //foreach ($posts as $post){
            //$aaa = json_decode($post->data,true);
            //echo print_r($aaa);
        //}
        //$posts = json_decode($posts->content(),true);
        //$blogsinfo = $posts->getData(true);
        //$blogsinfo = json_decode($posts->content(),true);
        //echo print_r($blogsinfo["current_page"]);
        //echo var_dump($blogsinfo['posts']);
        //echo print_r($blogsinfo->current_page);
        //echo var_dump($posts->getData(true));
        //echo "<br />";
        //echo print_r($posts->content());
        //echo print_r($blogsinfo['current_page']);
    ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 topic-list">
            <form method="get">
                name: <input type="text" name="name" />
                <input type="submit" value="Submit" />
            </form>
            <h1>Hello, {{ $name }}</h1>
        </div>
    </div>
</div>
@endsection