/**
 * Displays the Engage popup and activates the text on the
 * Engage box while showing the popup.
 */

(function() {

	'use strict';

	var link, popup;

	link = document.querySelector( '#link-engage' );
	popup = document.querySelector( '.popup-engage' );

	if ( ! link && ! popup ) { return; }

	/**
	 * Toggles the hide class on the popup and
	 * toggles the active class on the link.
	 *
	 * @param 		obj 		event 		The event object.
	 */
	function togglePopup( event ) {

		event.preventDefault();

		popup.classList.toggle( 'hide' );
		link.classList.toggle( 'active' )

	} // togglePopup()

	link.addEventListener( 'click', togglePopup );

})();
