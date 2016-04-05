var map;
function googleMap(){
	var myLatLeng = {lat: 44.4287147, lng: 12.08003};
	var titleOfMarker = "Autotrasporti Rotari";
	map = new google.maps.Map(document.getElementById('map'), {
		center: myLatLeng,
		zoom: 8
	});

	var marker = new google.maps.Marker({
		position: myLatLeng,
		map: map,
		title: titleOfMarker
	});

}


