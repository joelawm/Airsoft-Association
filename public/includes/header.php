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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                    </button>
               </div>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="clearfix">
                         <ul class="nav navbar-nav navbar-right">
                              <li><a href="/Sponsors">SPONSORS</a></li>
                              <li><a href="/Forum">FORUM</a></li>
                              <li class="dropdown">
                                   <a href="/Information" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INFORMATION<span class="caret"></span></a>
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
                                   <li class="dropdown dropdown-toggle" style="background-color: none;">
                                        <a href="/inbox.php" style="padding: 18px 0px; background-color: none;" class="hidden-xs dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
                                        <ul class="dropdown-menu" style="background-color: none;">
                                             <div style="padding:15px;">
                                                  <li><h2>Messages</h2></li>
                                                  <li><button class="btn btn-default">Compose New</button></li>
                                                  <li class="divider"></li>
                                                  <li><p>Display notification</p></li>
                                                  <li class="divider"></li>
                                                  <li><a href="/notifications.php">View All</a></li>
                                             </div>
                                        </ul>
                                   </li>
                                   <li class="dropdown">
                                        <a href="/notifications.php" style="padding: 18px 5px; class="hidden-xs""><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></span></a>
                                        <ul class="dropdown-menu">
                                             <li><h2 style="padding:5px;">Notifications</h2></li>
                                             <li class="divider"></li>
                                             <li><p>Display notification</p></li>
                                             <li class="divider"></li>
                                             <li><a href="/notifications.php">View All</a></li>
                                        </ul>
                                   </li>
                                   <li><a href="/profile.php" style="padding: 10px 5px;" class="hidden-xs"><img src="/Photos/Forum/TempProfilePicture.jpg" class="img-fluid" style="width:30px;height:30px; border-radius: 75%;"></img></span></a></li>
                                   <li class="dropdown">
                                        <a class="dropdown-toggle" style="padding: 15px 3px;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($_SESSION["username"]); ?><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                             <li><a href="/profile.php">Profile</a></li>
                                             <li><a href="/account.php">Account Settings</a></li>
                                             <li><a href="/logout.php">Sign Out</a></li>
                                        </ul>
                                   </li>
                              <?php else : ?>
                                   <li><a href="/login.php">LOGIN</a></li>
                                   <li><a href="/r.php">SIGN UP</a></li>
                              <?php endif; ?>
                         </ul>
                    </div>
               </div>
          </div>
     </nav>
</body>
</html>
