$(function() {

	//Initialisations
	var winHeight = $(window).height();
	var winWidth  = $(window).width();
	var infoWidth = winWidth*0.4;

	$('#info-area').height(winHeight);
	// $('body').click(function(){
	// 	$('#info-area').animate({
	// 	  		width:0
	// 		},400,
	// 		function(){
	// 				$(this).hide();		  		
	// 	  	}
	// 	);
	// });

	var affichage = $('#info');

	// Action de survol
	$('#elem').hover(

		//Survol
		function() {

			var pays = $(this).text();

			console.log('Pays = '+pays);

			$.post("./server/getData.php",
				{ 
					"action": "survol",
					"mode"  : "victime",
					"pays"  : pays
				}, function(data){
			    	console.log("Retour AJAX survol : "+data);
			    	data = $.parseJSON(data);
			    	affichage.html("Pays : "+data.Pays+'<br>'+"Nombre de morts : "+data.Nbr+'<br>'+"Pourcentage : "+data.Pourcent+'%');
			});

			affichage.show();
		},
		//Sortie
		function(){
			affichage.hide();
		}
	);

	// Action au clique
	$('#elem').click(function(){

		var pays = $(this).text();

		$.post("./server/getData.php",
			{
				"action": "clique",
				"pays"  : pays
			}, function(data){
				console.log('Retour AJAX clique : '+data);
				data = $.parseJSON(data);
				var state = $('#info-area');
		  		state.html('<h2>'+data.Pays+'</h2><p>'+data.Top5+'</p>');
		  		state.show().animate({
		  		width:infoWidth
		  		},400);
			}
		);
	});

});