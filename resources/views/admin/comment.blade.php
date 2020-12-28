@extends("admin.index");


@section("content")
    <div>
        <h1>Comment</h1>
        <table class="table table-bordered table-responsive">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Content</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->post->title}}</td>
                    <td>{{$comment->user->name}}</td>
                    <td>{{$comment->comment_content}}</td>
                    <td>
                        <a href="/delete/comment/{{$comment->id}}" class="text-danger">Delete</a>
                    </td>
                    <td><a href="/post/{{$comment->comment_post_id}}" class="text-success ">View</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection()
