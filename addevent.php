<?php


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
              <li><a href="addevent.php">Add a New Event</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Login / Register<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
		<div class="login-card">
   	    <h1>Fill out to Register</h1><br>
	  <form method="post">
	    <input type="text" name="eventname" placeholder="Event Name"/>
	    <input type="text" name="eventcat" placeholder="Event Category"/>
	    <input type="text" name="date" placeholder="Date"/>
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
		<input type="submit" name="createuser" class="login login-submit" value="create new event">
		<?php
			if(isset($_POST["createuser"]) && $_POST["createuser"]=="create account" && $_POST["firstName"]!="" && $_POST["lastName"]!="" && $_POST["email"]!="" && $_POST["sid"]!="" && $_POST["username"]!="" && $_POST["pass"]!="")
			{
				addNewUser();
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