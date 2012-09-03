(function($) {
  // Shell for your plugin code
  $.fn.textHighlite = function(options) {
    options = $.extend($.fn.textHighlite.defaults,options);
    // Plugin code
    return this.each(function() {
      // Do something to each item
      
      
      
	  var $this= $(this),
	   	  bkgcolor = $this.css('color'),
	      length = $this.css('width'), 
	      height = $this.css('height'),
	 	  highliteWrapper = "<div class='" + options.highliteClass + "'></div>",
	 	  moveOut = parseInt(length) + 1 + "px",
	 	  highliteSelect = ("." + options.highliteClass);
	 	  	
	 	  console.log(highliteSelect);
	 
	  $this.prepend(highliteWrapper);
	  
	  $(highliteSelect).each(function() {
	  
	  	$(this).css({
	  		backgroundColor: bkgcolor,
	  		display: "block", 
	  		position:"absolute",  
	  		height: height, 
	  		width: length,
	  		left: 0, 
	  		top: 0 
	  	}).delay(500)
	 	  .animate({
	 			left: moveOut,
	 			width:0
	 		},150);

	  
	  });	 
	 
	 
	 
	 $(highliteSelect)
	 		
	         
    });
  }
  $.fn.textHighlite.defaults = {
   		highliteClass : "highlite"
  };
})(jQuery);