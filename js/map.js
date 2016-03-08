var map;
function initMap(){
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 44.4287147, lng: 12.08003},
    zoom: 8
  });
}
