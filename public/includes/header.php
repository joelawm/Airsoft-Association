<?php
// Initialize the session
if(!isset($_SESSION))
{
	session_start();
}
?>
<html>
<body>
     <!--Socail Media Navbar-->
	<nav class="navbar navbar-expand-lg navbar-dark topnavbar py-0 d-none d-lg-block" role="navigation">
		<ul class="navbar-nav ml-auto">
			<span class="navbar-text py-0">Connect with us:</span>
			<li class="nav-item"><a class="nav-link py-0" href="https://www.facebook.com/TheNationalAirsoftAssociation/">Facebook</a></li>
			<li class="nav-item"><a class="nav-link py-0" href="https://twitter.com/AirsoftAssoc">Twitter</a></li>
			<li class="nav-item"><a class="nav-link py-0" href="https://www.instagram.com/TheNationalAirsoftAssociation/">Instagram</a></li>
			<li class="nav-item"><a class="nav-link py-0" href="https://www.youtube.com/channel/UC3LFSFS5otvxXUd9KQp2orA">YouTube</a></li>
		</ul>
	</nav>
     <nav class="navbarmain navbar navbar-expand-lg navbar-light" role="navigation">
          <div class="container">
			<a class="navbar-brand" href="/"><b>NAA</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		     </button>
               <div class="collapse navbar-collapse" id="navbarCollapse2">
                    <ul class="navbar-nav ml-auto">
                         <li class="nav-item"><a class="nav-link" href="/Sponsors">SPONSORS</a></li>
                         <li class="nav-item"><a class="nav-link"href="/Forum">FORUM</a></li>
                         <li class="nav-item dropdown">
                              <a href="/Information" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INFORMATION</a>
                              <div class="dropdown-menu">
                                   <a class="dropdown-item" href="/Information/PlacesToAirsoft">Places to Airsoft</a>
                                   <a class="dropdown-item" href="/Information/GeneralRules">General Rules</a>
                                   <a class="dropdown-item" href="/Information/AirsoftStores">Airsoft Stores</a>
                              </div>
                         </li>
                         <li class="nav-item"><a class="nav-link" href="/Media">MEDIA</a></li>
                         <li class="nav-item"><a class="nav-link" href="/Donate">DONATE</a></li>
                         <li class="nav-item"><a class="nav-link" href="/Contact">CONTACT</a></li>
					<span class="navbar-text d-none d-lg-block" style="font-size:20px; padding:3px;">|</span>

                         <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) : ?>
                              <li class="nav-item dropdown">
                                   <a href="/inbox.php" class="hidden-xs nav-link" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14 16"><path fill-rule="evenodd" d="M0 4v8c0 .55.45 1 1 1h12c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1H1c-.55 0-1 .45-1 1zm13 0L7 9 1 4h12zM1 5.5l4 3-4 3v-6zM2 12l3.5-3L7 10.5 8.5 9l3.5 3H2zm11-.5l-4-3 4-3v6z"/></svg></a>
                                   <ul class="dropdown-menu">
                                        <div style="padding:15px;">
                                             <h2 class="dropdown-item">Messages</h2>
                                             <button class="dropdown-item btn btn-default">Compose New</button>
                                             <p class="dropdown-item">Display notification</p>
                                             <a class="dropdown-item" href="/notifications.php">View All</a>
                                        </div>
                                   </ul>
                              </li>
                              <li class="nav-item dropdown">
                                   <a href="/notifications.php" class="hidden-xs nav-link navbar-transparent" data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 16"><path fill-rule="evenodd" d="M14 12v1H0v-1l.73-.58c.77-.77.81-2.55 1.19-4.42C2.69 3.23 6 2 6 2c0-.55.45-1 1-1s1 .45 1 1c0 0 3.39 1.23 4.16 5 .38 1.88.42 3.66 1.19 4.42l.66.58H14zm-7 4c1.11 0 2-.89 2-2H5c0 1.11.89 2 2 2z"/></svg></a>
                                   <ul class="dropdown-menu">
                                        <div style="padding:15px;">
                                             <li><h2 style="padding:5px;">Notifications</h2></li>
                                             <li class="divider"></li>
                                             <li><p>Display notification</p></li>
                                             <li class="divider"></li>
                                             <li><a href="/notifications.php">View All</a></li>
                                        </div>
                                   </ul>
                              </li>
                              <li class="nav-item"><a href="/Account" style="padding:4px;" class="hidden-xs nav-link"><img src="/Photos/Forum/TempProfilePicture.jpg" class="img-fluid" style="width:30px;height:30px; border-radius: 75%;"></img></span></a></li>
                              <li class="nav-item dropdown">
                                   <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo htmlspecialchars($_SESSION["username"]); ?><span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="/Account">Account</a></li>
                                        <li class="nav-item"><a class="nav-link" href="/logout.php">Sign Out</a></li>
                                   </ul>
                              </li>
                         <?php else : ?>
                              <li class="nav-item"><a class="nav-link" href="/login.php">LOGIN</a></li>
                              <li class="nav-item"><a class="nav-link" href="/r.php">SIGN UP</a></li>
                         <?php endif; ?>
                    </ul>
               </div>
          </div>
     </nav>
</body>
</html>
