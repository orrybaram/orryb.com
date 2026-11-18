$(document).ready(function() {
	
	/* Tabs Activiation
	================================================== */
	var tabs = $('ul.tabs'),
	    tabsContent = $('ul.tabs-content');
	
	tabs.each(function(i) {
		//Get all tabs
		var tab = $(this).find('> li > a');
		tab.click(function(e) {
			
			//Get Location of tab's content
			var contentLocation = $(this).attr('href') + "Tab";
			
			//Let go if not a hashed one
			if(contentLocation.charAt(0)=="#") {
			
				e.preventDefault();
			
				//Make Tab Active
				tab.removeClass('active');
				$(this).addClass('active');
				
				//Show Tab Content
				$(contentLocation).fadeIn(400).siblings().hide();
				
			}  
		});
	});//END TABS
	
	
	/* Show Profile Edit Buttons on load
	================================================== */
	 
	$(".edit-link").show();
	
	
	/* Edit Basic Profile -- Profile Page
	================================================== */
	 $('#edit-basic-info').click(function() {
	 	$('#profile-content').hide();
	 	$('#profile-edit').fadeIn();
	 	 //$(".chzn-select").chosen(); //fixes alignment problems... for now.
	 });
	 
	 $('#cancel-profile-edit, #save-profile-edit').click(function() {
	 	$('#profile-edit').hide();
	 	$('#profile-content').fadeIn();
	 });
	 
	 /* Edit Interests -- Profile Page
	================================================== */
	 $('#edit-interests').click(function() {
	 	$('#profile-interests').hide();
	 	$('#interests-edit').fadeIn()
	 });
	 
	 $('#cancel-interests-edit, #save-interests-edit').click(function() {
	 	$('#interests-edit').hide();
	 	$('#profile-interests').fadeIn();
	 });
	 
	 /* Edit Overview -- Profile Page
	================================================== */
	 $('#edit-overview').click(function() {
	 	$('section#profile-tabs').hide();
	 	$('#overview-edit').fadeIn()
	 });
	 
	 $('#cancel-overview-edit, #save-overview-edit').click(function() {
	 	$('#overview-edit').hide();
	 	$('section#profile-tabs').fadeIn();
	 });
	 
	 /* Show Filter Options -- Investor Page
	================================================== */
	 $('#investor-filter').hide();
	 $('#show-filter').show();
	 
	 $('#show-filter').toggle(function() {
	 	$('#investor-filter').slideDown(200),
	 	$(this).text('Hide Filter Options');
	 }, function() {
	 	$('#investor-filter').slideUp(200),
	 	$(this).text('Show Filter Options');
	 
	 });
	 
	 
	  /* Fade in Intro
	================================================== */
	 //hide stuff
	 $('#nobrand-laptop, aside.intro, aside button, #features .container, .row.why' ).hide();
	 
	 //fadeIn stuff
	  $('#nobrand-laptop').fadeIn(500);
	  $('aside.intro').fadeIn(500);
	  $('#features .container').fadeIn(500);
	  $('.row.why').fadeIn(500); 
	  $('aside.intro button').delay(750).fadeIn(500);
	  
	  /* Login Dropdown
	================================================== */
	$(".login-link").click(function(e){
		e.preventDefault();
		$("#login-form").toggle('fast');//show form
		$(".login-link").toggleClass('active');//make login button active
		$("input:first").focus();//focus on first form
		if(Modernizr.opacity){
			$('#nobrand-laptop, aside.intro, aside button, #features .container' ).fadeTo(500, .5);
		};
	});
	
	
	
	//prevent form from closing on click
	$('#login-form').mouseup(function() {
		return false;
	});
	
	//hide the form when you click off it
	$(document).mouseup(function(e) {
		if ($(e.target).parent("a.login-link").length == 0) {
			$(".login-link").removeClass('active');
			$("#login-form").hide('fast');
			if(Modernizr.opacity){
				$('#nobrand-laptop, aside.intro, aside button, #features .container' ).fadeTo(500, 1);
			};
		}
	});
	
	  /* Tool Tips
	================================================== */
	 $('#investments a').tooltip({
	 	relative: true,
	 	position: 'bottom center',
	 	offset: [5, 0],
	 	effect: 'fade',
	 	fadeInSpeed:100, 
	 	fadeOutSpeed:200,
	 	delay: 100,
	 });
	 
	 
	 /* About page -- Isotope
	================================================== */
	 
	 $('#team-member-container').isotope({ filter: '*' });
	 
	 $('#filters a').click(function(){
  		var selector = $(this).attr('data-filter');
		$('#team-member-container').isotope({
		 filter: selector
		 });
		$('#filters li').removeClass('selected');
		$(this).parent().addClass('selected'); 
	});
	
	/* About page -- Grey to Color pics
	================================================== */ 
	 $('.member-info').hide();
	 
	 $('.team-member-wrapper').hover( function() {
	 	$(this).find('.member-info').stop(true, true).fadeIn(500);
	 }, function () {
	 	$(this).find('.member-info').stop(true, true).fadeOut(200);
	 });
	 
	 
	 
	 
});