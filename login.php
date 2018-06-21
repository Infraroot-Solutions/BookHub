<?php include ".\assests\db\db.php"; ?>

<?php
if(isset($_POST['submit_login'])){
  echo "button is set";
}else {
  echo "button not set";
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
  <form class="login" action="" method="post">
Enter Username : <input type="text" name="username"> <br>
Enter password : <input type="password" name="password">
<input type="submit" name="submit_login" value="Log In">
</form>
</body>
</html>
