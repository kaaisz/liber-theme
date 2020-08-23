(function () {
	'use strict';

	const userAgent = window.navigator.userAgent.toLowerCase();

	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty('--vh', `${vh}px`);
	window.addEventListener('resize', () => {
		let vh = window.innerHeight * 0.01;
		document.documentElement.style.setProperty('--vh', `${vh}px`);
	})

	const lazyLoad = new LazyLoad({
		elements_selector: ".lazy"
	});

	controlNav(); // hamburger menu
	controlScroll(); // scroll action
	
	function controlNav() {
		const body = document.querySelector('body');
		const hamburger = document.querySelector('.nav__toggle');
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
			drawer.classList.toggle('open');
			overlay.classList.toggle('active');
		});
	
		overlay.addEventListener('click', function(e){
			e.preventDefault();
			hamburger.classList.remove('active');
			drawer.classList.remove('open');
			overlay.classList.remove('active');
			body.style.overflowX = 'scroll';
		});
	}

	function controlScroll() {
		let target = document.querySelector('.site');
		const scrollIndicator = document.querySelector('.indicator');
		const trigger = document.querySelector('.indicator-trigger');
		const targetWidth = target.scrollLeft;
		const triggerFlag = target.offsetWidth;
		const edgeOfIntro = trigger.offsetWidth;
		const contentLength = parseInt(targetWidth + edgeOfIntro);
		const tocTab = document.querySelector('#ez-toc-container');
		const toggler = document.querySelector('.ez-toc-title-toggle');

		if(target) {
			target.addEventListener('scroll', controlIndicator);
		}
	
		function controlIndicator() {
			// console.log('edgeOfIntro: ', edgeOfIntro, 'scroll: ', target.scrollLeft);
			// console.log('rest of scroll until edge: ', (target.scrollLeft - edgeOfIntro));
	
			if (target.scrollLeft <= (contentLength - triggerFlag)) {
				if(scrollIndicator) {
					scrollIndicator.style.opacity = '0';
				}
				if(tocTab) {
					toggler.classList.add('show');
				}
			} else {
				if(tocTab) {
					toggler.classList.remove('show');
				}
			}
		}

		if(tocTab) {
			tocTab.querySelectorAll('nav ul a').forEach(el => {
				el.addEventListener('click', toggleContents);
			});	

			toggler.innerHTML = '目次';
			toggler.addEventListener('click', toggleContents);

			function toggleContents() {
				if(tocTab.classList.contains('open')) {
					tocTab.classList.remove('open')
					toggler.innerHTML = '目次';
				} else {
					tocTab.classList.add('open')
					toggler.innerHTML = '閉じる';
				}
			}
		}
	}

	function scrollHorizontally(e) {
		e = window.event || e;
		var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
		var scrollSpeed = 6.25; // Janky jank <<<<<<<<<<<<<<
		document.querySelector('.site').scrollLeft -= (delta * scrollSpeed);
		document.querySelector('.site').scrollLeft -= (delta * scrollSpeed);
		e.preventDefault();
	  }
	  
	  if (document.querySelector('.site')) {
		const scrollElement = document.querySelector('.site')
		// IE9, Chrome, Safari, Opera
		scrollElement.addEventListener("mousewheel", function(e) {
			e.preventDefault();
			scrollHorizontally();
		}, {passive: false});
		// Firefox
		scrollElement.addEventListener("DOMMouseScroll", function(e) {
			e.preventDefault();
			scrollHorizontally();
		}, {passive: false});
	  } else {
		// IE 6/7/8
		scrollElement.attachEvent("onmousewheel", function(e) {
			e.preventDefault();
			scrollHorizontally();
		}, {passive: false});
	  }
})();