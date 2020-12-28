@extends("admin.index");


@section("content")
    <div>
        <h1>Comment</h1>
        <table class="table table-bordered table-responsive">
            <tr>
                <th>Email</th>
                <th>Subject</th>
                <th>Content</th>
                <th>Status</th>
                <th colspan="3" class="text-center">Action</th>
            </tr>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->user->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->content}}</td>
                    <td>{{$contact->replied_back}}</td>
                    <td>
                        <a href="/contact/status/{{"respond"}}/{{$contact->id}}" class="text-danger">Respond</a>
                    </td>
                    <td>
                        <a href="/contact/status/{{"unresponded"}}/{{$contact->id}}" class="text-danger">	Unresponded</a>
                    </td>
                    <td>
                        <a href="/contact/delete/{{$contact->id}}" class="text-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection()
