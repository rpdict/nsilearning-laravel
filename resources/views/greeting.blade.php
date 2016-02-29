@extends('layouts.master')
@section('title', 'test')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 topic-list">
            <form method="get">
                name: <input type="text" name="name" />
                <input type="submit" value="Submit" />
            </form>
            <h1>Hello, <?php echo $name; ?></h1>
        </div>
    </div>
</div>
@endsection