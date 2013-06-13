$(function(){

	switchSerial = true;

	//Gestion world map
		map = new jvm.WorldMap({
			map: 'world_mill_en',
			container: $('#world-map'),
			backgroundColor: 'transparent',
			focusOn:{
			  x: 0.5,
			  y: 0.5,
			  scale: 1
			},
			series: {
			    regions: [{
			    	values: serialkillers,
			        scale: ['#FFFFFF', '#FFFF00'],
			        normalizeFunction: 'polynomial'
			    }]
			},
			onRegionLabelShow: function(e, el, code){
				var pays = "<b>"+el.html()+"</b>";
				if(switchSerial){
					if(serialkillers[code]){
					var totalserial  = $('#totalSerial strong').text();
					var statSerials  = (serialkillers[code]*100)/totalserial;
					el.html( pays+'<br>'+serialkillers[code]+' serialkillers<br>Soit '+statSerials.toFixed(2)+"% du monde.");
					}else{
						el.html( pays );
					}
				}else{
					if(victimes[code]){
						var totalvictimes = $('#totalVictims strong').text();
						var statVictimes  = (victimes[code]*100)/totalvictimes;
						el.html( pays+'<br>'+victimes[code]+' victimes<br>Soit '+statVictimes.toFixed(2)+"% du monde.");
					}else{
						el.html( pays );
					}
				}
	  		},
	  		onRegionClick: function(e, code){
	  			if(serialkillers[code]!=null){
		  			$('#world-map').vectorMap('set', 'focus', code);
		  			var map = $('#world-map').vectorMap('get', 'mapObject');
		  			var pays = map.getRegionName(code);
		  			$.post("./server/getData.php",
						{
							"action": "clique",
							"pays"  : pays
						}, function(data){
							//console.log('Retour AJAX clique : '+data);
							data = $.parseJSON(data);
							var state = $('#info-area');
							var tueurlist = "<ol>";
							$.each(data.Top5, function(i,killdata){
								tueurlist += "<li>";
								$.each(killdata, function(key,val){
									if(val!=""){
										tueurlist += "<a href='#'>"+key+" : "+val+"<a/><br>";
									}
								});
								tueurlist += "</li>";
							});
							tueurlist += "</ol>";
					  		state.html('<h2>'+data.Pays+'</h2>'+tueurlist);
					  		state.show();//.animate({ width:300 },400);
						}
					);
				}
	  		}
		});
	
	$("body,svg").click(function(){
		if($('#info-area').is(":visible")){
			$('#info-area').hide().animate({ width:0},400);
			map.setFocus(1);
		}
	});

	//Switch Serialkillers/Victimes
	$('.radioBtns label').click(function(){

		var mapData = $(this).attr('for');

		if(mapData == "victimes"){
			switchSerial = false;
			map.series.regions[0].clear();
			map.series.regions[0].setValues(victimes);
			map.series.regions[0].setScale(['#FFFFFF', '#6e1117']);

		}else if(mapData == "serialkillers"){
			switchSerial = true;
			map.series.regions[0].clear();
			map.series.regions[0].setValues(serialkillers);
			map.series.regions[0].setScale(['#FFFFFF', '#FFFF00']);

		}
	});

});


//Fb crap
function fbs_click() {
u=location.href;
t=document.title;
window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');
return false;}