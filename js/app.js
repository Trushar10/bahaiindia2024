//mobile menu toggle button
const navToggle1 = document.querySelector('.menu_checkbox');
const menuLeft = document.querySelector('.mobile-menu');

navToggle1.addEventListener('click', function () {
	menuLeft.classList.toggle('show');
});

//Swiper
const swiperClass = document.getElementsByClassName('mySwiper').length > 0;

if (swiperClass) {
	var swiper = new Swiper('.mySwiper', {
		spaceBetween: 30,
		centeredSlides: true,
		effect: 'fade',
		autoplay: {
			delay: 2500,
			disableOnInteraction: false,
		},
	});
}

//Get the button
var mybutton = document.querySelector('.to-top');

mybutton.addEventListener('click', function () {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
});
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
	scrollFunction();
};

function scrollFunction() {
	if (
		document.body.scrollTop > 200 ||
		document.documentElement.scrollTop > 200
	) {
		mybutton.style.display = 'block';
	} else {
		mybutton.style.display = 'none';
	}
}

//table filter
const filterClass = document.getElementsByClassName('lsa-address').length > 0;

if (filterClass) {
	const state = document.getElementById('state');

	state.addEventListener('change', function () {
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById('state');
		filter = input.value.toUpperCase();
		table = document.getElementById('address');
		tr = table.getElementsByTagName('tr');
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName('td')[0];
			if (td) {
				txtValue = td.textContent || td.innerText;
				if (txtValue.toUpperCase().indexOf(filter) > -1) {
					tr[i].style.display = '';
				} else {
					tr[i].style.display = 'none';
				}
			}
		}
	});
}
