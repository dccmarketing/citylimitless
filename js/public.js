(function( $ ) {
	'use strict';

	$(function() {

		var link = $('#link-engage');
		var popup = $('.popup-engage' );

		/**
		 * Toggles a "hide" class on the homepage engage "popup"
		 */
		link.click(function( e ){

			e.preventDefault();

			if ( popup.hasClass('hide') ) {

				popup.removeClass('hide');
				link.addClass('active');

			} else {

				popup.addClass('hide');
				link.removeClass('active');

			}

		});

	});

	/*$(function() {

		/**
		 * Toggles a "hide" class on pages with tabs
		 *
		$('.children .tab-child').click(function(){

			var tabID = $(this).attr('data-id');
			var section = $( '#child-' + tabID );

			if ( $('.section-child:not(#child-' + tabID + ')') ) {

				$('.section-child:not(#child-' + tabID + ')').addClass('hide');

			}

			if ( section.hasClass('hide') ) {

				section.removeClass('hide');
				$(this).addClass('active');

			} else {

				section.addClass('hide');
				$(this).removeClass('active');

			}

		});

	});
*/

	$(function(){

		$('.section-child').hide();

		$('.tab-child').on('click', function(){

			var tabID = $(this).attr('data-id');

			$('.section-child:not(.child-' + tabID + ')').slideUp();

			$( '.child-' + tabID ).slideToggle();

		});
	});

		/*$('.tab-child').on('click', function(e){

			e.preventDefault();

			var tabID = $(this).attr('data-id');
			//var match = $( '.child-'+tabID);

			//alert( section );

			var badMatch = $('.section-child:not(.child-'+tabID+')');

			if( badMatch.is(":visible") ){

				badMatch.slideUp('1000ms','easeInBack').promise().done(function(){

					$('.child-'+tabID).slideDown('1000ms','easeOutBack');

				});

			} else {

				$('.child-'+tabID).slideToggle('1000ms');

			}

		});
	});*/

})( jQuery );