<html>
<head>
     <title>About</title>
     <!--jquery-->
     <script src="/NAA/scripts/jquery-3.3.1.min.js"></script>
     <!--jvectormap-->
     <link rel="stylesheet" href="/NAA/css/jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
     <script src="/NAA/scripts/jquery-jvectormap-2.0.3.min.js"></script>
     <script src="/NAA/scripts/jquery-jvectormap-us-aea.js"></script>
     <?php
       include($_SERVER['DOCUMENT_ROOT'] . "/NAA/includes/head.txt");
     ?>
</head>
<body>
  <?php
    include($_SERVER['DOCUMENT_ROOT'] ."/NAA/includes/header.php");
  ?>
    <div class="main">
      <div class="text-center">
           <b style="font-size:60px;color:#000000;">Places to play!</b>
      </div>
      <div id="map" class="container-fluid" style="width: 800px; height: 600px"></div>
         <script>
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
         </script>
         <div class="row text-center">
              <b style="font-size:30px;color:#000000;">New Sponsors!</b>
         </div>
         <div class="row center-block">
              <p style="font-size:15px;">
               We're offically laucnhed! Its the first week here at the NAA website and we need your help filing in the info.
               Please feel free to email us with local fields around you and with anything you think we should add. This website is for airsofters and we want to see it be
               in the hadns of airsfoters all over the globe!</p>
         </div>
    </div>
</body>
</html>
