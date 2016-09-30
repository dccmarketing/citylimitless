/**
 * Shows the appropriate content section based on the selected tab.
 */

(function( $ ) {

	'use strict';

	var childTabs, childSections;

	childTabs = document.querySelectorAll( '.tab-child' );
	childSections = document.querySelectorAll( '.section-child:not(.single-child)' );

	if ( ! childTabs && ! childSections ) { return; }

	/**
	 * Displays the content section for the selected tab.
	 * @param 		obj 		event 		The event.
	 */
	function showTabSection( event ) {

		var tabID = this.getAttribute( 'data-id' );
		if ( ! tabID ) { return; }

		var otherSections = document.querySelectorAll( '.section-child:not(.child-' + tabID + ')' );

		for ( var others = 0; others < otherSections.length; others++  ) {

			var other = otherSections[others];

			$(other).slideUp();

		}

		var section = document.querySelector( '.child-' + tabID );

		$(section).slideToggle();

	}

	/**
	 * Hides each section.
	 */
	for ( var i = 0; i < childSections.length; i++ ) {

		var section = childSections[i];
		section.style.display = 'none';

	}

	/**
	 * Sets an event listener on each tab.
	 */
	for ( var j = 0; j < childTabs.length; j++ ) {

		var tab = childTabs[j];

		tab.addEventListener( 'click', showTabSection );

	}

})( jQuery );
