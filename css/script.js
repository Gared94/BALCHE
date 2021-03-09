jQuery('document').ready(function($){
	var menuBtn= $('.menu-icon'),
	menu = $('.navigation ul')
	
	
	menu-icon.click(function() {
		
		if(menu.hasClass('show')) {
			menu.removeClass('show');
		}
		else {
		menu.addClass('show');}
		
	});
});