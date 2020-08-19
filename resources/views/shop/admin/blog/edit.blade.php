@extends('layouts.app_admin')

@section('content')
    <section class="content-header">
        @component('shop.admin.components.breadcrumb')
            @slot('title') Edit Blog Record @endslot
            @slot('parent') Home @endslot
            @slot('blog') Blog List @endslot
            @slot('active') Edit Blog Record @endslot
        @endcomponent
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form data-toggle="validator" id="update" method="POST"
                          action="{{route('shop.admin.blog.update',$blog->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Title" value="{{$blog->title}}"
                                       required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description"
                                       placeholder="Description" value="{{$blog->description}}">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="blog_content">Content</label>
                                <br>
                                <textarea name="blog_content" id="editor1" cols="80"
                                          rows="10">{{$blog->blog_content}}</textarea>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    @include('shop.admin.blog.include.img_single_edit')
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success" name="action" value="save" form="update">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <!-- Script select2 -->
    @include('shop.admin.blog.include.script_image')
@endsection
