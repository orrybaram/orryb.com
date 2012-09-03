/* Author: Orry Baram

*/

$(document).ready(function () { 
	
	$("#contact-form").validate({
		rules: {
			email: {
				email:true
			},
			message: {
				minlength:6
			}
		},	
		messages: {
			name: "Hey there... you got a name?",
			email: "Gimme a valid email please!",
			message: "I need more substance than that! Come on, gimme something good!"
			}
	});
	
	$("form input, form textarea").click(function() {
		$(this).next('.error').hide();
	});
	
		
	 
	
	//   PORTFOLIO FILTER AND SHUFFLE
				
	
				$('#portfolio ul#nav li a').click(function() {
					
					//Menu Add/Remove Selected Class
					$('#portfolio ul#nav li').removeClass('selected');
					$(this).parent('li').addClass('selected');
					
					thisItem 	= $(this).attr('class');
					
					if(thisItem != "all") {
					
						$('#portfolio #video li[class='+thisItem+']').stop()
							.animate({'width' : '270px', 
										 'opacity' : 1, 
										 'marginRight' : '15px', 
										  'marginLeft' : '15px'
										});
																			
						$('#portfolio #video li[class!='+thisItem+']').stop()
							.animate({'width' : 0, 
										 'opacity' : 0,
										 'marginRight' : 0, 
										 'marginLeft' : 0
										});
					} else {
						
						$('#portfolio #video li').stop()
							.animate({'opacity' : 1, 
										 'width' : '270px', 
										  'marginRight' : '15px', 
										 'marginLeft' : '15px'
										});
					}
				})
				
				$('#roomIdeas #rooms li img').animate({'opacity' : 0.8}).hover(function() {
					$(this).animate({'opacity' : 1});
				}, function() {
					$(this).animate({'opacity' : 0.8});
				});
				
				
				//LOCAL SCROLL
				$.localScroll();
				
				//toggle slide down and text flip
				$('h1, nav li a#about').click(function () {
					$("#top-container").slideToggle(500);
				}); 
				
				//Menu Add/Remove Selected Class From Main NAV		
				$('a#contactnav, a#portfolionav').click(function() {	
					$('#top-container').slideUp('fast');
					
				});
				
				$('nav li a#about-btm').click(function () {
					$.scrollTo('#main', function() {
					$("#top-container").slideToggle(500);
					});
					
				}); 
				
				//OVERLAYS
				$("ul#video li[rel]").overlay({
					fixed: false,
					expose: { 
							color: '#000', 
							loadSpeed: 300, 
							opacity: 0.7,
						}
				}); 
				
							
			
			
				
	}); 

 



















