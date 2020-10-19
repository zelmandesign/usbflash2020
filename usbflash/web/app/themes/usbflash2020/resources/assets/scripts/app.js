/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import Typed from 'typed.js';

$(document).ready(() => {
  console.log('Hello world');
});

var typed = new Typed('#typed', {
  stringsElement: '.typed-strings',
  backSpeed: 0,
  typeSpeed: 100,
  backDelay: 700,
  loop: true,
  showCursor: false,
});
