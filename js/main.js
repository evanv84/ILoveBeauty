$(document).ready(function() {
	
	qnt = $('.quantity');

	random = Math.ceil(Math.random() * 10) + 7;

	qnt.text(random);
});