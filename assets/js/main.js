'use strict';

// window.onload = function () {
//   let width = 0, height = 0;
//   if( typeof( window.innerWidth ) == 'number' ) {
//     // if not IE
//     width = window.innerWidth;
//     height = window.innerHeight;
//   } else if ( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
//     // IE6+
//     width = document.documentElement.clientWidth;
//     height = document.documentElement.clientHeight;
//   } else if ( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
//     width = document.body.clientWidth;
//     height = document.body.clientHeight;
//   }

//   console.log('width', width);
//   console.log('height', height);
// }

// get viewport height and multiple it by 1% to get a value for vh unit
let vh = window.innerHeight * 0.01;

// set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// listen to the resize event
window.addEventListener('resize', () => {
  // apply same action above
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
})

// prevent enable vertical scroll
const scrollOff = function (e) {
  e.preventDefault();
}
document.body.addEventListener('touchmove', scrollOff, false);
document.body.removeEventListener('touchmove', scrollOff, false);


// hamburger menu
const body = document.querySelector('body');
const hamburger = document.querySelector('.nav__toggle');
const drawer = document.querySelector('.nav__drawer');
const overlay = document.querySelector('.nav__overlay');

hamburger.addEventListener('click', function (){
  hamburger.classList.toggle('active');
  // drawer open
  drawer.classList.toggle('open');
  // enable overlay
  overlay.classList.toggle('active');

  // fixed background when overlay is enable
  if(body.style.overflowX == 'scroll') {
    body.style.overflowX = 'hidden';
  } else {
    body.style.overflowX = 'scroll';
  }
});

overlay.addEventListener('click', function(){
  hamburger.classList.remove('active');
  // drawer open
  drawer.classList.remove('open');
  // enable overlay
  overlay.classList.remove('active');
  body.style.overflowX = 'scroll';
});