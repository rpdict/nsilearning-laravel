@extends('layouts.master')
@section('title', 'About us')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 topic-list">
            <h1>Hello</h1>
            <?php
                foreach (range(0,1000) as $x){
            echo '</br>1';

            };
            ?>
        </div>
    </div>
</div>
@endsection