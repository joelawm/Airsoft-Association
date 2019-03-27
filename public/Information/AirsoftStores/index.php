<html>
<head>
     <title>Airsoft Stores</title>
     <!--jquery-->
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.txt"); ?>
     <!--jvectormap-->
     <link rel="stylesheet" href="/css/jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
     <script src="/scripts/jquery-jvectormap-2.0.3.min.js"></script>
     <script src="/scripts/jquery-jvectormap-us-aea.js"></script>
     <script src="/scripts/US-map-stores.js"></script>
</head>
<body>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
     <div class="container">
          <div class="row row-centered">
               <h1>Airsoft Stores</h1>
          </div>
          <div id="map" class="container-fluid" style="max-width: 100%; height: auto;"></div>
          <div style="height:30px;"></div>
          <div class="row row-centered">
               <h4>Key:</h4>
               <span class="dot" style="background-color:#F8E23B;"></span>
               <p>General Airsoft Retailers</p>
               <span class="dot" style="background-color:red;"></span>
               <p>Specialized Airsoft Retailers</p>
          </div>
          <div class="row row-centered" style="padding-top:15px;">
               <h4>Don't see your favorite store?</h4>
          </div>
          <div class="row row-centered">
               <div class="col-12-sm"><p>Please message us on our email in the contacts page so then we can contact the store owner and grab the information we need!</p></div>
          </div>
     </div>
</body>
</html>
