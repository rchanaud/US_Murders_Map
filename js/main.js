//Gestion world map
$(function(){
	$('#world-map').vectorMap({
		map: 'world_mill_en',
		backgroundColor: 'transparent',
		series: {
		    regions: [{
		    	values: gdpData,
		        scale: ['#FFFFFF', '#6e1117'],
		        normalizeFunction: 'polynomial'
		    }]
		},
		onRegionLabelShow: function(e, el, code){
    		el.html(el.html()+' (GDP - '+gdpData[code]+')');
  		}
	});
});


//Fb crap
function fbs_click() {
u=location.href;
t=document.title;
window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');
return false;}