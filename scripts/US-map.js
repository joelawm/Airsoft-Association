var markers = [
  { latLng: [42.559821, -87.961186], name: 'Black Ops Airsoft',  weburl : "https://youtube.com" },
  { latLng: [42.090524, -88.261203], name: 'Paintball Explosion',  weburl : "https://youtube.com" }
]
$(function(){
  $('#map').vectorMap({
      map: 'us_aea',
      scaleColors: ['#C8EEFF', '#0071A4'],
      normalizeFunction: 'polynomial',
      hoverOpacity: 0.7,
      hoverColor: false,
      markerStyle: {
          initial: {
              fill: '#F8E23B',
              stroke: '#383f47'
          }
      },
      backgroundColor: '#383f47',
      markers: markers,
      onMarkerClick: function(event, index) {
          // alter the weburl
          $(location).attr('href', markers[index].weburl);
      }
  });
});
