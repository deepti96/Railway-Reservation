<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
	<style>
	table{
    width: auto !important;
}
td{
	color:white;
}
th{
	color:#352e82;
}
strong{
	color:#352e82;
	font-size: 20px;
}

body{
  background: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.2)), url("./img/back_train2.jpg") no-repeat;
  background-size: 100% 110%;
  background-opacity: 0.2;
}

h1{
	font-size: 30px;
}
.form-group{
	border: 2px solid #000000;
	padding: 5px;
	margin-left: 300px;
	margin-right: 300px;
	 background-color: rgba(255,255,255,.3);
}

	</style>
</head>
<body>
<?php
  $servername = "localhost";
  $username = "root";
  $password = ""; // enter your password here
  $dbName="train_test";
  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbName);
  // Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }
?>
<center>		<form action="bookdetails.php" method="post">
			<div class='form-group'>
			<div style="color: #352e82; font-size: 30px; margin:10px;">PLEASE ENTER YOUR DETAILS HERE:</div>
			<table class='table table-striped table-hover' width="100px">
				<tr>
				<td><strong>Name:&ensp;</strong></td><td> <input class='form-control' type="text" name="usrname" placeholder="Name" maxlength="100" size="40" required></td>
				</tr>
				<tr>
			<td><strong>Email:&ensp;</strong></td><td> <input class='form-control' type="text" name="email" placeholder="Email Id"  maxlength="100" size="40" required></td>
				</tr>
				<tr>
			<td><strong>Mobile Number:&ensp;</strong></td><td> <input class='form-control' type="number" name="mobileno" placeholder="Mobile Number"  maxlength="100" size="40" required>
			</td>
			</tr>
			<tr>

			<td><strong>Number of Seats:&ensp;</strong></td><td> <input class='form-control' type="number" min="1" max="5" name="seats" placeholder="Seats"  maxlength="100" size="40" required></td>
			</tr>
			
			</table>
			<pre>		</pre>	<button class="button btn btn-primary" type="submit">Submit</button>
		</div>
	</form></center>
		<?php
		session_start();
		$date = $_SESSION['date'];
		$train_no = $_SESSION['train_no'];
		//echo "train date ".$date;
		if(isset($_GET["date"])){
			$date = $_GET["date"];
			//echo "train date: ".$date;
			$_SESSION['date'] = $date;
		}
		if($_SERVER['REQUEST_METHOD'] === 'POST'){
			$name = $_POST["usrname"];
			$email = $_POST["email"];
			$number = $_POST["mobileno"];
			$no = $_POST["seats"];
			//echo "date :".$date;
			$sql="insert into train_user(train_no,name,phone_no,seats,date) values(".$train_no.",'".$name."',".$number.",".$no.",'".$date."');";
			mysqli_query($conn,$sql);
			echo "<br><p><center> <h1><font color='#00f104'>Your ticket has been booked!</font></h1></center><br>
			 </p>";
			$pnrquery="select pnr,name,train_no,seats,date from train_user where phone_no=".$number.";";
			$result = $conn->query($pnrquery);
			$info_row=$result->fetch_assoc();
			echo "<center><table class='table table-striped'><tr><th>PNR</th><th>NAME</th><th>Train_no.</th><th>Seats</th><th>Date</th></tr><tr><td>".$info_row['pnr']."</td><td>".$info_row['name']."</td><td>".$info_row['train_no']."</td><td>".$info_row['seats']."</td><td>".$info_row['date']."</td></tr></table>
			<form action='cancellation.php' method='post'>
				<input type='hidden' name='pnr' value='".$info_row['pnr']."'>
				<button type='submit' class='btn btn-danger'>Cancel</button>

		 </form></center>
			";
		}
		$conn->close();
		?>
		<center><div style="margin: 10px;"><a href="./index.php" class="btn btn-primary">Go to Home Page</a></div></center>

</body>
</html>