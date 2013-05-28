$(function() {

	//Initialisations
	var winHeight = $(window).height();
	var winWidth  = $(window).width();
	var infoWidth = winWidth*0.4;
	console.log(winHeight+' '+infoWidth);
	$('#info-area').height(winHeight);
	$('body').click(function(){
		$('#info-area').animate({
		  		width:0
			},400,
			function(){
					$(this).hide();		  		
		  	}
		);
	});

	//Map
	$('#map').usmap({

		// L'action du clique
		click: function(event, data) {
			var state = $('#info-area');
		  	state.html('<h2>'+data.name+'</h2>');
		  	state.show().animate({
		  		width:infoWidth
		  	},400);
		}

	});

})