<html>
<head>
     <title>Forum</title>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.txt"); ?>
</head>
<body>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
     <div class="container-fluid">
          <h1>Forums</h1>
          <!--Forum design starts here-->
          <div class="row-fluid">
               <div class="col-lg-10 spacing" style="background-color:#efefef;">
                    <ol style="padding: 0px;">
                         <?php
                         // Include config file
                         require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
                         $stmt = $link->query('select * from Category');
                         if ($stmt->num_rows > 0)
                         {
                              // output data of each row
                              while($row = $stmt->fetch_assoc())
                              {
                                   echo '<li class="no-style"><h3 class="category-styling">' . $row["CategoryName"]. '</h3>
                                   <ol class="topic-styling">
                                   <li><a href="#">' . $row["CategoryName"]. '</a></li>
                                   <li><span class="glyphicon glyphicon glyphicon-minus" aria-hidden="true"><a href="#">' . $row["CategoryName"]. '</a></span></li>
                                   </ol>
                                   </li>';
                              }
                         }
                         else
                         {
                              echo "0 results.";
                         }
                         $link->close();
                         ?>
                    </ol>
               </div>
               <div class="col-lg-2 spacing" style="background-color:#efefef;">
                    <h4 class="header-styling">advertisment</h4>
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
