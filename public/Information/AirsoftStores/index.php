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
     <div class="main">
          <div class="text-center">
               <b style="font-size:60px;color:#000000;">Airsoft Stores</b>
          </div>
          <div id="map" class="container-fluid" style="width: 800px; height: 600px"></div>
          <div style="height:30px;"></div>
          <div class="center-block" style="padding-top:10px; border: 3px solid black; width:600px;">
               <div class="text-center">
                    <b style="font-size:20px;color:#000000;">Key:</b>
               </div>
               <div class="row text-center" style="padding-top:10px;">
                    <div class="col-sm-4"><b style="font-size:15px;color:#F8E23B;">Yellow: </b></div>
                    <div class="col-sm-5"><p style="font-size:15px;">General Airsoft Retailers</p></div>
               </div>
               <div class="row text-center">
                    <div class="col-sm-4"><b style="font-size:15px;color:red;">Red: </b></div>
                    <div class="col-sm-5"><p style="font-size:15px;">Specialized Airsoft Retailers</p></div>
               </div>
          </div>
          <div class="row text-center" style="padding-top:15px;">
               <b style="font-size:30px;color:#000000;">Don't see your favorite store?</b>
          </div>
          <div class="row text-center">
               <p style="font-size:15px;">Please message us on our email in the contacts page so then we can contact the store owner and grab the information we need!</p>
          </div>
     </div>
</body>
</html>
