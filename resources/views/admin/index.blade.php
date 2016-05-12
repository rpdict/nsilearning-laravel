@extends('admin.dashboard')
@section('title', 'Blog List')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Responsive Hover Table</h3>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td><?php echo $post->author->name; ?></td>
                                    {{--<td><span class="label label-success">Approved</span></td>--}}
                                    <td><a href="/blog/show/{{ $post->id }}">{{ $post->title }}</a></td>
                                    <td>{{ $post->created_at->format('Y/m/d H:i') }}</td>
                                    <td>
                                        <form method="post" action="/admin/index">
                                            <button class="btn btn-xs btn-primary" name="edit"><span class="fa fa-edit"></span>Edit</button>
                                            <button class="btn btn-xs btn-warning" name="view"><span class="fa fa-eye"></span>View</button>
                                            <button class="btn btn-xs btn-danger" name="delete"><span class="fa fa-remove"></span>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        {{--<tr>--}}
                            {{--<td>219</td>--}}
                            {{--<td>Alexander Pierce</td>--}}
                            {{--<td>11-7-2014</td>--}}
                            {{--<td><span class="label label-warning">Pending</span></td>--}}
                            {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>657</td>--}}
                            {{--<td>Bob Doe</td>--}}
                            {{--<td>11-7-2014</td>--}}
                            {{--<td><span class="label label-primary">Approved</span></td>--}}
                            {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>175</td>--}}
                            {{--<td>Mike Doe</td>--}}
                            {{--<td>11-7-2014</td>--}}
                            {{--<td><span class="label label-danger">Denied</span></td>--}}
                            {{--<td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>--}}
                        {{--</tr>--}}
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>


@endsection