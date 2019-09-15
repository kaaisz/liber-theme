'use strict';

// console.log('userAgent', navigator.userAgent);

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

// hamburger menu
const body = document.querySelector('body');
const hamburger = document.querySelector('.nav__toggle');
const content = document.querySelector('#content');
const drawer = document.querySelector('.nav__drawer');
const overlay = document.querySelector('.nav__overlay');

hamburger.addEventListener('click', function (e){
  // fixed background when overlay is enable

  if(body.style.overflowX == 'hidden') {
    body.style.overflowX = 'scroll';
  } else {
    body.style.overflowX = 'hidden';
  }
  hamburger.classList.toggle('active');
  // drawer open
  drawer.classList.toggle('open');
  // enable overlay
  overlay.classList.toggle('active');
});

overlay.addEventListener('click', function(){
  hamburger.classList.remove('active');
  // drawer open
  drawer.classList.remove('open');
  // enable overlay
  overlay.classList.remove('active');
  body.style.overflowX = 'scroll';
  e.preventDefault();
});

// control position for scroll indicator
// const scrollIndicator = document.querySelector('.intro__scroll');
// const trigger = document.querySelector('.indicator-trigger');
// const edgeOfIntro = trigger.offsetWidth;

// function hideIndicator() {
// // debug
// window.addEventListener('scroll', function() {
//   console.log('edgeOfIntro: ', edgeOfIntro, 'window.scrollX: ', window.scrollX);
// });
// // when scroll indicator has reached to section class = main
//   if (-(window.scrollX) >= edgeOfIntro) {
//     // hide scroll indicator
//     // debug
//     // console.log('hide indicator');
//     scrollIndicator.style.opacity = '0';
//   } else {
//     scrollIndicator.style.opacity = '1';
//   }
// }

// // console will change while scroll is active
// window.addEventListener('scroll', hideIndicator);

// // prevent enable vertical scroll
// const scrollOff = function (e) {
//   e.preventDefault();
// }
// document.body.addEventListener('touchmove', scrollOff, false);
// document.body.removeEventListener('touchmove', scrollOff, false);
