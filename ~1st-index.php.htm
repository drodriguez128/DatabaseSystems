<?php
  // function to query the inputted username and password to make sure the user exists
  function checkuser()
  {
    db_connection();
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $usertype = $_POST['usertype'];
    if($usertype=="user") {
      user($user, $pass);
    }
    if($usertype=="admin") {
      admin($user, $pass);
    }
    if($usertype=="superadmin") {
      superadmin($user, $pass);
    }
  }

  function user($user, $pass)
  {
      $query = mysql_query("SELECT * FROM users WHERE username='$user' AND password='$pass'");
      $numrows = mysql_num_rows($query);

      // check the returned result to make sure the username and password are correct
      if ($numrows!=0) 
        header('Location: user/home.php'); 
      else 
        echo("incorrect username/password OR user type!");
  }

  function admin($user, $pass)
  {
      $query = mysql_query("SELECT * FROM collegeadmins WHERE username='$user' AND password='$pass'");
      $numrows = mysql_num_rows($query);

      // check the returned result to make sure the username and password are correct
      if ($numrows!=0) 
        header('Location: collegeadmin/home.php'); 
      else 
        echo("incorrect username/password OR user type!");
  }

  function superadmin($user, $pass)
  {
      $query = mysql_query("SELECT * FROM superadmin WHERE username='$user' AND password='$pass'");
      $numrows = mysql_num_rows($query);

      // check the returned result to make sure the username and password are correct
      if ($numrows!=0) 
        header('Location: superadmin/home.php'); 
      else 
        echo("incorrect username/password OR user type!");
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
    <h1>Please Log-in</h1><br>
    <form method="post">
      <input type="text" name="user" placeholder="Username"/>
      <input type="password" name="pass" placeholder="Password"/>
      <input type="radio" name="usertype" value="user"> user
      <input type="radio" name="usertype" value="admin"> admin
      <input type="radio" name="usertype" value="superadmin"> super admin
      <input type="submit" name="login" class="login login-submit" value="log in"/>
      <?php
        if(isset($_POST["login"]) && $_POST["login"]=="log in" && $_POST["user"]!="" && $_POST["pass"]!="" && $_POST["usertype"]!="")
        {
          checkuser();
        }
      ?>
    </form>
  <form action="createnewuser.php">
    <input type="submit" name="register" class="login login-submit" value="register">
  </form>
  </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

<div align="center">
  <h5>© Copyright 2015 Team 4</h5>
</div>
</body>

</html>