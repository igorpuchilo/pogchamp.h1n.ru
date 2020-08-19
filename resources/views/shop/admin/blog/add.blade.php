@extends('layouts.app_admin')

@section('content')
    <section class="content-header">
        @component('shop.admin.components.breadcrumb')
            @slot('title') Create New Blog Record @endslot
            @slot('parent') Home @endslot
            @slot('blog') Blog List @endslot
            @slot('active') Create New Blog Record @endslot
        @endcomponent
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form data-toggle="validator" id="create" method="POST" action="{{route('shop.admin.blog.store')}}">
                        @method('POST')
                        @csrf
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="Title" value="{{old('title')}}"
                                       required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name="description" class="form-control" id="description"
                                       placeholder="Description" value="{{old('description')}}">
                            </div>
                            <div class="form-group has-feedback">
                                <label for="blog_content">Content</label>
                                <br>
                                <textarea name="blog_content" id="editor1" cols="80"
                                          rows="10">{{old('blog_content')}}</textarea>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    @include('shop.admin.blog.include.img_single_create')
                                </div>
                            </div>
                        </div>

                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                        <div class="box-footer">
                            <button type="submit" form="create" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('shop.admin.product.include.script_img')
@endsection
@section('scripts')
    <!-- Script select2 -->
    @include('shop.admin.blog.include.script_image')
@endsection
