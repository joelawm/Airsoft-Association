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
     <div class="container">
          <div class="row row-centered">
               <h1>Places to play!</h1>
          </div>
          <div id="map" class="container-fluid" style="max-width: 100%; height: auto;"></div>
          <div class="row row-centered">
               <h4>Don't see your home field?</h4>
          </div>
          <div class="row row-centered">
               <p>Please message us on our email in the contacts page so then we can contact the field owner and grab the information we need!</p>
          </div>
     </div>
</body>
</html>
