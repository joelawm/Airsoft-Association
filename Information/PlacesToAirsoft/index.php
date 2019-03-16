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
  <div class="main" style="height:720px;">
    <!--Welcome Portion-->
    <div class="main">
      <div id="map" style="width: 600px; height: 400px"></div>
         <script>
         var markers = [
           { latLng: [42.70, -88.5], name: 'Black Ops Airsoft',  weburl : "https://youtube.com" },
           { latLng: [43.73, 7.41], name: 'Monaco' },
           { latLng: [-0.52, 166.93], name: 'Nauru' }
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
         <div class="text-center">
              <b style="font-size:60px;color:#000000;">Welcome Airsofters!</b>
         </div>
         <div class="row text-center">
              <b style="font-size:30px;color:#000000;">What do we do?</b>
         </div>
         <div class="row">
              <p style="font-size:15px;">
               We're the NAA here to protect your right to airsoft! We want to see this sport grow globally and see it get protected in your local area.
               With your help we can make this happen. We as a comapny want to see the sport live on for future generations. There are people out there though do not see this as a sport.
               We are here to present them with our case, and why airsoft is a sport that is inclusive and just plain fun for everyone. We hope to see your support, wether it be joining us
               at airsoft events and in town halls, or by simply donating a dollar.</p>
         </div>
         <div class="row text-center">
              <b style="font-size:30px;color:#000000;">Weekly Message:</b>
         </div>
         <div class="row center-block">
              <p style="font-size:15px;">
               We're offically laucnhed! Its the first week here at the NAA website and we need your help filing in the info.
               Please feel free to email us with local fields around you and with anything you think we should add. This website is for airsofters and we want to see it be
               in the hadns of airsfoters all over the globe!</p>
         </div>
         <div class="row text-center">
              <b style="font-size:30px;color:#000000;">Video of the week!</b>
         </div>
         <div class="row">
              <center><iframe width="450" height="350" src="https://www.youtube.com/embed/dvRPisg6CO0"></iframe></center>
         </div>
         <div class="row text-center">
              <b style="font-size:30px;color:#000000;">New Sponsors!</b>
         </div>
         <div class="row text-center" style="width:1186px;">
              <p style="font-size:15px;"><span class="glyphicon glyphicon-minus"></span>Meyer Industries</p>
         </div>
    </div>
  </div>
</body>
</html>
