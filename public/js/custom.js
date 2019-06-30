function addDestination(){
    var count = document.getElementsByClassName("form-control dest");
    if( count.length != 3){
        var container = document.getElementById("planner-form");
        var input = document.createElement("input");
        input.type = "text";
        input.name = "destiantion" + (count.length +1);
        input.placeholder = "Destination #" + (count.length +1) ;
        input.classList.add("form-control");
        input.classList.add("dest");
        input.classList.add("data-json");
        container.appendChild(input);
        $(".data-json").easyAutocomplete(options);
    }
}
var sitePlaces = {};
var places = [];
var tour = [];
sitePlaces.tour = tour;
sitePlaces.places = places;
var firstName = "John";
var lastName = "Smith";
var place = {
  "firstName": firstName,
  "lastName": lastName
}
sitePlaces.places.push(place);
sitePlaces.places.push(place);

console.log(sitePlaces.places[0]);
console.log(JSON.stringify(sitePlaces));
var url = new URL(window.location.href);
var startD = url.searchParams.get("start");
console.log(c);

function placeAdded(id){

    var container = document.getElementById(id);
    var count = container.getElementsByClassName('placeAdded');
    if( count.length == 1){
        var addOverlay = container.getElementsByClassName('overlay')[0].classList.remove("placeAdded");
        var buttonOpa = container.getElementsByClassName('button')[0].removeAttribute("style");
        var buttonRemoveText = container.getElementsByClassName('button')[0].firstChild.innerHTML = 'Add';
    }else {
        var addOverlay = container.getElementsByClassName('overlay')[0].classList.add("placeAdded");
        var buttonOpa = container.getElementsByClassName('button')[0].setAttribute("style", "opacity: 1");
        var buttonRemoveText = container.getElementsByClassName('button')[0].firstChild.innerHTML = 'Remove';
    }
}
var options = {
    url: "http://localhost:8000/api/v1/city/index",

    getValue: "name",

    list: {
        match: {
            enabled: true
        }
    }
};

$(".data-json").easyAutocomplete(options);

function move_navigation( $navigation, $MQ) {
    if ( $(window).width() >= $MQ ) {
        $navigation.detach();
        $navigation.appendTo('header');
    } else {
        $navigation.detach();
        $navigation.insertAfter('header');
    }
}
jQuery(document).ready(function($){
    //if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
    var $L = 1200,
        $menu_navigation = $('#main-nav'),
        $cart_trigger = $('#cd-cart-trigger'),
        $hamburger_icon = $('#cd-hamburger-menu'),
        $lateral_cart = $('#cd-cart'),
        $shadow_layer = $('#cd-shadow-layer');

    //open lateral menu on mobile
    $hamburger_icon.on('click', function(event){
        event.preventDefault();
        //close cart panel (if it's open)
        $lateral_cart.removeClass('speed-in');
        toggle_panel_visibility($menu_navigation, $shadow_layer, $('body'));
    });

    //open cart
    $cart_trigger.on('click', function(event){
        event.preventDefault();
        //close lateral menu (if it's open)
        $menu_navigation.removeClass('speed-in');
        toggle_panel_visibility($lateral_cart, $shadow_layer, $('body'));
    });

    //close lateral cart or lateral menu
    $shadow_layer.on('click', function(){
        $shadow_layer.removeClass('is-visible');
        // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
        if( $lateral_cart.hasClass('speed-in') ) {
            $lateral_cart.removeClass('speed-in').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                $('body').removeClass('overflow-hidden');
            });
            $menu_navigation.removeClass('speed-in');
        } else {
            $menu_navigation.removeClass('speed-in').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                $('body').removeClass('overflow-hidden');
            });
            $lateral_cart.removeClass('speed-in');
        }
    });

    //move #main-navigation inside header on laptop
    //insert #main-navigation after header on mobile
    move_navigation( $menu_navigation, $L);
    $(window).on('resize', function(){
        move_navigation( $menu_navigation, $L);

        if( $(window).width() >= $L && $menu_navigation.hasClass('speed-in')) {
            $menu_navigation.removeClass('speed-in');
            $shadow_layer.removeClass('is-visible');
            $('body').removeClass('overflow-hidden');
        }

    });
});

function toggle_panel_visibility ($lateral_panel, $background_layer, $body) {
    if( $lateral_panel.hasClass('speed-in') ) {
        // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
        $lateral_panel.removeClass('speed-in').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            $body.removeClass('overflow-hidden');
        });
        $background_layer.removeClass('is-visible');

    } else {
        $lateral_panel.addClass('speed-in').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            $body.addClass('overflow-hidden');
        });
        $background_layer.addClass('is-visible');
    }
}

function move_navigation( $navigation, $MQ) {
    if ( $(window).width() >= $MQ ) {
        $navigation.detach();
        $navigation.appendTo('header');
    } else {
        $navigation.detach();
        $navigation.insertAfter('header');
    }
}