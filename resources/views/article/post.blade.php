@extends("index")


@section("content")
        <h1 class="page-header">
            {{$article->title}}
            <small>{{$article->author}}</small>
        </h1>
        <p><span class="glyphicon glyphicon-time"></span> Posted on {{$article->created_at}}</p>
        <hr>
        <img class="img-responsive" src="{{url('/storage/image/'.$article->image)}}" alt="">
        <hr>
        <div>
            <?php
                echo $article->content;
            ?>
        </div>
        <h6 class="text-muted">Liked:{{$like}}</h6>
        <div class="flex">
            <form action="/article/{{$article->id}}/{{$article->isLikedBy(auth()->user()->id)?'dislike':'like'}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">{{$article->isLikedBy(auth()->user()->id)?'Liked':'Like'}}</button>
            </form>
        </div>
        <hr>


{{--        make admin--}}
        <div class="well">
            <h4>Leave a comment</h4>
            <form action="/comment/{{$article->id}}" method="POST" role="form">
                @csrf
                <div>
                    <label for="comment">Your comment</label>
                    <textarea name="comment" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success" name="submit" >Comment</button>
            </form>
        </div>

        <!-- Comment -->
        <small class="text-muted">Comment count:{{$comment_count}}</small>
        @forelse($data as $row)
            <div class="media">
                <a class="pull-left" href="#">

                    <img class="media-object" src="{{url('/storage/image/'.$row->user->image)}}" alt="profile" width="80px">
                </a>

                <div class="media-body">
                    <h4 class="media-heading">
                        <p>{{$row->user->name}}  <span><small>{{$row->created_at}}</small></span></p>

                    </h4>
                    <h3>{{$row->comment_content}}</h3>
                </div>
            </div>
        @empty
            <h2>No comment</h2>
        @endforelse
@endsection()
