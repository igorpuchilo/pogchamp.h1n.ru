@component('mail::message')
    # Hey, {{$user->name}}! {{$title}}

@component('mail::table')
    @php $qty = 0  @endphp
    | Product       | Count         | Price    |
    | ------------- |:-------------:| --------:|
    @foreach($order_prods as $prod)
        |{{$prod->prod_title}}|{{$prod->qty , $qty+=$prod->qty}}|{{$prod->price}}|
    @endforeach
@endcomponent
    Total: {{$order->sum}} {{$order->currency}} Order Note: {{$order->note}}
    Thanks,{{ config('app.name') }}
@endcomponent
