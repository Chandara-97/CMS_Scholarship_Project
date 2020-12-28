@extends("admin.index");

@section("content")
        <form action="/edit/{{$article->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{$article->title}}">
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control">
                    <option value="js">JavaScript</option>
                    <option value="bootstrap">Bootstrap</option>
                    <option value="php">PHP</option>
                </select>
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" class="form-control" name="author" value="{{$article->author}}" disabled>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" name="image" >
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="editor" class="form-control" cols="30" rows="10">{{$article->content}}</textarea>
            </div>
            <div class="form-group ">
                <input type="submit" class="btn btn-success" value="submit">
            </div>
        </form>


@endsection()
