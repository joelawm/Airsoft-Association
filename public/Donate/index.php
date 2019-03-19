<html>
<head>
     <title>Donate</title>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/head.txt"); ?>
</head>
<body>
     <?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); ?>
     <div class="main">
          <?php
          	//require ('includes/conn.php');
          	echo '<form action="assn11.php" method="post">';
          	echo '<b class="text-centered" style="padding-top:60px;">Donation Amount</b>';
          	echo '<input type="number" name="amount" id="amount" hint="amount" min="1"><br>';
          	echo '<br><input type="submit" name="Donate" value="Donate"><br>';
          	echo '</form>';

          	if ($_SERVER['REQUEST_METHOD'] == 'POST')
          	{
          		$breed = trim($_POST['breed']);
          		$name = trim($_POST['name']);
          		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              		$sql = "INSERT INTO Dogs (breed, name) VALUES ('$breed', '$name')";
              		// use exec() because no results are returned
              		$conn->exec($sql);
             		echo "New record created successfully";
             	}
          ?>
     </div>
</body>
</html>
