@extends('inc.template')

@section('pageTitle', 'Trip Planner')


@section('content')
@extends('inc.pagesBanner')
<!-- Start destinations Area -->
<div class="container">
<section class="planner-area section-gap">
<form class="form-wrap">
    <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
    <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
    <span class="addDestination"><span class="lnr lnr-plus-circle"></span>Add Another Destination</span>
    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">							
    <a href="#" class="primary-btn text-uppercase">Start Planning</a>									
</form>
    </section>
</div>
<!-- End destinations Area -->
@endsection