<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--Favicon--}}
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.png') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! MetaTag::tag('title') !!}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('storage/adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--   Bootstrap 4 --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    {{--   Fancybox gallery --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-black-active shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">{!! \App\Shop\Core\ShopApp::get_Instance()->getProperty('store_name') !!}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    @if(isset($menu) && ($menu))
                        <ul class="navbar-nav mr-auto">
                            @include('shop.include.menu', ['items'=>$menu->roots()])
                        </ul>
                    @endif
                </ul>
                <ul class="navbar-nav mr-auto">
                    <form action="{{url('/search/result')}}" method="get" autocomplete="off" class="form-inline">
                        <div class="input-group">
                            <input id="search" name="search" type="text" class="typeahead search"
                                   data-provide="typeahead"
                                   placeholder="Live Search....">
                            <span class="input-group-btn">
                                 <button type="submit" class="btn btn-outline bg-transparent">
                                     <i class="fa fa-search"></i>
                                 </button>
                            </span>
                        </div>
                    </form>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{url('/orderHistory') }}">
                                    Order History
                                </a>
                                @if(Auth::user()->isAdministrator())
                                    <a class="dropdown-item" href="{{url('/admin/index') }}">
                                        Admin Panel
                                    </a>
                                @endif
                                <a class="dropdown-item" href="{{route('shop.user.edit')}}">
                                    Profile Edit
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>

                        </li>
                        <li class="nav-item">
                            <div class="p-1">
                                <a class="btn btn-outline btn-sm ml-3" href="{{route('shop.cart')}}">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                    <span class="badge badge-light">{{$countOrders}}</span>
                                </a>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <main id="app">
        @yield('content')
    </main>
</div>
<!-- /.content-wrapper -->
<footer class="footerapp text-center">
    <div class="page-footer">
        <nav class="footer">
            <a href="mailto:admin@pogchamp.h1n.ru" target="_blank"
               title="admin@pogchamp.h1n.ru">
                <img src="http://jthink.net/images/google_plus.png" alt="google_plus"
                     title="admin@pogchamp.h1n.ru" height="32" width="32"/>
            </a>&nbsp;
        </nav>
        <span class="text-muted">All trademarks acknowledged</span>
    </div>
</footer>
<!-- Scripts -->

{{--<script src="{{asset('js/jquery.js')}}"></script>--}}
{{--<script src="{{asset('js/popper.min.js')}}"></script>--}}
{{--Bootstrap 3,4 Typeahead--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
{{--Bootstrap 4 JS--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<!-- App -->
<script src="{{asset('js/app_main.js')}}"></script>
<script src="{{asset('js/cart_change_qty.js')}}"></script>
<script src="{{asset('js/ajaxupload.js')}}"></script>
{{--Font Awesome--}}
<script src="https://use.fontawesome.com/c11a257dfe.js"></script>
</body>
</html>
