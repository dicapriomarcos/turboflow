jQuery(document).ready(function($){
	
	// Mobile Navigation
	moveNavigation();

	$(window).on('resize', function(){
		moveNavigation()
	});

	function moveNavigation(){
		var navigator = $('nav#tf__navigation');
		var screenWidth = checkWindowWidth();

		if ( screenWidth ) {
			$('#tf__menu-button').css('display', 'none');
			navigator.detach();
			$('#tf__desktop-nav-wrapper').append(navigator);
			$('#tf__mobile-nav-wrapper').removeClass('active');
			
		} else {

			navigator.detach();
			$('#tf__menu-button').css('display', 'block');
			$('#tf__mobile-nav-wrapper').append(navigator);

		}
	}

	function checkWindowWidth() {
		var width = $(window).width();
		return ( width < 1024 ) ? false : true;
	}


	$('#tf__menu-button').on('click', function(){
		$('#tf__mobile-nav-wrapper').addClass('active');
	});

	$('#tf__mobile-nav-wrapper').click(function(event) {
		event.stopPropagation();
	
		$('#tf__mobile-nav-wrapper').removeClass('active');
	});


var subMenuToggles = document.getElementsByClassName('submenu-toggle');
Array.from(subMenuToggles).forEach(function(subMenuToggle) {
    subMenuToggle.addEventListener('click', function(event) {
        event.stopPropagation();
        var id = this.getAttribute('data-id');
        $('.menu-item-' + id).toggleClass('active');
    });
});


	function openSubMenu(id){
		$('.menu-item-'+id).toggleClass('active');
	}

});