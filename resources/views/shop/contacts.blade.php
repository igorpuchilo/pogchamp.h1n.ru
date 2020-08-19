@extends('layouts.info')

@section('content')
    <hr>
    <div class="container my-5">
        <h1 class="text-center">Contact Address</h1>
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <iframe src="https://maps.google.com/maps?q=Minsk&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%"
                        height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-sm-4" id="contact2">
                <h3>Contact Us</h3>
                <hr align="left" width="50%">
                <h4 class="pt-2">Location</h4>
                <i class="fa fa-globe" style="color:#000"></i> Minsk<br>
                <h4 class="pt-2">Contacts</h4>
                <i class="fa fa-phone"></i> <a class="links" href="tel:+">
                    {!! \App\Shop\Core\ShopApp::get_Instance()->getProperty('store_tel') !!} </a><br>
                <i class="fa fa-whatsapp"></i><a class="links" href="tel:+">
                    {!! \App\Shop\Core\ShopApp::get_Instance()->getProperty('store_whatsup') !!} </a><br>
                <h4 class="pt-2">Email</h4>
                <i class="fa fa-envelope" style="color:#000"></i> <a class="links" href="">
                    {!! \App\Shop\Core\ShopApp::get_Instance()->getProperty('store_email') !!}</a><br>
            </div>
        </div>
    </div>
@endsection
