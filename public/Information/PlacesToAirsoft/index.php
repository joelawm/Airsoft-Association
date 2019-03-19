<html>
<head>
     <title>Places to Airsoft</title>
     <!--jquery-->
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.txt"); ?>
     <!--jvectormap-->
     <link rel="stylesheet" href="/css/jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
     <script src="/scripts/jquery-jvectormap-2.0.3.min.js"></script>
     <script src="/scripts/jquery-jvectormap-us-aea.js"></script>
     <script src="/scripts/US-map.js"></script>
</head>
<body>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
     <div class="main">
          <div class="text-center">
               <b style="font-size:60px;color:#000000;">Places to play!</b>
          </div>
          <div id="map" class="container-fluid" style="width: 800px; height: 600px"></div>
          <div class="row text-center">
               <b style="font-size:30px;color:#000000;">Don't see your home field?</b>
          </div>
          <div class="row text-center">
               <p style="font-size:15px;">Please message us on our email in the contacts page so then we can contact the field owner and grab the information we need!</p>
          </div>
     </div>
</body>
</html>
