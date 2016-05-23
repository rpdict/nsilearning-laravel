<html>
<head>
    <title>{{ $post->title }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
          rel="stylesheet">
    <meta name='viewport' content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <h1>{{ $post->title }}</h1>
    <h5>{{ $post->created_at->format('M jS Y g:ia') }}</h5>
    {{--<hr>--}}
    {{--{!! nl2br(e($post->content)) !!}--}}
    <hr>
    {!! nl2br($post->content) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
        « Back
    </button>
</div>
</body>
</html>