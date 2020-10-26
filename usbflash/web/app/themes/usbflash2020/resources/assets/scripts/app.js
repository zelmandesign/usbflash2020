/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import Typed from 'typed.js';

$(document).ready(() => {
  console.log('Hello world');
});

// Global JS
$('.navbar .dropdown > a').click(function () {
  location.href = this.href;
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
}
function dateEntered() {
  var qty = document.getElementById("qty-input").data('whatever');
  console.log(qty)
  console.log('bobobobo')
}
if(document.body.classList.contains('single-gadgets-product')) {

  function dateEntered() {
    var qty = document.getElementById("qty-input").data('whatever');
    console.log(qty)
    console.log('bobobobo')
  }

  $('#productModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
  })
}