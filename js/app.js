// Mobile menu toggle button
const navToggle = document.querySelector('.menu_checkbox');
const menu = document.querySelector('.menu');

navToggle.addEventListener('click', function () {
	menu.classList.toggle('show');
});

// Lang menu toggle button
const langIcon = document.querySelector('.lang-icon');
const langMenu = document.querySelector('.lang-menu');

// All-sites menu toggle button
const globeIcon = document.querySelector('.globe');
const globeText = document.querySelector('.globe-text');
const siteMenu = document.querySelector('.site-menu');

// Add a click event listener to the document
document.addEventListener('click', function (event) {
	if (event.target === langIcon) {
		// Clicked the langIcon, toggle the 'show' class on the langMenu
		langMenu.classList.toggle('show');
	} else if (event.target === globeIcon || event.target === globeText) {
		// Clicked the globeIcon or globeText, toggle the 'show' class on the siteMenu
		siteMenu.classList.toggle('show');
	} else if (
		!langMenu.contains(event.target) &&
		!siteMenu.contains(event.target)
	) {
		// Clicked outside both langMenu and siteMenu, remove the 'show' class from both
		langMenu.classList.remove('show');
		siteMenu.classList.remove('show');
	}
});

// Prevent clicks inside the siteMenu from closing it
siteMenu.addEventListener('click', function (event) {
	event.stopPropagation();
});

function filterTable() {
	var select = document.getElementById('stateSelect');
	var table = document.getElementById('stateTable');
	var rows = table.getElementsByTagName('tr');

	for (var i = 1; i < rows.length; i++) {
		var stateName = rows[i].getElementsByTagName('td')[0].textContent;
		var stateSelected = select.value;
		if (stateSelected === 'default' || stateName === stateSelected) {
			rows[i].style.display = '';
		} else {
			rows[i].style.display = 'none';
		}
	}
}

//Swiper Slide
jQuery(document).ready(function () {
	var swiper = new Swiper('.mySwiper', {
		// Swiper options here
		// 	spaceBetween: 30,

		effect: 'fade',
		autoplay: {
			delay: 7000, // Set your desired autoplay delay in milliseconds
			disableOnInteraction: false,
		},
		loop: true,

		on: {
			init: function () {
				// Apply the initial animation when Swiper is initialized
				animateElements(jQuery('.swiper-slide-active'));
			},
			slideChangeTransitionStart: function () {
				// Get the currently active slide
				var activeSlide = jQuery('.swiper-slide-active');
				var previousSlide = jQuery('.swiper-slide-prev');

				// Reset the animation for the previous slide
				resetAnimation(previousSlide);

				// Apply animation for the active slide
				animateElements(activeSlide);
			},
		},
	});

	function resetAnimation(slide) {
		// Reset the animation by removing the "animate" class
		slide.find('.quote-animation, .location').removeClass('animate');
	}

	function animateElements(slide) {
		// Apply the animation by adding the "animate" class
		slide.find('.quote-animation').addClass('animate');
		slide.find('.location').addClass('animate');
	}
});

// Lightbox
let lightImg = document.querySelector('.light-img');
let viewBtn = document.querySelectorAll('.view-btn');
let lightboxTitle = document.querySelector('.light-box h2');
// let lightboxExcerpt = document.querySelector('.box-excerpt');
let lightboxContent = document.querySelector('.box-content');

// Create an object to store post data
const postData = {};

// Preload data for all view buttons
viewBtn.forEach((el) => {
	const postId = el.getAttribute('data-post-id');
	const imgSrc = el.getAttribute('data-src');

	// Use the REST API to fetch post data in the background
	fetch(`/wp-json/wp/v2/posts/${postId}`)
		.then((response) => response.json())
		.then((data) => {
			postData[postId] = {
				title: data.title.rendered,
				// excerpt: data.excerpt.rendered,
				content: data.content.rendered,
				imgSrc: imgSrc,
			};
		});
});

viewBtn.forEach((el) => {
	el.addEventListener('click', (event) => {
		event.preventDefault(); // Prevent the default behavior of the anchor tag

		document.body.classList.add('effect');
		let postId = el.getAttribute('data-post-id');
		let imgSrc = postData[postId].imgSrc;

		lightImg.src = imgSrc;
		lightboxTitle.textContent = postData[postId].title;
		// lightboxExcerpt.innerHTML = postData[postId].excerpt;
		lightboxContent.innerHTML = postData[postId].content;
	});
});

window.addEventListener('click', (event) => {
	if (
		event.target.className == 'box-wrapper' ||
		event.target.className == 'close-btn'
	) {
		document.body.classList.remove('effect');
	}
});
