@extends("index")
@section("content")
    @forelse($articles as $article)

        <h1 class="page-header">
            {{$article->title}}
            <small>{{$article->author}}</small>
        </h1>
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$article->created_at}}</p>
        <hr>

        <img src="{{ asset($article->image) }}" alt="Image" class="img-responsive" width="200px">
        <hr>
        <?php
            if (strlen($article->content) > 120)
                $article->content = substr($article->content, 0, 120) . '...';
            echo $article->content;
        ?>
        <div>
        {{--<p>{{Str::limit($article->content)}}</p>--}}
        </div>
        
        <a class="btn btn-primary" href="/post/{{$article->id}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        <hr>
        @empty
            <h1>No article yet</h1>
    @endforelse
    
@endsection()
