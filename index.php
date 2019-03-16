<html>
<head>
     <title>Home</title>
     <script type="text/javascript" src="/NAA/scripts/carousel.js"></script>
     <?php
     include("includes/head.txt");
     ?>
</head>
<body>
     <!--Header-->
     <?php
     include("includes/header.php");
     ?>
     <div class="slideshow-container">
          <div class="mySlides">
               <img src="Photos/NAA Photos/American_Flag.jpg" style="width:100%">
          </div>
          <div class="mySlides">
               <img src="Photos/NAA Photos/Landscpae_American Flag_Soldier.jpg" style="width:100%">
          </div>
          <div class="mySlides">
               <img src="Photos/NAA Photos/Sniper Closeup_side.jpg" style="width:100%">
          </div>
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
     </div>
     <div style="text-align:center">
       <span class="dot" onclick="currentSlide(1)"></span>
       <span class="dot" onclick="currentSlide(2)"></span>
       <span class="dot" onclick="currentSlide(3)"></span>
     </div>
     <!--Welcome Portion-->
     <div class="main">
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

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
