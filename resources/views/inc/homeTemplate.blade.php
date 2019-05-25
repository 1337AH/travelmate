<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="UTF-8">
        <title>@yield('pageTitle') - TravelMate</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}?<?php echo time(); ?>">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}?<?php echo time(); ?>">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}?<?php echo time(); ?>">
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}?<?php echo time(); ?>">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}?<?php echo time(); ?>">				
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}?<?php echo time(); ?>">							
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}?<?php echo time(); ?>">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}?<?php echo time(); ?>">				
        <link rel="stylesheet" href="{{ asset('css/main.css') }}?<?php echo time(); ?>">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}?<?php echo time(); ?>">
        <link rel="stylesheet" href="{{ asset('css/easy-autocomplete.min.css') }}?<?php echo time(); ?>">
    </head>
    <body>	

        @extends('inc.headerNav')

        <section class="banner-area relative">
            <div class="overlay overlay-bg"></div>				
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-between">
                    <div class="col-lg-6 col-md-6 banner-left">
                        <h6 class="text-white">Away from monotonous life</h6>
                        <h1 class="text-white">Magical Travel</h1>
                        <p class="text-white">
                            Create an itinerary or get suggested itineraries quickly.
                        </p>
                        <a href="#" class="primary-btn text-uppercase">Get Started</a>
                    </div>
                    <div class="col-lg-4 col-md-6 banner-right">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Plan A Trip</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Flights</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotels</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
                                <form class="form-wrap">
                                    <!--<input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">-->
                                    <input type="text" class="form-control data-json" name="to" placeholder="Destination " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Destination '" id="toDest">
                                    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '" id="startDate">
                                    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '" id="returnDate">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '" id="adultNr">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '" id="childNr">							
                                    <a href="#" class="primary-btn text-uppercase" onclick="location.href='{{ asset('planner') }}?to='+ document.getElementById('toDest').value+'&startDate='+document.getElementById('startDate').value+'&returnDate='+document.getElementById('returnDate').value+'&adultNo='+document.getElementById('adultNr').value+'&childNo='+document.getElementById('childNr').value;">Start Planning</a>									
                                </form>							  	
                            </div>
                            <div class="tab-pane fade" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
                                    <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">							
                                    <a href="#" class="primary-btn text-uppercase">Search flights</a>									
                                </form>
                            </div>
                            <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
                                    <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">						
                                    <a href="#" class="primary-btn text-uppercase">Search Hotels</a>									
                                </form>							  	
                            </div>
                        </div>
                    </div>
                </div>
            </div>					
        </section>
        @yield('content')
        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">

                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>About Agency</h6>
                            <p>
                                The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Navigation Links</h6>
                            <div class="row">
                                <div class="col">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Feature</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>							
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>
                                For business professionals caught between high OEM price and mediocre print and graphic output.									
                            </p>								
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">InstaFeed</h6>
                            <ul class="instafeed d-flex flex-wrap">
                                <li><img src="{{asset("img/i1.jpg")}}" alt=""></li>
                                <li><img src="{{asset("img/i2.jpg")}}" alt=""></li>
                                <li><img src="{{asset("img/i3.jpg")}}" alt=""></li>
                                <li><img src="{{asset("img/i4.jpg")}}" alt=""></li>
                                <li><img src="{{asset("img/i5.jpg")}}" alt=""></li>
                                <li><img src="{{asset("img/i6.jpg")}}" alt=""></li>
                                <li><img src="{{asset("img/i7.jpg")}}" alt=""></li>
                                <li><img src="{{asset("img/i8.jpg")}}" alt=""></li>
                            </ul>
                        </div>
                    </div>						
                </div>

                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i></p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->	

        <script src="{{asset("js/vendor/jquery-2.2.4.min.js")}}"></script>
        <script src="{{asset("js/popper.min.js")}}"></script>
        <script src="{{asset("js/vendor/bootstrap.min.js")}}"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
        <script src="{{asset("js/jquery-ui.js")}}"></script>					
        <script src="{{asset("js/easing.min.js")}}"></script>			
        <script src="{{asset("js/hoverIntent.js")}}"></script>
        <script src="{{asset("js/superfish.min.js")}}"></script>	
        <script src="{{asset("js/jquery.ajaxchimp.min.js")}}"></script>
        <script src="{{asset("js/jquery.magnific-popup.min.js")}}"></script>						
        <script src="{{asset("js/jquery.nice-select.min.js")}}"></script>					
        <script src="{{asset("js/owl.carousel.min.js")}}"></script>							
        <script src="{{asset("js/mail-script.js")}}"></script>	
        <script src="{{asset("js/main.js")}}"></script>	
        <script src="{{asset("js/jquery.easy-autocomplete.min.js")}}"></script>
        <script src="{{asset("js/custom.js")}}"></script>	
    </body>
</html>