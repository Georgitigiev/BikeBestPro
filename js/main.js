jQuery(document).ready(function($) {
	// Открытие корзины при наведении
	$('.cart-punkt').hover(function() {
		$('.widget_shopping_cart').toggleClass('open');
	});
});