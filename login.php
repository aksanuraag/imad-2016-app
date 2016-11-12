
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









