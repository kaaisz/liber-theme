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

// Apply lazyload
const lazyLoad = new LazyLoad({
  elements_selector: ".lazy"
});

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
  drawer.classList.remove('open');
  overlay.classList.remove('active');
  body.style.overflowX = 'scroll';
});

// control position for scroll indicator
let target = document.querySelector('.site');
const scrollIndicator = document.querySelector('.indicator');
const trigger = document.querySelector('.indicator-trigger');
const targetWidth = target.scrollLeft;
const triggerFlag = target.offsetWidth;
const edgeOfIntro = trigger.offsetWidth;
const contentLength = parseInt(targetWidth + edgeOfIntro);

target.addEventListener('scroll', function() {
  hideIndicator();
});

function hideIndicator() {
  // console.log('edgeOfIntro: ', edgeOfIntro, 'scroll: ', target.scrollLeft);
  // console.log('rest of scroll until edge: ', (target.scrollLeft - edgeOfIntro));
  if (target.scrollLeft <= (contentLength - triggerFlag)) {
    scrollIndicator.style.opacity = '0';
  }
}
