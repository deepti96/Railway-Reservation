<?php
  $servername = "localhost";
  $username = "root";
  $password = ""; // enter your password
  $dbName="train_test";
  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbName);
  // Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }
?>

<?php
	$pnr = $_POST["pnr"];
	echo "<font style='color: #352e82; size: 30px;'>pnr: ".$pnr."</font>";
	$sql = "delete from train_user where pnr=".$pnr.";";
	mysqli_query($conn,$sql);
?>
<head><style>
a:link {
    color: white;
}
a:visited {
    color: white;
}

a:hover {
    color: hotpink;
}
/* selected link */
a:active {
    color: white;
}
</style></head>
<body>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
  <font color="red"><center><h1><strong>The ticket has been cancelled!</strong></h1><center></font>
    <a href="./index.php" class="btn btn-primary">Go to Home Page</a>
</body>
