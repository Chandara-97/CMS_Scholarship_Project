<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Blog Home - Start Bootstrap Template</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--jqurey-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!--jqurey-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script><!--Font awsome-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"><!--bootstrap version4-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet"><!--bootstrap version3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> <!--bootstrap version5-->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> <!-- text animate-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!-- animation on scroll -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.2.1/mdb.min.css"rel="stylesheet"/> <!-- MDB-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> <!--Background carousel-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> <!--Background carousel-->

    <link rel=icon href=image/logo.png sizes="90x90" type="image/png"> <!--favicon-->

    <title>@yield("title","bone")</title>
    @include('layout.style_css')
</head>

<body>

    @include('layout.navbar')
    @include('layout.background_carousel')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8">
               @yield("content")
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <form action="/search" method="POST">
                            @csrf
                            <input type="text" class="form-control" name="search">
                            <input type="submit" class="btn btn-success" value="Search">
                        </form>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="/cat/{{"js"}}">JavaScript</a>
                                </li>
                                <li><a href="/cat/{{"bootstrap"}}">Bootstrap</a>
                                </li>
                                <li><a href="/cat/{{"php"}}">PHP</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->

                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
    

    </div>
    <!-- /.container -->
    <footer>
     
        @include('layout.footer')

        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</footer>

    <!-- jQuery -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->



</body>

</html>
