<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<h2>Personel Blog</h2>
<nav class="navbar navbar-inverse">
      <div class="container-fluid">    
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          </div>
        <div class="collapse navbar-collapse" id="inverseNavbar1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="login.html">Login<span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group"> </div>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Logout</a></li>
            
          </ul>
        </div>
  </div>
</nav>
	<form method="post" action="login.php">
        <div class="box" style="font-size:20px">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="Username" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'username');" class="email" /><br /><br>
          
        <input type="password" name="password" placeholder="Password" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'password');" class="email" />
        <input type="submit" name="submit" value="Sign In" />
        <a href="#"><div id="btn2">Sign Up</div></a> 
        </div>
  </form>
	<?php
		$un = $_GET["username"];
		$pw = $_GET["password"];
		$conn = pg_pconnect("dbname=aksanuraag");
		if (!$conn) {
		  echo "An error occurred.\n";
		  exit;
		}

		$result = pg_query($conn, "SELECT username, password FROM users WHERE username='$un' AND password='$pw'");
		if (!$result) {
		  echo "An error occurred.\n";
		  exit;
		}

		$rows = pg_num_rows($result);
		if($rows == 1){
			echo "Welcome " . $un;
		}
		else{
			header("Location: http://aksanuraag.imad.hasura-app.io/");
		}	
	
	?>
</body>
</html>
















