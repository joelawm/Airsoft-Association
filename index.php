<html>
<head>
     <title>Home</title>
     <link rel="icon" href="Photos/Favicon/favicon.jpg">
     <link rel="stylesheet" type="text/css" href="css/main.css" />
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--jquery-->
     <script src="scripts/jquery-3.3.1.min.js"></script>
     <!--jvectormap-->
     <link rel="stylesheet" href="css/jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
     <script src="scripts/jquery-jvectormap-2.0.3.min.js"></script>
     <script src="scripts/jquery-jvectormap-us-aea.js"></script>
     <!-- Twitter Bootstrap CDN -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <?php include("includes/header.html"); ?>
  <div class="main" style="height:720px;">
       <div class="row w3-content w3-display-container">
            <img class="frontpageslides img-responsive" src="Photos/NAA Photos/American_Flag.jpg" style="width:1186px;height:700px;">
            <img class="frontpageslides img-responsive" src="Photos/NAA Photos/Landscpae_American Flag_Soldier.jpg" style="width:1186px;height:700px;">
            <img class="frontpageslides img-responsive" src="Photos/NAA Photos/Sniper Closeup_side.jpg" style="width:1186px;height:700px;">
       </div>
  </div>
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
</body>
</html>

<script>
  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("frontpageslides");
      for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 5000); // Change image every 5 seconds
  }
  $('ul.nav li.dropdown').hover(function () {
       $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
  }, function () {
       $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
  });
</script>
