@extends('layouts.info')

@section('content')
    <hr>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-md-12">

                <!-- Title -->
                <h1 class="mt-4">{{$blog->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by {!! \App\Shop\Core\ShopApp::get_Instance()->getProperty('store_name') !!}
                </p>

                <hr>

                <!-- Date/Time -->
                <p>Posted on {!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($blog->date))) !!}</p>

                <hr>

                <!-- Preview Image -->
                <div class="text-center">
                    <img class="img-fluid rounded" src="{{asset('storage/uploads/single/'.$blog->img)}}" alt="Card image cap">
                </div>


                <hr>

                <!-- Post Content -->
                {!! $blog->blog_content !!}
                <hr>

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
