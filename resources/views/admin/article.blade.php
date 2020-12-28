@extends("admin.index");


@section("content")
    <div>
        <h1>Article</h1>
        <table class="table table-bordered table-responsive">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Content</th>
                <th>Image</th>
                <th>Status</th>
                <th>View</th>
                <th colspan="2">Option</th>
                <th colspan="3" class="text-center">Action</th>
            </tr>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->author}}</td>
                    <td>{{$article->category}}</td>
                    <td>{{Str::limit($article->content)}}</td>
                    <td>
                        <img src="{{url('/storage/image/'.$article->image)}}" alt="Image" class="img-responsive" width="200px">
                    </td>
                    <td>{{$article->status}}</td>
                    <td>{{$article->view}}</td>
                    <td><a href="/post/{{"published"}}/{{$article->id}}" class="text-primary">Public</a></td>
                    <td><a href="/post/{{"draft"}}/{{$article->id}}" class="text-primary">Draft</a></td>
                    <td>
                        <a href="/delete/{{$article->id}}" class="text-danger">Delete</a>
                    </td>
                    <td><a href="/edit/{{$article->id}}" class="text-warning ">Edit</a></td>
                    <td><a href="/post/{{$article->id}}" class="text-success ">View</a></td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection()
