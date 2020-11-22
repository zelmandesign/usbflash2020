/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import Typed from 'typed.js';
import Splide from '@splidejs/splide';
import '@splidejs/splide/dist/css/splide.min.css'

// Navbar
$('.navbar-toggler').on('click', function() {
  $(".menu-overlay").fadeToggle(500);
  $('#nav-icon3').toggleClass('open');
  $(this).toggleClass('toggler-open');
  $('body').toggleClass('mobile-overflow-fix');
});

$(".menu-overlay").click(function() {
  $(this).fadeOut(500);
  $('.collapse').collapse('hide')
  $('#nav-icon3').removeClass('open');
  $('.navbar-toggler').removeClass('open');
  $('body').removeClass('mobile-overflow-fix');
});

// Home Page JS
if(document.body.classList.contains('home')) {
  console.log('home page')
  var typed = new Typed('#typed', {
    stringsElement: '.typed-strings',
    backSpeed: 0,
    typeSpeed: 100,
    backDelay: 700,
    loop: true,
    showCursor: false,
  });
  typed;
}

// Single Product
if(document.body.classList.contains('single-gadgets-product') || document.body.classList.contains('single-usb-product')) {
  console.log('single product')
  //new Splide( '#splide' ).mount();
  new Splide( '#splide', {
    type   : 'loop',
    pagination: false,
    perPage: 4,
    perMove: 1,
    padding: 0,
    gap: '10px',
    breakpoints: {
      640: {
        perPage: 3,
      },
    },
  }).mount();

  $('#qty-input').change(() => {
    var qty = $('#qty-input').val();
    console.log(qty)
    $('#qty-submit').data('qty',qty);
  });

  $('#productModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('qty') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body #qty').val(recipient)
  })

  $('.thumb-prod-image').click(function(){
    var imgsrc=$(this).attr('src');
    $('.hero-prod-image').attr('src',imgsrc);
  });
}