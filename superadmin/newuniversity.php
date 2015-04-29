<?php
  function addNewUniversity()
  {
    db_connection();
    $name = $_POST['name'];
    $location = $_POST['location'];
    $cid = $_POST['cid'];
    $query = "INSERT INTO colleges (cid, name, location) VALUES ('$cid', '$name', '$location')";
    mysql_query($query);
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
              <li class="active"><a href="#">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="newadmin.php">Add a New Admin</a></li>
              <li><a href="#">Add a New University</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="http://localhost/ucfeventswebsite/index.php">Login / Register<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
		<div class="login-card">
   	    <h1>Fill out to add a university</h1><br>
	  <form method="post">
	    <input type="text" name="name" placeholder="University Name"/>
	    <input type="text" name="location" placeholder="Location"/>
	    <input type="text" name="cid" placeholder="College ID"/>
		  <h4>Please Fill In All Entries</h4>
		  <div align="center">
		    <input type="submit" name="addUniv" class="login login-submit" value="create new university">
		  </div>
    <?php
			if(isset($_POST["addUniv"]) && $_POST["addUniv"]=="create new university" && $_POST["name"]!="" && $_POST["location"]!="" && $_POST["cid"]!="")
			{
				addNewUniversity();
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