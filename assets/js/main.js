'use strict';

window.onload = function () {
  let width = 0, height = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    // if not IE
    width = window.innerWidth;
    height = window.innerHeight;
  } else if ( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    // IE6+
    width = document.documentElement.clientWidth;
    height = document.documentElement.clientHeight;
  } else if ( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    width = document.body.clientWidth;
    height = document.body.clientHeight;
  }

  console.log('width', width);
  console.log('height', height);
}

document.body.onload = () => {
  document.body.style.minHeight = window.innerHeight + 'px';
  let timeoutId;
}

window.addEventListener('resize', () => {
  clearTimeout(timeoutId);

  timeoutId = setTimeout(() => {
    document.body.style.minHeight = window.innerHeight + 'px';
  }, 500)
});


