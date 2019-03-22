<html>
<body style="background:#ffffff">
     <!--Socail Media Navbar-->
     <div class="topnavbar">
          <a href="https://www.facebook.com/TheNationalAirsoftAssociation/">FACEBOOK</a>
          <a href="https://twitter.com/AirsoftAssoc">TWITTER</a>
          <a href="https://www.instagram.com/TheNationalAirsoftAssociation/">INSTAGRAM</a>
          <a href="https://www.youtube.com/channel/UC3LFSFS5otvxXUd9KQp2orA">YOUTUBE</a>
          <p>CONNECT WITH US:</p>
     </div>
     <nav class="navbarmain navbar navbar-default" role="navigation">
          <div class="container">
               <div class="navbar-header">
                    <a class="navbar-brand" href="/"><b>NAA</b></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                    </button>
               </div>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="/Sponsors">SPONSORS</a></li>
                         <li><a href="/Forum">FORUM</a></li>
                         <li class="dropdown">
                              <a href="/Information" class="dropdown-toggle" data-toggle="dropdown">INFORMATION<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                   <li><a href="/Information/PlacesToAirsoft">Places to Airsoft</a></li>
                                   <li><a href="/Information/GeneralRules">General Rules</a></li>
                                   <li><a href="/Information/AirsoftStores">Airsoft Stores</a></li>
                              </ul>
                         </li>
                         <li><a href="/Media">MEDIA</a></li>
                         <li><a href="/Donate">DONATE</a></li>
                         <li><a href="/Contact">CONTACT</a></li>
                         <li><a class="hidden-xs" style="font-size: 20px;">|</a></li>
                         <?php
                         // Initialize the session
                         if(!isset($_SESSION))
                         {
                              session_start();
                         }

                         // Check if the user is already logged in, if yes then redirect him to welcome page
                         if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) : ?>
                              <li><a href="/account.php">ACCOUNT</a></li>
                              <li><a href="/logout.php">SIGN OUT</a></li>
                         <?php else : ?>
                              <li><a href="/login.php">LOGIN</a></li>
                              <li><a href="/r.php">SIGN UP</a></li>
                         <?php endif; ?>
                    </ul>
               </div>
          </div>
     </nav>
</body>
</html>
