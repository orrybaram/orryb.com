/* 
*  Author: Orry Baram
*/
$(function() {

	// initialize scrollable
	$(".scrollable").scrollable({
		//circular: true
	});
	
	// initialize prettyPhotos!
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools:false,
		overlay_gallery:false,
		theme: 'light_rounded'
	});
});
























