'use strict';

const userAgent = window.navigator.userAgent.toLowerCase();

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
  e.preventDefault();
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

overlay.addEventListener('click', function(e){
  e.preventDefault();
  hamburger.classList.remove('active');
  // drawer open
  drawer.classList.remove('open');
  // enable overlay
  overlay.classList.remove('active');
  body.style.overflowX = 'scroll';
});

// control position for scroll indicator
const scrollIndicator = document.querySelector('.indicator');
var target = document.querySelector('.site');
const trigger = document.querySelector('.indicator-trigger');
const targetWidth = target.scrollLeft;
const triggerFlag = target.offsetWidth;
const edgeOfIntro = trigger.offsetWidth;
const contentLength = parseInt(targetWidth + edgeOfIntro);

function hideIndicator() {
  console.log('edgeOfIntro: ', edgeOfIntro, 'scroll: ', target.scrollLeft);
  console.log('rest of scroll until edge: ', (target.scrollLeft - edgeOfIntro));
  // when scroll indicator has reached to section class = main
  if (navigator.userAgent == 'iPhone' || 'iPad' || 'iPod touch') {
    // scrollIndicator.classList.remove('indicator');
    // scrollIndicator.classList.add('indicator_safari');
    console.log('From iPhone')
  }
  if (target.scrollLeft <= (contentLength - triggerFlag)) {
    // hide scroll indicator
    console.log('hide indicator');
    scrollIndicator.style.opacity = '0';
  }
}

// console will change while scroll is active
target.addEventListener('scroll', hideIndicator);

