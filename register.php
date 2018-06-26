<?php include ".\assests\db\db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style media="screen">
#signupcreate{
width: 60%;
margin: 0 auto;
float: none;
}
</style>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


  <title>BookHub App| Registration</title>
</head>
<body>
<h1>Welcome to bookhub App</h1>
<!-- <sub>your list of books</sub> -->
<?php

// $sql_query="insert into bh_users(username,password) values=('$username','$password')";



if(isset($_POST['registrationButton'])){

if(isset($_POST['inputEmail']) and isset($_POST['inputPassword']) ) {
		// include('config.php'); //code is given below (used for database connection)
		$user=$_POST['inputEmail'];
		$pass=$_POST['inputPassword'];

    echo $user;
    echo $pass;

		$ret=mysqli_query( $connection, "insert into bh_users(username,password) values ('$user','$pass')") or die("Could not execute query: " .mysqli_error($connection));
// $sql_query ="select * from bh_users where username LIKE '%$username%'";
if(!$ret){
  echo "User not created";
}else {
    echo "User  created";
}

}
}


?>
1username should be unique
2. password can not empty
3.password should match


maintain session
<form class="" action="register.php" method="post">
  <div class="form-group row" id="signupcreate">
          <div class="col-sm-4">
              <label>Username</label>
              <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Username">
          </div>
          <div class="col-sm-4">
              <label>Password</label>
              <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
          </div><div class="col-sm-4">
              <label>Password</label>
              <input type="password" class="form-control" id="inputPasswordconfirm" placeholder="Confirm Password">
          </div>
          <div class="col-sm-4">
              <button type="submit" name="registrationButton">Submit</button>
          </div>
      </div>
</form>




</body>
</html>
