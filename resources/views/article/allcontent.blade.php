@extends("index")


@section("content")
    @forelse($articles as $article)

        <h1 class="page-header">
            {{$article->title}}
            <small>{{$article->author}}</small>
        </h1>
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$article->created_at}}</p>
        <hr>

        <img class="img-responsive" src="{{url('/storage/image/'.$article->image)}}" alt="">
        <hr>
        <?php
            if (strlen($article->content) > 120)
                $article->content = substr($article->content, 0, 120) . '...';
            echo $article->content;
        ?>
{{--        <p>{{Str::limit($article->content)}}</p>--}}
        <a class="btn btn-primary" href="/post/{{$article->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        @empty
            <h1>No article yet</h1>
    @endforelse
@endsection()
