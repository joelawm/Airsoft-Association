<html>
<head>
     <title>NAA</title>
     <?php include("includes/head.txt"); ?>
</head>
<body>
     <!--Header-->
     <?php include("includes/header.php"); ?>
     <!--Welcome Portion-->
     <div class="main">
          <div class="slideshow-container">
               <div class="mySlides">
                    <img src="/Photos/NAA Photos/American_Flag.jpg" style="width:100%;height:600px;">
               </div>
               <div class="mySlides">
                    <img src="/Photos/NAA Photos/Landscpae_American Flag_Soldier.jpg" style="width:100%;height:600px;">
               </div>
               <div class="mySlides">
                    <img src="/Photos/NAA Photos/Sniper Closeup_side.jpg" style="width:100%;height:600px;">
               </div>
               <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
               <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
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

      </div>
</body>
</html>
<style><?php include($_SERVER['DOCUMENT_ROOT'] . "/css/carousel.css"); ?></style>
<script><?php include($_SERVER['DOCUMENT_ROOT'] . "/scripts/carousel.js"); ?></script>
