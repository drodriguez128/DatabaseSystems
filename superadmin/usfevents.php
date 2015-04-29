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
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="newadmin.php">Add a New Admin</a></li>
              <li><a href="newuniversity.php">Add a New University</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="http://localhost/ucfeventswebsite/index.php">Login / Register<span class="sr-only">(current)</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>University of South Florida</h1>
      </div>
    </div>

    <div class="mini-container">
      <!-- Example row of columns -->
      <div class="row">
        <?php
        $mysql_hostname = "localhost";
        $mysql_user = "root";
        $mysql_password = "";
        $mysql_database = "databasesystemsproject";
        $bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Connection to server Failed!");
        mysql_select_db($mysql_database, $bd) or die("Failed to open database!");
        $results = mysql_query("SELECT * FROM collegeevents WHERE cid=666");
        $numrows=mysql_num_rows($results);
        while($row = mysql_fetch_assoc($results)) {
        ?>
            <div class="col-md-6">
                <h3>Event Name:<h5><?php echo $row['title']?></h5></h3>
                <h3>Event Type:<h5><?php echo $row['eType']?></h5></h3>
                <h3>Date:<h5><?php echo $row['edate']?></h5></h3>
                <h3>Event ID:<h5><?php echo $row['eid']?></h5></h3>
                <h3>Contact email:<h5><?php echo $row['email']?></h5></h3>
                <h3>Contact phone:<h5><?php echo $row['phone']?></h5></h3>
                <h3>Description:<h5><?php echo $row['description']?></h5></h3>
            </div>
        <?php
       }
       ?>
      <hr>
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
  <footer>
    <p>&copy; Team 4</p>
  </footer>
 
</html>