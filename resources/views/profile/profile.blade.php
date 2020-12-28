@extends("admin.index");


@section("content")
    <div>
        <h1 class="text-center text-lg-center">Profile</h1>
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <img src="{{url('/storage/image/'.$user->image)}}" alt="Image" class="img-circle img-responsive ">
            </div>
            <div class="col-lg-7 col-md-12">
                <div>
                    <h3>Name</h3>
                    <h4 style="margin-left: 10%">{{$user->name}}</h4>
                    <h3>Email</h3>
                    <h4 style="margin-left: 10%">{{$user->email}}</h4>
                    <h3>Date of birth</h3>
                    <h4 style="margin-left: 10%">{{$user->dob}}</h4>
                    <h3>Role</h3>
                    <h4 style="margin-left: 10%">{{$user->role}}</h4>
                    <h3>Join on</h3>
                    <h4 style="margin-left: 10%">{{$user->created_at}}</h4>
                    <h3>Edit info</h3>
                    <h4 style="margin-left: 10%"><a href="/edit/user/{{$user->id}}">Click here</a></h4>
                </div>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['corechart']});
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {

                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Amount'],
                            ['Article',   {{$post}}],
                            ['Comment',   {{$comment}}],
                            ['Email',   {{$email}}],
                            ['Liked',{{\App\likes::where("user_id",$user->id)->count()}}]
                        ]);

                        var options = {
                            title: 'Activities'
                        };

                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                        chart.draw(data, options);
                    }
                </script>
                <div >
                    <div id="piechart" style="height: 500px; width: 700px;"></div>
                </div>
            </div>

        </div>
    </div>

@endsection()
