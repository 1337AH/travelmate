@extends('inc.template')

@section('pageTitle', '')


@section('content')
<!-- Start destinations Area -->
<div class="container">
    <section class="planner-area section-gap">
    @php 
        echo count($_GET) - 4
    @endphp
    </section>
</div>
<!-- End destinations Area -->
@endsection