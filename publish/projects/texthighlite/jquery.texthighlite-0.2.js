(function($) {
    $.fn.textHighlite = function(options) {
    options = $.extend($.fn.textHighlite.defaults,options);
    
    return this.each(function() {

        var elements_to_be_highlited = [];
        var  $this = $(this);
        var highliteWrapper = "<div class='" + options.highliteClass + "'></div>";

        $this.children().each(function(){
            var $this = $(this);
            $this.css({position:'relative'});
     	  	$this.append(highliteWrapper); //add highlite div to each item
     	  	elements_to_be_highlited.push(this); //add elements to array
        });

        $(elements_to_be_highlited).hide();

        function highliteThem(elements_to_be_highlited) {
            if (elements_to_be_highlited.length > 0) {
               var currentElement = elements_to_be_highlited.shift();
               var color = $(currentElement).css('color');
               var width = $(currentElement).css('width');
               var height = $(currentElement).css('height');
               $(currentElement).show()
                    .find("." + options.highliteClass)
                    .css({
                 position:'absolute',
                 backgroundColor: options.color || color,
                 width: 0,
                 height: height,
                 top: '0px',
                 left: '0px'
             })
               .animate({width: width},options.showSpeed, options.easingIn)
               .delay(options.delay)
               .animate({left:width, width:0},options.hideSpeed, options.easingOut, function(){
                 $(this).remove();
		 	highliteThem(elements_to_be_highlited); //iterate over each item recursively
		 });
       }
   }
   highliteThem(elements_to_be_highlited);
});
}
$.fn.textHighlite.defaults = {
   highliteClass : "highlite",
   delay: 0,
   showSpeed: 150,
   hideSpeed: 100,
   color: null,
   easingIn: 'easeInQuint',
   easingOut: 'easeOutQuint'
};
})(jQuery);