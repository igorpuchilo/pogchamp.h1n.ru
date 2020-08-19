@extends('layouts.info')

@section('content')
    <hr>
    <div class="container">
        <p>{!! \App\Shop\Core\ShopApp::get_Instance()->getProperty('store_about') !!}</p>
    </div>
@endsection
