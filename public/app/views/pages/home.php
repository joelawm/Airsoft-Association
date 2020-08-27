<html>
<head>
     <title>NAA</title>
     <?php include("includes/head.txt"); ?>
</head>
<body>
     <!--Header-->
     <?php include("includes/header.php"); ?>
     <!--Welcome Portion-->
     <div class="container">
          <div class="slideshow-container">
               <!--1080p-->
               <div class="mySlides">
                    <img class="img-fluid" src="Photos/NAA Photos/Redone.jpg" style="max-width: 100%; height: auto;">
               </div>
               <div class="mySlides">
                    <img class="img-fluid" src="Photos/NAA Photos/Redone1.jpg" style="max-width: 100%; height: auto;">
               </div>
               <div class="mySlides">
                    <img class="img-fluid" src="Photos/NAA Photos/Redone2.jpg" style="max-width: 100%; height: auto;">
               </div>
               <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
               <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <div style="text-align:center; padding-top:15px;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
          <!--Body content-->
          <div class="row row-centered">
               <div class="col-lg-12">
                    <h1>Welcome Airsofters!</h1>
               </div>
           </div>
           <div class="row row-centered">
                <div class="col-sm-12 col-md-12">
                     <h2 style="padding-top:15px;">What do we do?</h2>
                     <p>We're the NAA here to protect your right to airsoft! We want to see this sport grow globally and see it get protected in your local area.
                      With your help we can make this happen. We as a comapny want to see the sport live on for future generations. There are people out there though do not see this as a sport.
                      We are here to present them with our case, and why airsoft is a sport that is inclusive and just plain fun for everyone. We hope to see your support, wether it be joining us
                      at airsoft events and in town halls, or by simply donating a dollar.</p>
                 </div>
           </div>
           <div class="row row-centered">
                <div class="col-sm-12 col-md-12">
                     <h2>Weekly Message:</h2>
                     <p style="font-size:15px;">
                      We're offically launched! Its the first week here at the NAA website and we need your help filing in the info.
                      Please feel free to email us with local fields around you and with anything you think we should add. This website is for airsofters and we want to see it be
                      in the hadns of airsfoters all over the globe!</p>
                 </div>
           </div>
      </div>
</body>
</html>
<style><?php include("css/carousel.css"); ?></style>
<script><?php include("scripts/carousel.js"); ?></script>
