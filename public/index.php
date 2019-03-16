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

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
