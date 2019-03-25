<html>
<head>
     <title>Forum</title>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.txt"); ?>
</head>
<body>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
     <div class="container-fluid">
          <div class="text-center">
               <b style="font-size:60px;color:#000000;">Forum</b>
          </div>
          <table class="table table-striped">
              <div class="table responsive">
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Last Name</th>
                        <th>Number</th>
                         <th>Info</th>
                      </tr>
                  </thead>
                  <tbody>
          <?php
          // Include config file
          require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
          $stmt = $link->query('select * from Category');
          if ($stmt->num_rows > 0) {
              // output data of each row
              while($row = $stmt->fetch_assoc()) {
                  echo '<tr>
                            <td scope="row">' . $row["CategoryName"]. '</td>
                          </tr>';
              }
          } else {
              echo "0 results";
          }
          $link->close();
          ?>
                 </tbody>
              </div>
          </table>
     </div>
</body>
</html>
