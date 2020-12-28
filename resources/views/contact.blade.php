@extends("index")

@section("content")
    <h1>Want to give us some idea?</h1>
    <h2>Drop us some messages below</h2>
    <form action="/contact" method="POST">
        @csrf
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject">
            @error('subject')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Description</label>
            <textarea name="content" class="form-control" cols="30" rows="10"></textarea></div>
            @error('subject')
                <span class="invalid-feedback" role="alert">
                    <strong class="text-danger">{{ $message }}</strong>
                </span>
            @enderror
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Send">
        </div>
    </form>
    
    @if(session("success"))
        <h3 class="font-weight-bold text-success">{{session()->get("success")}}</h3>
    @endif()

@endsection()
