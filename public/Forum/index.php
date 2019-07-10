<html>
<head>
     <title>Forum</title>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.txt"); ?>
</head>
<body>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/Forum/content_function.php"); ?>
     <div class="container-fluid">
          <h1>Forums</h1>
          <!--Forum design starts here-->
          <div class="row-fluid">
               <div class="col-lg-10 spacing" style="background-color:#efefef;">
                    <ol style="padding: 0px;">
					<?php dispcategories(); ?>
                    </ol>
               </div>
			<!--Advertisments-->
               <div class="col-lg-2 spacing" style="background-color:#efefef;">
                    <h4 class="header-styling">Advertisment</h4>
                    <!--insert size here-->
                    <a href="#advertismentlink"><img class="img-fluid advertisment-style" src="/Photos/Forum/dickbutt.jpg"></a>
               </div>
               <div class="col-lg-2 spacing" style="background-color:#efefef;">
                    <h4 class="header-styling">Information</h4>
                    <a href="#advertismentlink"><img class="img-fluid advertisment-style" src="/Photos/Forum/dickbutt.jpg"></a>
               </div>
           </div>
     </div>
</body>
</html>
