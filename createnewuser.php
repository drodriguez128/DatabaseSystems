<?php
	function addNewUser()
	{
		db_connection();
		$fn = $_POST['firstName'];
		$ln = $_POST['lastName'];
		$email = $_POST['email'];
		$sid = $_POST['sid'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		$cid = $_POST['cid'];
		$sql = "INSERT INTO users (fname, lname, email, sid, username, password, cid) VALUES ('$fn','$ln','$email','$sid','$username','$pass','$cid')";
		mysql_query($sql);
		header ('Location: home.php');	
	}

	function db_connection()
	{
		$mysql_hostname = "localhost";
		$mysql_user = "root";
		$mysql_password = "";
		$mysql_database = "databasesystemsproject";
		$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Connection to server Failed!");
		mysql_select_db($mysql_database, $bd) or die("Failed to open database!");
	}

?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>UCF Events Viewer</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="style.css">

</head>

<body>

  <div class="login-card">
    <h1>Fill out to Register</h1><br>
  <form method="post">
    <input type="text" name="firstName" placeholder="First Name"/>
    <input type="text" name="lastName" placeholder="Last Name"/>
    <input type="text" name="email" placeholder="Email"/>
    <input type="text" name="sid" placeholder="Student ID"/>
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="pass" placeholder="Password"/>	
    <div align="center">
	<select id="cid" name="cid">
	<option>---Select University---</option>
	<option value="123">Florida State University</option>
	<option value="407">University of Central Florida</option>
	<option value="345">University of Florida</option>
	<option value="666">University of South Florida</option>
	</select>
	<h4>Please Fill In All Entries</h4>
	</div>
	<input type="submit" name="createuser" class="login login-submit" value="create account">
	<?php
		if(isset($_POST["createuser"]) && $_POST["createuser"]=="create account" && $_POST["firstName"]!="" && $_POST["lastName"]!="" && $_POST["email"]!="" && $_POST["sid"]!="" && $_POST["username"]!="" && $_POST["pass"]!="")
		{
			addNewUser();
		}
		
	?>
  </form>
</div>
<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
<div align="center">
	<h5>© Copyright 2015 Team 4</h5>
</div>
</body>

</html>
