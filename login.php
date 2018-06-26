<?php include ".\assests\db\db.php"; ?>

<?php





if(isset($_POST['submit_login'])){

if( isset($_POST['username']) and isset($_POST['password']) ) {
		// include('config.php'); //code is given below (used for database connection)
		$user=$_POST['username'];
		$pass=$_POST['password'];

		$ret=mysqli_query( $connection, "SELECT * FROM bh_users WHERE username='$user' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($connection));
// $sql_query ="select * from bh_users where username LIKE '%$username%'";

  	$row = mysqli_fetch_assoc($ret);
		if(!$row) {
		echo "User not found";
		}
		else {
		        session_start();
	        $_SESSION['user']=$user;
			// header('location: account.php');
      	echo "User  found";
		}
}
}
















?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login page</title>
</head>
<body>

<h2>Login page</h2>
  <form class="login" action="booklist.php" method="post">
Enter Username : <input type="text" name="username"> <br>
Enter password : <input type="password" name="password">
<input type="submit" name="submit_login" value="Log In">
</form>
</body>
</html>
