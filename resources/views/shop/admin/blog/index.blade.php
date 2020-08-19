@extends('layouts.app_admin')

@section('content')
    <section class="content-header">
        @component('shop.admin.components.breadcrumb')
            @slot('title') Blog list @endslot
            @slot('parent') Home @endslot
            @slot('active') Blog list @endslot
        @endcomponent
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            @if(!$blog->isEmpty())
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Content</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($blog as $record)
                                        <tr>
                                            <td>{{$record->id}}</td>
                                            <td>{{$record->title}}</td>
                                            <td>{{$record->description}}</td>
                                            <td><div class="blogcontent">{!! $record->blog_content !!}</div></td>
                                            <td>{{$record->date}}</td>
                                            <td class="text-center">
                                                <a href="{{route('shop.admin.blog.edit',$record->id)}}" title="Edit">
                                                    <i class="fa fa-fw fa-pencil"></i>
                                                </a>
                                                <a href="{{route('shop.admin.blog.deleteblog',$record->id)}}"
                                                   title="Delete From DB">
                                                    <i class="fa fa-fw fa-close text-danger deletedb"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            @else

                                <h2 class="text-center">Blog is empty.</h2>

                            @endif
                        </div>
                        <div class="text-center">
                            @if ($blog->total() > $blog->count())
                                <br>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                {{$blog->links()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
