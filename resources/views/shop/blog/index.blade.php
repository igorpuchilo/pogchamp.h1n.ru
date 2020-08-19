@extends('layouts.info')

@section('content')
    <hr>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">

                <h1 class="my-4">Blog
                    <small>And News</small>
                </h1>
            @if(!$blog->isEmpty())
                @foreach($blog as $record)
                    <!-- Blog Post -->
                        <div class="card mb-4">
                            <div class="card-header text-muted">
                                Posted
                                on {!! htmlspecialchars_decode(date('j<\s\up>S</\s\up> F Y', strtotime($record->date))) !!}
                            </div>
                            <img class="card-img-top" src="{{asset('storage/uploads/single/'.$record->img)}}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">{{$record->title}}</h2>
                                <p class="card-text card-blog">{{$record->description}}</p>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('shop.blog.view',$record->alias)}}" class="btn btn-primary pull-right">Read
                                    More &rarr;</a>
                            </div>

                        </div>
                    @endforeach

                @else

                    <h2 class="text-center">Blog is empty.</h2>

            @endif
                <div class="text-center">
                    {!! $blog->appends(\Request::except('page'))->render() !!}
                </div>
            </div>
            <!-- /.row -->
            <!-- Pagination -->
        </div>
        <!-- /.container -->
@endsection
