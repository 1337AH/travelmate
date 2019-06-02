@extends('inc.template')
@php 

$start = new DateTime(app('request')->input('start'));
$end = new DateTime(app('request')->input('end'));
$diff = $end->diff($start)->format("%a");
$dests = app('request')->input('destiantion1');
$dest2 = app('request')->input('destiantion2');
$dest3 = app('request')->input('destiantion3');
if(!empty($dest2)){
$dests .= ', ' . $dest2;
if(!empty($dest3)) $dests .= ' and ' . $dest3;
}
@endphp
@section('pageTitle', $diff . ' days in ' .$dests)


@section('content')
<!-- Start destinations Area -->
<div class="container">
    <section class="section-gap">
        <div class="placeSection">
            <h1> {{ app('request')->input('destiantion1') }}</h1>
            @foreach($places1 as $place)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset("img/d2.jpg")}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$place["name"]}}</h5>
                    <p class="card-text"><small class="text-muted">{{$place["address"]}}</small></p>
                    <p class="card-text">{{$place["description"]}}</p>
                </div>
            </div>
            @endforeach
        </div>
        @if(isset($places2))
		<h1> {{ app('request')->input('destiantion2') }}</h1>
        @foreach($places2 as $place)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset("img/d1.jpg")}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$place["name"]}}</h5>
                <p class="card-text"><small class="text-muted">{{$place["address"]}}</small></p>
                <p class="card-text">{{$place["description"]}}</p>
            </div>
        </div>
        @endforeach
        @endif
        @if(isset($places3))
		<h1> {{ app('request')->input('destiantion3') }}</h1>
        @foreach($places3 as $place)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset("img/d2.jpg")}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$place["name"]}}</h5>
                <p class="card-text"><small class="text-muted">{{$place["address"]}}</small></p>
                <p class="card-text">{{$place["description"]}}</p>
            </div>
        </div>
        @endforeach
        @endif
    </section>
</div>
<!-- End destinations Area -->
@endsection