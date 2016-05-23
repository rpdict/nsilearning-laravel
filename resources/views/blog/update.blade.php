@extends('admin.dashboard')

@section('title', 'Update Blog')

@section('content')
    <form class="form-horizontal" method="post" action="{{action("BlogController@updateBlog")}}">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10 col-md-8">
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
        </div>
        <div class="form-group">
            <label for="body" class="col-sm-2 control-label">Content</label>
            <div class="col-sm-10 col-md-8">
                <textarea class="form-control" id="content" name="content" rows="5">{{ $post->content }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="blogid" value="{{ $post->id }}">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
