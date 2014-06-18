/* byuis.js */

// jQuery wrapper
!function ($) {

	$(document).ready(function() {

		var url = document.location.toString();
		var newHash = '';

		if ( url.match('#') ) {
			var split = url.split( '#' )[1];
			if ( url.match('=') ) {
				split = split.split( '=' )[0];
			}
			$('.nav-tabs a[href=#' + split + ']').tab('show');
		}

		// Change hash for page-reload
		$('.nav-tabs a').on('shown', function (e) {
			e.preventDefault();
			var
				hash = e.target.hash,
				item = $('' + hash),
				id = item.attr('id');

			item.removeAttr('id', '');
				window.location.hash = e.target.hash;
			item.attr('id', id);
		});

		$(window).on('hashchange', function(e){
			e.preventDefault();

			var hash = window.location.hash;
			if ( hash !== newHash ) {
				$('.nav-tabs a[href=' + hash + ']').tab('show');
			}
			newHash = hash;
		});

	});

}(window.jQuery);


