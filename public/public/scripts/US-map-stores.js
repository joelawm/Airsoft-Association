var markers = [
  { latLng: [34.079343, -118.154726], name: 'Evike',  weburl : "https://youtube.com" },
  { latLng: [42.171805, -87.930591], name: 'MiR Tactical',  weburl : "https://youtube.com" },
  { latLng: [34.004003, -117.720520], name: 'Umbrella Armoury',  weburl : "https://youtube.com", style: {r: 5, fill:'red'}}
]
$(function(){
  $('#map').vectorMap(
       {
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
