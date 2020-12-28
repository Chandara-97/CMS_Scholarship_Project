<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
@extends("admin.index");

@section("content")
    <div>
        <h1>Comment</h1>
        <table id="list_all_user_info" class="table table-bordered table-responsive" >
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Liked</th>
                <th>Created at</th>
                <th colspan="3" class="text-center">Change role</th>
                <th colspan="3" class="text-center">Action</th>
            </tr>
            @foreach($users as $user)
                <tr>

                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{\App\likes::where("user_id",$user->id)->count()}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><a href="/admin/role/{{"admin"}}/{{$user->id}}">Admin</a></td>
                    <td><a href="/admin/role/{{"editor"}}/{{$user->id}}">Editor</a></td>
                    <td><a href="/admin/role/{{"subscriber"}}/{{$user->id}}">Subscriber</a></td>
                    <td>
                        <a href="/admin/profile/{{$user->id}}" class="text-success">View</a>
                    </td>
                    <td>
                        <a href="/edit/user/{{$user->id}}" class="text-warning">Edit</a>
                    </td>
                    <td>
                        <a href="/delete/user/{{$user->id}}" class="text-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
    $(document).ready(function(){
        $('#list_all_user_info').DataTable();
    });
</script>

@endsection()
