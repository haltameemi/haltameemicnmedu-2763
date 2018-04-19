(function( $ ) {
	'use strict';
	//need drag and drop sort
	//https://wordpress.stackexchange.com/questions/16342/how-to-save-the-state-of-a-drag-and-drop-jquery-ui-sortables-front-end-layout-ed
	//https://stackoverflow.com/questions/19508860/including-jquery-ui-sortable-in-wordpress-admin-page
	//https://developer.wordpress.org/reference/functions/wp_enqueue_script/
	//https://jqueryui.com/sortable/
	//https://wordpress.stackexchange.com/questions/7221/how-to-correctly-include-jquery-ui-effects-on-wordpress
	//
	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	 //alert('admin jQuery');
	 jQuery("#sortable").sortable();
	 /*
	 jQuery( "#sortable" ).disableSelection();
	 
	jQuery( "li" ).click(function() {
	  alert( "Handler for .click() sortable called." );
	});
	
	jQuery( "*" ).click(function() {
		  //alert( "Handler for .click() * called." );
		  alert(event.target.nodeName);
		  alert(this.nodeName);
		});
		*/
	
	
})( jQuery );
