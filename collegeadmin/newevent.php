<?php
	function addNewEvent()
	{
		db_connection();
		$eventname = $_POST['eventname'];
		$eventcat = $_POST['eventcat'];
		$edate = $_POST['edate'];
		$cid = $_POST['cid'];
		$eid = $_POST['eid'];
		$contactemail = $_POST['contactemail'];
		$contactphone = $_POST['contactphone'];
		$description = $_POST['description'];

    mysql_query("INSERT INTO collegeevents(title, eType, edate, cid, eid, email, phone, description) VALUES ('$eventname','$eventcat','$edate','$cid','$eid','$contactemail','$contactphone','$description')");
		header('Location: home.php');
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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>College Event Organizer</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/home.css" rel="stylesheet">
    <link href="styles/navbar.css" rel="stylesheet">

    <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>
    <link rel="stylesheet" href="style.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<div class="container">
    <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="images/ceo.png"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="home.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="#">Add a New Event</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="http://localhost/ucfeventswebsite/index.php">Login / Register<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
		<div class="login-card">
   	    <h1>Fill out to add your event</h1><br>
	  <form method="post">
	    <input type="text" name="eventname" placeholder="Event Name"/>
	    <input type="text" name="eventcat" placeholder="Event Category"/>
	    <input type="text" name="eid" placeholder="Event ID"/>
	    <input type="text" name="edate" placeholder="Date yy/mm/dd"/>
	    <input type="text" name="contactemail" placeholder="Contact Email"/>
	    <input type="text" name="contactphone" placeholder="Contact Phone"/>
	    <input type="text" name="description" placeholder="Description"/>
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
		<input type="submit" name="createevent" class="login login-submit" value="create new event">
		<?php
			if(isset($_POST["createevent"]) && $_POST["createevent"]=="create new event" && $_POST["eventname"]!="" && $_POST["eid"]!="" && $_POST["eventcat"]!="" && $_POST["edate"]!="" && $_POST["contactemail"]!="" && $_POST["contactphone"]!="" && $_POST["description"]!="" && $_POST["cid"]!="")
			{
				addNewEvent();
			}	
		?>
	  </form>


      <footer>
        <p>&copy; Team 4</p>
      </footer>
    </div> <!-- /container -->
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>